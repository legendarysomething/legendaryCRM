

$(document).ready(function()
{
    
    $(".login-page").removeClass('logging-in');
    // neonLogin.resetProgressBar(true);

    // Enter as Click button
    $('.custom-click-sam').keypress(function(e){
      if(e.keyCode==13)
      $('#custom-login-sam').click();
    });

    // Submit Login form here
    $("#custom-login-sam").click(function(){
        
        var email = $("input#email").val().trim();
        var password = $("input#password").val().trim();

       
        // This will hide the login form and init the progress bar
        $(".login-page").addClass('logging-in'); 
        // Hide Errors
        $(".form-login-error").slideUp('fast');

        // We will wait till the transition ends                
        setTimeout(function()
        {
            
            // The form data are subbmitted, we can forward the progress to 70%
            neonLogin.setPercentage(99);
            setTimeout(function() {
                document.getElementById('form_login').submit();
            }, 200);

            
                
        }, 650);
    

    });
    
});