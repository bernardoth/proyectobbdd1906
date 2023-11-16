

function inicio(){
    return{
        nombre:'Bernardo',
        idcliente:'',
        numero:0,
        prod:[],
        suma:0,
        nuevo:{},
        
        uno:function(){

            this.nombre = "copito";
            console.log(this.nombre);


        },
        cambio:function(){
            //let valor = document.getElementById('cantidad').value;
            let precio = document.querySelector('#precio').value;
            let cantidad = document.querySelector('#cantidad');
            let subtotal = document.querySelector('#subtotal');

            cantidad.addEventListener('input', actualizar);
            function actualizar(e){
                cantidad.value = e.target.value;
                let valor = cantidad.value * precio;
                subtotal.value = valor;
                //console.log('cambio change: '+valor);

            }


        },
        agregar:function(){

            let lista = {};

            lista.id = document.querySelector('#id').value,
            lista.descripcion = document.querySelector('#descripcion').value;
            lista.cantidad = document.querySelector('#cantidad').value;
            lista.precio = document.querySelector('#precio').value;
            lista.subtotal = document.querySelector('#subtotal').value;
            this.prod.push(lista);

            this.limpiar();
            this.mostrar();

            //console.log(this.prod[0]);


        },
        limpiar:function(){
            document.querySelector('#descripcion').value = '';
            document.querySelector('#cantidad').value = '';
            document.querySelector('#precio').value = '';
            document.querySelector('#subtotal').value = '';
        },
        mostrar:function(){
            this.numero = this.prod.length;
            let cont = 1;
            this.prod.forEach(element => { element.item= cont;
                cont++;

            });
            this.total();


        },
        alternativa:function(){
            let fila = document.querySelector('#tabla');

        },
        total:function(){
            this.suma = 0;
            this.prod.forEach(element => {
                this.suma = this.suma + Number.parseFloat(element.subtotal);
            });
        },
        eliminar:function(a){
            console.log(this.prod);
            console.log('item: '+ a);
            this.prod.splice(a-1,1);
            this.mostrar();

        },
        enviar:function(){
            const http = new XMLHttpRequest();
            const url = 'http://proyecto1905.me/venta/ventas';
            http.onreadystatechange = function(){
                if (this.readyState==4 && this.status==200) {
                    console.log(this.responseText);
                }
            }
            http.open("GET",url);
            http.send();
        },
        convertir:function(){
            this.nuevo = JSON.stringify(this.prod);

            console.log(this.nuevo);
            $emit('guardar',this.nuevo);
            Livewire.emit(this.nuevo);
        }


    }
}
