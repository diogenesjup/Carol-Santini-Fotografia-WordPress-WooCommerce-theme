<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.carolsantini.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host email-ssl.com.br)
$mail->Port = 587;
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtplw.com)
$mail->Username = 'sites@carolsantini.com.br'; // Usuário do servidor SMTP (site@enviador.casteloviana.com.br)
$mail->Password = 'TQ{KMex[p!rf'; // Senha do servidor SMTP (Website0--)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = 'sites@carolsantini.com.br'; // Seu e-mail
$mail->Sender = 'sites@carolsantini.com.br'; // Seu e-mail
$mail->FromName = 'Site - Carol Santini'; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@carolsantini.com.br');
//$mail->AddCC('andersondiaszn@outlook.com', 'Simulador de Imóveis - Anderson'); // Copia
//$mail->AddBCC('grupocasteloviana@gmail.com', 'Simulador de Imóveis - Gmail'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Novo contato página de contato - Carol Santini"; // Assunto da mensagem

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$msg = $_POST["msg"];

$mail->Body = "

     <div style='font-family:Calibri;font-size:1.3em;'>
     <h3>Nova solicitação de contato</h3>
     Esses dados vieram do formulário <b>PÁGINA DE CONTATO - CAROLSANTINI.COM.BR</b><br><br>

     <b style='color:#555;'>Nome:</b> $nome <br>
     <b style='color:#555;'>E-mail:</b> $email <br>
     <b style='color:#555;'>Telefone:</b> $telefone <br><br>

     <b style='color:#555;'>Mensagem:</b> $msg <br>
    


     </div>

     ";
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();



?>