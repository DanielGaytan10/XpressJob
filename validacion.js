document.addEventListener("DOMContentLoaded", function() {
    console.log("Hello, world");

    var form = document.querySelector('form');
    var inputEmail = document.getElementById('email');
    var inputPassword = document.getElementById('password');

    form.addEventListener('submit', function(event) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(inputEmail.value)) {
            alert('Correo electrónico no válido');
            event.preventDefault(); 
            return;
        }


        if (inputPassword.value.length < 8) {
            alert('La contraseña debe tener al menos 8 caracteres');
            event.preventDefault();
            return;
        }
        alert('Formulario válido, se puede enviar al servidor');

    });
});