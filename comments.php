<?php
    //Set this for global site use
    $site_name = 'Test Site';

    //Maximum Login Attempts
    $max_attempts = 5;
    //Timeout (in seconds) after max attempts are reached
    $login_timeout = 300;

    //ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
    $admin_email = '';

    //EMAIL SETTINGS
    //SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
    $from_email = 'youremail@domain.com'; //Webmaster email
    $from_name = 'Test Email'; //"From name" displayed on email

    //Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
    $mailServerType = 'smtp';
    //IF $mailServerType = 'smtp'
    $smtp_server = 'smtp.mail.domain.com';
    $smtp_user = 'youremail@domain.com';
    $smtp_pw = 'yourEmailPassword';
    $smtp_port = 465; //465 for ssl, 587 for tls, 25 for other
    $smtp_security = 'ssl';//ssl, tls or ''

    //HTML Messages shown before URL in emails (the more
    $verifymsg = 'Click this link to verify your new account!'; //Verify email message
    $active_email = 'Your new account is now active! Click this link to log in!';//Active email message

    $activemsg = 'Your account has been verified! You may now login at <br><a href="'.$signin_url.'">'.$signin_url.'</a>';