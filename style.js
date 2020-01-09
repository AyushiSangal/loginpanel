    $(function () {

        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        // $(".signup").click(function () {
        //     var password = $("#password").val();
        //     var confirmPassword = $("#confirm_pasword").val();
        //     if (password != confirmPassword) {
        //         alert("Passwords do not match.");
        //         return false;
        //     }
            
        //     return true;
        // });
    });
