//const boton = document.querySelector('#formulario');
//boton.addEventListener('submit',aplicar);

    function aplicar(e){
        e.preventDefault();
        const valor = document.querySelector('#nombre').value;

        if (valor ===""){
                          Swal.fire({
                          title: 'Error',
                          text: 'Campo obligatorio',
                          icon: 'error',
                          confirmButtonText: 'Confirmar'
                        })
      
                    }else{
                            Swal.fire({
                            title:`${valor}`,
                            text: 'Bienvenido ok',
                            icon: 'success',
                            confirmButtonText: 'Confirmar'

                            })
                
                       }
}