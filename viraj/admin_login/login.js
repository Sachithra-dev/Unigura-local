var eye = document.getElementById('eye');
var password = document.getElementById('password');
var hidePassword = true;

eye.addEventListener("click",function(){
    if(hidePassword == true){
        password.setAttribute('type','text');
        eye.classList.add('fa-eye-slash')
        eye.classList.remove('fa-eye');
        hidePassword = false;
    }
    else{
        password.setAttribute('type','password');
        eye.classList.add('fa-eye');
        eye.classList.remove('fa-eye-slash');
        hidePassword = true;
    }
});