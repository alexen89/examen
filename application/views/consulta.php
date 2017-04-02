
    <div class="container">
      <div class="starter-template">
        <h1>Listado de usuarios</h1>
      </div>
	      <form class="bs-example bs-example-form" data-example-id="input-group-with-button"> 
	      	<div class="row"> 
	      		<div class="col-lg-6"> 
	      			<div class="input-group"> 
	      				<span class="input-group-btn"> 
	      					<button class="btn btn-default" type="button" onclick="buscar_user();">Buscar por:</button> 
	      				</span> 
	      				<input class="form-control" placeholder="Nombre,Id" id="buscar"> 
	      			</div>
	      		</div>
	      	</div> 
	      </form>
	      <div id="tabla_contenido">
		      <?php echo $table ?>
		    </div>
		    <div id="msg">
		    </div>
    </div>