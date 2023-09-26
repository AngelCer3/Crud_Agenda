<script>
    $(document).ready(() => {
        $('#crearUsuario').click(() =>{
            let nombre = $("#nombre").val();
            let apellido = $('#apellido').val();
            let telefono = $('#telefono').val();
            let email = $('#email').val();
            let contrasena = $('#contrasena').val();

            if(nombre === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre'
                });

                return false;
            }else{
                let regexpNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpNombre.test(nombre)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    nombre = $('#nombre').val();
                }
            }
            if(apellido === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un apellido'
                });

                return false;
            }else{
                let regexpApellido = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpApellido.test(apellido)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    apellido = $('#apellido').val();
                }
            }

            if(telefono === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un telefono'
                });
                return false;
            }else{
                let regexpTelefono = /^[0-9\s]+$/;
                
                if(!regexpTelefono.test(telefono) || telefono.length !==10){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite digitos'
                });
                    return false;
                }else{
                    telefono = $('#telefono').val();
                }
            }

            if(email === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un Email'
                });
                return false;
            }else{
                let regexpEmail = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}/;
                
                if(!(regexpEmail).test(email)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido'
                });
                    return false;
                }else{
                    email = $('#email').val();
                }
            }
            if(contrasena === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una Contraseña'
                });
                return false;
            }else{
                let regexpPassword = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}/;
                
                if((regexpPassword).test(contrasena)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido'
                });
                    return false;
                }else{
                    contrasena = $('#contrasena').val();
                }
            }

            
            $.ajax({
                url: "./app/model/process/registre.proccess.php",
                data: {
                    nombre,
                    apellido,
                    telefono,
                    email,
                    contrasena
                },
                type: "POST",

                success: () =>{
                    Swal.fire({
                        title: 'Usuario Registrado',
                        text: "Usuario dado de alta con exito",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./read"
                    })
                    
                },
                error: () =>{
                    //console.log("error")
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: 'Contacta con el administrador',
                        timer: 1500
                });
                }
            })
        })
    })
</script>