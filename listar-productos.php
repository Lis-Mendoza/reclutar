<div class="x-editable-area col-md-12">
  <div class="breadcome-list map-mg-t-40-gl shadow-reset">
    <div class="alert-title">
      <div id="resp" >
        <div >
          <section class="content-header " >
            <div class="login-title">
              <h3>Expandí tu Negocio al Maximo</h3>
              <h1>Recordá que Muchos Venden Mejor que Uno!</h1>
            </div>
          </section>
          
          <!-- /.box-header -->
          
          <div style="overflow-y: scroll;height:400px; width: 99%  " >
            <table id="example" class="table table-bordered table-striped " >
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Ingresó</th>
                  <th>Vence</th>
                  <th>Cantidad</th>
                  <th>Estado </th>
                  <th>Accion</th>
              </thead>
              <tbody>
                <?php

                include( 'logica-listar-productos.php' );

                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
</div>
</section>
</div>
</div>
<script>
	
	function eliminar(id){  


 Swal.fire({
     title: 'Esta seguro que desea eliminar este producto?',
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si eliminar!'
   }).then((result) => {
     if (result.isConfirmed) {

       var url = "cambio-estado-producto.php";
       $.ajax({                        
          type: "POST",                
          url: url,                    
          data:{"id": id},
          success: function(data)            
          {  
          Swal.fire({
           title: 'El Producto se elimino Exitosamente!',
           icon: 'success',
           showCancelButton: false,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ok'
         }).then((result) => {
           if (result.isConfirmed) {
              location.reload();
           }
         })
           
                       
          }
      });
       
       
     }
   })
 
       
}
	
</script>