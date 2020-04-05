## Send email via free Gmail SMTP using PHP and jquery ajax
<br>
If we have a website then we need to send emails to users. That email should go through your contact us page, user registration, etc.

PHP provides a mail() function which used to send an email. But there are limitations while using mail() method. 

In the example script submits the form data using AJAX and using jQuery to help simplify the JavaScript code and a **[PHPMailer](https://github.com/PHPMailer/PHPMailer)** script to handle sending the form data via the Gmail SMTP server. 
<br>
- Before sending emails using the Gmail SMTP server, you make some of the security and permission level settings under your Google **[Account Security Settings](https://myaccount.google.com/security)**
- Make sure that 2-Step-Verification is disabled.
- Turn ON the "Less Secure App" access or click here.

You just config the send-mailer.php and submission.js with your form inputs. When we send emails using Gmail SMTP make sure to set SMTPAuth as TRUE and SMTPSecure as tls/ssl. Use your Gmail Username and Password to send an email.
<br>
<br>
**[Demo](http://demo.saiarlen.com/smtpmail/)**

