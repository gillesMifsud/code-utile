<?php
if(include_once('phpmailer.php')){ // Si php Mailer est bien inclus
  $destin = 's.rolling@luence.fr';
  $mail = new PHPmailer();
  $mail->CharSet 	= 'utf-8'; // UTF-8 pour phpmailer
  $mail->From 	= 'smc@google.fr'; // Expéditeur
  $mail->FromName = 'Server Mail Contact'; // Nom de l'expéditeur
  $mail->AddAddress($destin); // Destinataire
  $mail->IsHTML(true); // True ou False pour format HTML
  $mail->Subject 	= 'Message de Google.fr';
  $mail->Body 	= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<style>p{font-size:14px;}</style>
</head><body>
<p style="background-color:#008756;width:100%;height:15px;border-bottom:solid #00619E 2px;margin-bottom:30px;">&nbsp;</p>
<h1>Message posté via le site</h1>
<p style="background-color:#008756;width:100%;height:15px;border-top:solid #00619E 2px;margin-top:30px;">&nbsp;</p>
<h3>Infos complémentaire :</h3>
</body></html>';
  $logtrue = "";
  if(!$mail->Send()){ // Teste le return code de la fonction
	  $form = 'Erreur lors de l\'envoi du mail, <a href="http://www.sebastien-rolling.fr" title="Développeur site internet">contactez le webmaster</a>.';
  }
  else{
	  $form = 'Votre message est envoyé.';
  }
  unset($mail);
}
else $form = 'Impossible de traiter l\'envoi du mail, contactez le webmaster.';
echo $form;