<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send email via free Gmail SMTP using PHP and jquery ajax</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="robots" content="noindex, nofollow">

</head>
<body>
    <div id="wrapper">
     <h1>Send email via free Gmail SMTP using PHP and jquery ajax</h1>
        <div id="c-form">
            <h2>Example Form</h2>
            <hr/>

        <!-- Form area -->
            <form id="contact_form">
                <input type="text" id="fname" placeholder="Name : " name="fname"/>
                <input type="text" id="subject" placeholder="Subject : " name="subject"/>
                <textarea rows="4" cols="50" id="message" placeholder="Enter Your Message..." name="message"></textarea>
                <input type="submit" id="submit" value="Send" name="send"/>
                <div id="loader"></div>
                <span id="response"></span>
            </form>
        

        <!-- ....//.... -->


        </div>
    </div>
<script src="submission.js"></script>
</body>
</html>