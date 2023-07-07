<?php 

class SendEmail{

	private $email;
	private $nome;
	private $assunto;
	private $mensagem;

	function __construct($email,$nome,$assunto,$mensagem){

		date_default_timezone_set('Etc/UTC');
		require ('phpmailer/PHPMailerAutoload.php');

		$this->email = $email;
		$this->nome = $nome;
		$this->assunto = $assunto;
		$this->mensagem = $mensagem;
	}

	function getDestinatario()
	{
		return $this->destinatario;
	}

	function getMensagem()
	{
		return $this->mensagem;
	}

	function sendEmail()
	{

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host =  "smtp.mailgun.org";
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);
		$mail->Username = "contato@danonebaby.com.br";
		$mail->Password = "mKwsc9=SWM*zSX4q";
		$mail->setFrom('contato@danonebaby.com.br', 'Danone Baby');
		$mail->addAddress($this->email, $this->nome);
		$mail->Subject = $this->assunto;
		$mail->IsHTML(true);
		$mail->CharSet  = 'utf-8';
		$mail->Body .= $this->mensagem;

		if (!$mail->send()) {
		    return "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    return 1;
		}
	}
}


 ?>