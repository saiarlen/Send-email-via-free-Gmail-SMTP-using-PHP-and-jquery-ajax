$(document).ready(function() {
    $("#submit").click(function() {
        var subject = $("#subject").val();
        var fname = $("#fname").val();
        var message = $("#message").val();
        var button = $("#submit").val();
        var dataString = 'subject=' + subject + '&fname=' + fname + '&message=' + message + '&button=' + button;

        //validation 
        if (fname == '' || subject == '' || message == '') { //if you are use other form validation scripts remove the if statement 
            alert("Please fill all fields");
        }
        // AJAX Code To Submit Form.
        else {
            $('#loader').show();
            $.ajax({
                type: "POST",
                url: "send-mailer.php",
                data: dataString,
                cache: false,
                success: function(result) {
                    $('#loader').hide();
                    $('#response').html(result).fadeIn();
                    $("#contact_form")[0].reset();
                    $('#response').fadeOut(3000).delay(400);


                }
            });
        }
        return false;
    });
});