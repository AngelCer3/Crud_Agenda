<script>
    $(document).ready(() => {
        $('#actualizar').click(() =>{

            let id_categoria = $("#id").val();
            let categoria = $("#categoria").val();

            if(categoria === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una categoria'
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
                url: "./app/model/process/updateCategoria.process.php",
                data: {
                    id_categoria,
                    categoria
                },
                type: "POST",

                success: () =>{
                    Swal.fire({
                        title: 'Categoria Actualizada',
                        text: "Categoria Actualizada con exito",
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
                        text: 'Error al actualizar datos',
                        timer: 1500
                });
                }
            })
        })
    })
</script>