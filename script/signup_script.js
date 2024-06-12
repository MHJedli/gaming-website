function verify_fields()
{
    var user_name = document.forms.signup_form.username.value;
    var user_phone = document.forms.signup_form.phone.value;
    var user_email = document.forms.signup_form.email.value;
    var user_password = document.forms.signup_form.password.value;
    var user_cpassword = document.forms.signup_form.cpassword.value;

    if (isNaN(+user_phone))
    {
        alert("Type your phone number in a numeric way !");
        return false;
    }
    else{
        if(user_phone.length >8)
        {
            alert("Your phone number should not exceed 8 numbers !");
            return false;
        }
    }

    if ( (user_email.indexOf("@")<0) || (user_email.indexOf(".")<0) )
    {
        alert("Check your email !");
        return false;
    }

    if (user_password != user_cpassword)
    {
        alert("Password Mismatch !");
        return false;
    }
}