<script>
    $(document).ready(() => {
        $('#crear').click(() =>{
            let categoria = $("#categoria").val();

            if(categoria === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre'
                });

                return false;
            }else{
                let regexpCategoria = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpCategoria.test(categoria)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    categoria = $('#categoria').val();
                }
            }
            
            $.ajax({
                url: "./app/model/process/createCategoria.process.php",
                data: {
                    categoria
                },
                type: "POST",

                success: () =>{
                    //console.log("todo ok")
                    Swal.fire({
                        title: 'Categoria Guardada',
                        text: "Categoria guardada con exito",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./readCategoria"
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