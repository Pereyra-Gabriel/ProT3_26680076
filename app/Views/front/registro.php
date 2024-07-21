<div class="container">
        <h2 class="text-center">Registro de Nuevo Cliente</h2>
        <form id="registrationForm" action="register.php" method="POST" novalidate>
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">Por favor ingrese su nombre y apellido.</div>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">Por favor ingrese una contraseña.</div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                <div class="invalid-feedback">Por favor confirme su contraseña.</div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
        <div id="message"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);

            document.getElementById('registrationForm').addEventListener('submit', function(event) {
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('confirmPassword').value;
                let message = document.getElementById('message');

                if (password !== confirmPassword) {
                    event.preventDefault();
                    event.stopPropagation();
                    message.style.color = 'red';
                    message.textContent = 'Las contraseñas no coinciden.';
                    return;
                }

                message.textContent = '';
            });
        })();
    </script>