<div style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#f5f8fa;color:#74787e;height:100%;line-height:1.4;margin:0;width:100%!important;word-break:break-word">

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#f5f8fa;margin:0;padding:0;width:100%">
        <tbody>
        <tr>
            <td align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;margin:0;padding:0;width:100%">
                    <tbody>
                    <tr>
                        <td class="header" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;padding:25px 0;text-align:center">
                            <a href="{{url('/')}}" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#bbbfc3;font-size:19px;font-weight:bold;text-decoration:none" target="_blank" >
                                <figure class="figure" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box"><img src="{{$data['logo']}}" width="250" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;max-width:100%;border:none" class="CToWUd"></figure>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#ffffff;border-bottom:1px solid #edeff2;border-top:1px solid #edeff2;margin:0;padding:0;width:100%">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;background-color:#ffffff;margin:0 auto;padding:0;width:570px">
                                <tbody>
                                    <tr>
                                        <td class="content-cell" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;padding:35px">
                                            <h1 style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#2f3133;font-size:19px;font-weight:bold;margin-top:0;text-align:left">Olá!</h1>
                                            <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.</p>
                                            <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;margin:30px auto;padding:0;text-align:center;width:100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                                    <table border="0" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                                                <a href="{{url('/recuperar-senha/'.$data['id'].'/'.$data['code'])}}" class="button button-blue" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;border-radius:3px;color:#fff;display:inline-block;text-decoration:none;background-color:#3097d1;border-top:10px solid #3097d1;border-right:18px solid #3097d1;border-bottom:10px solid #3097d1;border-left:18px solid #3097d1" target="_blank" >Redefinir Senha</a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">Se você não solicitou uma redefinição de senha, nenhuma outra ação será necessária.</p>
                                            <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">Saudações,<br>{{$data['app_name']}}</p>
                                            <table class="subcopy" width="100%" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;border-top:1px solid #edeff2;margin-top:25px;padding-top:25px">
                                                <tbody>
                                                <tr>
                                                    <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                                                        <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;line-height:1.5em;margin-top:0;text-align:left;font-size:12px">Se estiver com problemas para clicar no botão "Redefinir senha", copie e cole a URL abaixo em seu navegador: <a href="{{url('/recuperar-senha/'.$data['id'].'/'.$data['code'])}}" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#3869d4" target="_blank" >{{url('/recuperar-senha/'.$data['id'].'/'.$data['code'])}}</a></p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box">
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;margin:0 auto;padding:0;text-align:center;width:570px">
                                <tbody>
                                <tr>
                                    <td class="content-cell" align="center" style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;padding:35px">
                                        <p style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;line-height:1.5em;margin-top:0;color:#aeaeae;font-size:12px;text-align:center">© {{date('Y')}} {{$data['app_name']}}. Todos os direitos reservados.</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>