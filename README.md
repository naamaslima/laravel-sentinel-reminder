# Redefinição de Senha com Sentinel 2.0 e Laravel

Este é um simples exemplo de uma estrutura para redefinição de senha utilizando recursos do Sentinel no Laravel 5.6. O exemplo é baseado nos casos de solicitação, envio de e-mail e definição de nova senha.

o Laravel fornece métodos convenientes para enviar lembretes de senha e executar redefinições de senha. Mas se você está utilizando o Sentinel como gerenciador de autenticação e autorização de usuários, seria interessante a utilização das classes do Sentinel para o gerenciamento completo dos usuários.

## Reminder

A classe Reminder permite gerenciar lembretes(redefinição de senha) através do Sentinel.
Acesse [Sentinel - Reminder](https://cartalyst.com/manual/sentinel/1.0#reminder) para ver a documentação.


## Observações

- Verifique as configurações de mail do seu projeto para que o envio funcione.
- O código do Controller responsável está bem comentado informando o que está acontecendo em cada situação.
- Este é um repositório de exemplo, utilize conforme a sua necessidade.
