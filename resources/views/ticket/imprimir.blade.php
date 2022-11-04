
<div style="text-align:center;">
<img src="vendor/adminlte/dist/img/logo.jpg" alt="" width="200">
<h1>Melo Express </h1>
<h3>Servicios de Encomiendas <br>
Centro Comercial Metrogaleria local 3-9, San Salvador<h3> 

</div>
<hr>
Fecha: {{ $tickets->fecha }} 
<br> 
Vendedor: {{ $tickets->vendedor }} 
<br>
Correlativo: {{ $tickets->id }}
<h4> Cantidad de pedidos recibidos: </h4>
Casillero: {{ $tickets->casillero }} 
<br>Personalizado: {{ $tickets->personalizado }} 
<br>Punto Fijo: {{ $tickets->punto_fijo }}
<br>Precio Total: ${{ $tickets->total }}


<br> <p></p>
<script>
window.print();
setTimeout(saludos, 3000);

function saludos(){
    window.location.href = '/tickets';
}

</script>





