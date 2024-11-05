<?php
//Pull '$base_url' and '$signin_url' from this file
include 'globalcon.php';
//Pull database configuration from this file
include 'dbconf.php';

//Set this for global site use
$site_name = 'Web Sig Municipalidad de Salsipuedes';

//Maximum Login Attempts
$max_attempts = 5;
//Timeout (in seconds) after max attempts are reached
$login_timeout = 300;

//ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
$admin_email = 'ezequieltorres@gmail.com';

//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
$from_email = 'ezequieltorres@gmail.com'; //Webmaster email
$from_name = 'Activacion usuario websiglocal'; //"From name" displayed on email

//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
$smtp_server = 'smtp.mail.gmail.com';
$smtp_user = 'ezekyelt@gmail.com';
$smtp_pw = 'clau&eze14.03';
$smtp_port = 465; //465 for ssl, 587 for tls, 25 for other
$smtp_security = 'ssl';//ssl, tls or ''

//HTML Messages shown before URL in emails (the more
$verifymsg = 'Click en el link para verificar su cuenta!'; //Verify email message
$active_email = 'Su cuenta esta activa! Ir al sitio web!';//Active email message
//LOGIN FORM RESPONSE MESSAGES/ERRORS
$signupthanks = 'Gracias por registrarse! recibira un email para confirmar la su cuenta.';
$activemsg = 'Su cuenta a sido verificada! Para ingresar debe ir a  <br><a href="'.$signin_url.'">'.$signin_url.'</a>';

//DO NOT TOUCH BELOW THIS LINE
//Unsets $admin_email based on various conditions (left blank, not valid email, etc)
if (trim($admin_email, ' ') == '') {
    unset($admin_email);
} elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
    unset($admin_email);
    echo $invalid_mod;
};
$invalid_mod = '$adminemail is not a valid email address';

//Makes readable version of timeout (in minutes). Do not change.
$timeout_minutes = round(($login_timeout / 60), 1);
