<?php
/*
  Plugin Name: WP PhpMailer Contact
  Plugin URI: http://www.caionorder.com
  Description: WP PhpMailer Contact
  Version: 0.1
  Author: Caio Norder
  Author URI: http://www.caionorder.com/
 */

// LIB
require 'PHPMailerAutoload.php';

// PLUGIN CODE 
class enviarEmail{

  // Informações
  var $nome;
  var $telefone;
  var $email;
  var $mensagem;
  var $data;
  var $cidade;
  var $estado;
  var $endereco;
  var $bairro;
  var $pcidade;
  var $pestado;
  var $investimento;
  
  // Configuração
  var $usuario;
  var $senha;
  var $servidor;
  var $porta;

  // Receber
  var $para01;
  var $para02;
  var $para03;
  var $para04;
  var $para05;
  var $para06;

  // Assunto
  var $assunto;

  // Mensagem
  var $mensage;

  public function Enviar(){

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = $this->servidor;
    $mail->Port = $this->porta;
    $mail->SMTPAuth = true;
    $mail->Username = $this->usuario;
    $mail->Password = $this->senha;
    $mail->isHTML(true);  


    $mail->setFrom($this->usuario);
    if($this->para01) { $mail->addCC($this->para01); }
    if($this->para02) { $mail->addCC($this->para02); }
    if($this->para03) { $mail->addCC($this->para03); }
    if($this->para04) { $mail->addCC($this->para04); }
    if($this->para05) { $mail->addCC($this->para05); }
    if($this->para06) { $mail->addCC($this->para06); }


    $mail->Subject = $this->assunto;
    $mail->Body = $this->mensage;

    if(!$mail->send()) {
        print "<script>alert('Erro, tente novamente mais tarde.')</script>";
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        print "<script>alert('Obrigado, em breve entraremos em contato.')</script>";
    }

  }



  public function Contato(){

    $message = '<html><body>';
    $message .= "<strong>Contato recebido pelo site</strong>";
    $message .= "<p><strong>Nome: </strong>{$this->nome}</p>";
    $message .= "<p><strong>E-mail: </strong>{$this->email}</p>";
    $message .= "<p><strong>Telefone: </strong>{$this->telefone}</p>";
    $message .= "<p><strong>Mensagem: </strong>{$this->mensagem}</p>";
    $message .= '</body></html>';  
    
    $this->mensage = $message;

    self::Enviar();

  }

  public function Franqueado(){

    $message = '<html><body>';
    $message .= "<strong>Contato recebido pelo site</strong>";
    $message .= "<p><strong>Nome: </strong>{$this->nome}</p>";
    $message .= "<p><strong>E-mail: </strong>{$this->email}</p>";
    $message .= "<p><strong>Telefone: </strong>{$this->telefone}</p>";
    $message .= "<p><strong>Data: </strong>{$this->data}</p>";
    $message .= "<p><strong>Cidade: </strong>{$this->cidade}</p>";
    $message .= "<p><strong>Estado: </strong>{$this->estado}</p>";
    $message .= "<p><strong>Bairro: </strong>{$this->bairro}</p>";
    $message .= "<p><strong>Cidade Pretendida: </strong>{$this->pcidade}</p>";
    $message .= "<p><strong>Estado Pretendido: </strong>{$this->pestado}</p>";
    $message .= "<p><strong>Investimento: </strong>{$this->investimento}</p>";
    $message .= "<p><strong>Mensagem: </strong><br />{$this->mensagem}</p>";
    $message .= '</body></html>';
  
    $this->mensage = $message;

    self::Enviar();

  }
  

}