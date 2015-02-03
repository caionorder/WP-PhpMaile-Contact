# WP PhpMailer Contact
This plugin integrate Phpmailler with Wordpress.

I use this plugin to send authenticated form of e-mail to your recipients.

## Install
Add in your wp-content/plugins/ and active same.

## How to edit layout e-mail
To change the email layout you must create the variables and create a new method.
Is it really necessary to know object orientation.
Here push model:

	$envia = new enviarEmail;

	// Config Server
	$envia->servidor = "mail.yourdomain.com.br";
	$envia->usuario = "site@yourdomain.com.br";
	$envia->senha = “*********”;
	$envia->porta = 25;

	// Send to? $this->para01 02 03... 05
	$envia->para01 = “email01@yourdomain.com.br";
	$envia->para02 = "email02@yourdomain.com.br";
	$envia->para03 = "email03@yourdomain.com.br";
	$envia->para04 = "email04@yourdomain.com.br";
	$envia->para05 = "email05@yourdomain.com.br";
	$envia->para06 = "email06@yourdomain.com.br";

	// Subject
	$envia->assunto = "Contato pelo Site";

	// Msg
	$envia->nome = $_POST['nome'];
	$envia->telefone = $_POST['telefone'];
	$envia->email = $_POST['email'];
	$envia->mensagem = $_POST['msg'];

	// Submit
	$envia->Contato();
	
Remenber this model is send to method Contato.

Thanks!