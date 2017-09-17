

$(document).ready(function()
{

    $(".login-page").removeClass('logging-in');


    $('.custom-click-sam').keypress(function(e){
      if(e.keyCode==13)
      $('#custom-login-sam').click();
    });


    $("#custom-login-sam").click(function(){

        $(".login-page").addClass('logging-in'); // This will hide the login form and init the progress bar
            
            
        // Hide Errors
        $(".form-login-error").slideUp('fast');

        // We will wait till the transition ends                
        setTimeout(function()
        {
            
            // The form data are subbmitted, we can forward the progress to 70%
            neonLogin.setPercentage(100);
            setTimeout(function() {
                document.getElementById('login-form-submit').submit();
            }, 200);

            neonLogin.resetProgressBar(true);
                
        }, 650);




    });
});