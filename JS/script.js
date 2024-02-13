function togglePassword(){
    const eye = document.querySelector('.visibility_password');
    const password = document.getElementById('password');

    if(password.type == "password"){
        password.type = "text";
        eye.innerText = "visibility_off";
    }else{
        password.type = "password";
        eye.innerText = "visibility";
    }
}

function toggleRetypePassword(){
    const eye = document.querySelector('.visibility_retype_password');
    const password = document.getElementById('retype_password');

    if(password.type == "password"){
        password.type = "text";
        eye.innerText = "visibility_off";
    }else{
        password.type = "password";
        eye.innerText = "visibility";
    }
}