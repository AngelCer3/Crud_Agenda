<script>
    $(document).ready(() => {
        $('#session').click(() => {
            let email = $('#email').val();
            let contrasena = $('#contrasena').val();

            if (email === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un Email'
                });
                return false;
            } else {
                let regexpEmail = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}/;

                if (!(regexpEmail).test(email)) {
                    Swal.fire({
                        icon: 'question',
                        text: 'Tipo de dato no permitido'
                    });
                    return false;
                } else {
                    email = $('#email').val();
                }
            }
            if (contrasena === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una Contraseña'
                });
                return false;
            } else {
                let regexpPassword = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}/;

                if ((regexpPassword).test(contrasena)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Contraseña incorrecta'
                    });
                    return false;
                } else {
                    contrasena = $('#contrasena').val();
                }
            }

            $.ajax({
                type: 'POST',
                data: {
                    email,
                    contrasena
                },
                url: './app/model/process/session.process.php',
                success: (res) => {
                    if (res == 1) {
                        console.log(res)
                        window.location = "./read"
                    } else {
                        window.location = "./home"
                    }
                },
                error: () => {
                    //console.log("error")
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: 'Contacta con el administrador',
                        timer: 1500
                    });
                }
            });
        });
    });
</script>