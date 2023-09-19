<script>
    $(document).ready(() => {
        $('#actualiza').click(() =>{
            let id = $('#id').val();
            let nombre = $("#nombre").val();
            let telefono = $('#telefono').val();
            let email = $('#email').val();
            let id_categoria = $('#categoria').val();
            let categoria = $('#categoria').val();

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

            if(categoria === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una categoria'
                });
                return false;
            }else{
                categoria = $("#categoria").val();
            }
            
            
            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    id_categoria,
                    telefono,
                    email,
                    categoria
                },
                type: "POST",

                success: () =>{
                    Swal.fire({
                        title: 'Contacto actualizado',
                        text: "Contacto actualizado con exito",
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