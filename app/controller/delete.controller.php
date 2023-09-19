<script>
    $(document).ready(()=>{
        $('.eliminar').click(function(){
            let id = $(this).data('id');
            Swal.fire({
                title: 'Seguro que quieres borrar el contacto?',
                text: "Esto no tendra marcha atras!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "./app/model/process/delete.process.php",
                        data: {id: id},
                        type: "POST",
                        success: () => {
                            Swal.fire(
                            'Eliminado!',
                            'Su contacto a sido eliminado.',
                            'success'
                        ).then((result) =>{
                            window.location = "./read";
                        });
                        },
                        error: () =>{
                            Swal.fire({
                                icon: 'error',
                                title: 'Fallo grave',
                                text: "Contacta con el administrador"
                            });
                        }
                    })  

                }
            })
        })
    })
</script>