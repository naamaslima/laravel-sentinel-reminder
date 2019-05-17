<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Validator;
use Session;

class ReminderController extends Controller
{

    /**
     * Método de acesso à tela de solicitação de recuperação de senha.
     */
    public function create() {
        return view('auth.reminders.create');
    }

    /**
     * Método responsável pela solicitação de recuperação de senha, utilizando o Reminder,
     * que permite gerenciar lembretes através do Sentinel.
     */
    public function store(Request $request) {

        //Validação do fomulário
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
        ], $this->messages());

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        
        $credentials = [
            'email' => $request->email,
        ];
        //Verifica se email existe na tabela de usuarios.
        $user = Sentinel::findByCredentials($credentials);

        if (!empty($user)) {
            //Verifica se existe ou cria um lembrete para senha.
            $reminder = Reminder::exists($user) ? Reminder::exists($user) : Reminder::create($user)  ;
            
            //Variáveis para o template do email
            $view = 'auth.reminders.email';
            $data = [
                'from' => 'naoresponda@example.com.br',
                'to' => $user->email,
                'subject' => 'Recuperação de Senha',
                'id' => $user->id,
                'app_name' => 'Meu APP',
                'logo' => 'https://seeklogo.com/images/L/Lorem_Ipsum-logo-1662AFAE6D-seeklogo.com.png', 
                'code' => $reminder->code
            ];
            //Envio do email com o link de acesso ao formulário de recuperação da senha
            Mail::send($view, ['data'=>$data], function ($message) use ($data) {
                $message->from($data['from'], $data['app_name'])->to($data['to'])->subject($data['subject']);
            });
            session()->flash('status', 'Enviado! Verifique a caixa de entrada do seu email.');
            return back();
        } else {
            session()->flash('error', 'Nenhum usuário encontrado com o e-mail informado.');
            return back()->withInput();
        }

    }

    /**
     * Método de acesso à tela de recuperação de senha.
     */
    protected function edit($id, $token)
    {
        $user = Sentinel::findById($id);
        
        //Verifica se existe um registro de lembrete para o usuário e retorna para a view de cadastrar a nova senha.
        $reminder = Reminder::exists($user, $token);
        if ($reminder) {
            return view('auth.reminders.edit', compact('user', 'token'));
        } else {
            session()->flash('error', 'Token Expirado!');
            return redirect('/recuperar-senha');
        }
    }

    /**
     * Método responsável pela definição de nova senha, utilizando o Reminder.
     */
    public function update($id, Request $request)
    {
        //Validação do fomulário
        $validation = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $credentials = [
            'email' => $request->email,
        ];

        $user = Sentinel::findById($id);

        $token = $request->token;
        
        //Verifica se email corresponde ao usuário.
        if ($user->email != $request->email) {
            session()->flash('error', 'O e-mail informádo não é válido.');
            return redirect()->back()->withInput();
        } else {
            
            //Verifica se existe um registro de lembrete para o usuário e retorna para a view de cadastrar a nova senha.
            $reminder = Reminder::exists($user, $token);

            if ($reminder) {
                //Tente completar a redefinição de senha para o usuário usando o código passado e a nova senha
                if(Reminder::complete($user, $request->token, $request->password)) {
                    session()->flash('status', 'Sua senha é alterada com sucesso, faça o login com sua nova senha.');
                    return redirect('/login');
                } else {
                    session()->flash('error', 'Houve algo errado com o seu pedido, por favor, tente novamente mais tarde.');
                    return redirect('/recuperar-senha');
                }
            } else {
                session()->flash('error', 'Houve algo errado com o seu pedido, por favor, tente novamente mais tarde.');
                return redirect('/recuperar-senha');
            }
        }
    }

    public function messages() {
        return [

            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Insira um email válido.',
            'password.required' => 'Os campos de senha são obrigatórios.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.'
        ];
    }
}
