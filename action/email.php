<?php
foreach (glob("PHPMailer/*.php") as $filename) {
	include $filename;
}

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$mensagem = $_POST ['mensagem'];

if (! isset ( $nome ) || ! isset ( $email ) || ! isset ( $mensagem ) ) {
	$retorno = array (
			"error" => array (
					"code" => - 1,
					"msg" => "Campos obrigatórios não preenchidos"
					)
					);
					echo json_encode ( $retorno );
					die ();
}

$mail = new PHPMailer ();

$mail->isSMTP ();
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = 'true';
$mail->Username = 'pedro.colen.c.br@gmail.com';
$mail->Password = '00pcolen00';
$mail->Port = 465;

$mail->From = 'pedro.colen.c.br@gmail.com';
$mail->FromName = 'Contato - Web';
$mail->addAddress ( 'pedro.colen.c.br@gmail.com', 'Formulário Site' );

$mail->Subject = 'Formulário Site - ' . $nome;
$mail->Body = '<b>Nome:</b> '.$nome.'<br/><b>E-mail:</b> '.$email.'<br/><b>Mensagem:</b><br/>'.nl2br($mensagem);

$mail->IsHTML(true);
$mail->CharSet  = "UTF-8";

if ($mail->send ()) {
	$retorno = array (
			"error" => array (
					"code" => 0,
					"msg" => "Email enviado"
					)
					);
} else {
	$retorno = array (
			"error" => array (
					"code" => -2,
					"msg" => "Erro ao enviar email"
					)
					);
}

echo json_encode ( $retorno );
die ();

?>