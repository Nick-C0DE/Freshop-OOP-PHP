<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

class Mail {

	// PHPMailer connection details
	public $config;

	public function __construct() {
		$this->config = new PHPMailer();

		$this->config->isSMTP();
		$this->config->SMTPAuth = true;
		// $this->config->SMTPSecure = 'ssl'; //tls
		$this->config->Host = 'smtp.gmail.com';
		// $this->config->Port = '465';
		$this->config->isHTML(true);

		// $this->config->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->SMTPDebug  = 1; 
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        // $mail->SMTPSecure = 'ssl';
		// $mail->Port = '465';
		
		$this->config->Username = 'chesnelnicolas800@gmail.com';
		// $password = '';
		$this->config->Password = 'ZeliE2017#'; // have to change this

		//To address and name
		$this->config->AddAddress('chesnelnicolas800@gmail.com');
	}
}

?>