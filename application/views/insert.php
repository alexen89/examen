    <div class="container">
      <div class="starter-template">
        <h1>Registro de un nuevo Usuario:</h1>
        <p class="lead">Los campos marcados con * son obligatorios, gracias.</p>
      </div>
      <form id="insert" class="bs-example bs-example-form" data-example-id="simple-input-groups"> 
        <div class="input-group"> 
        <span class="input-group-addon" id="basic-addon1">Nombre</span> 
          <input class="form-control" id="nombre" aria-describedby="basic-addon1"> 
        </div> 
        <br> 
        <div class="input-group"> 
        <span class="input-group-addon" id="basic-addon1">Paterno</span> 
          <input class="form-control"  id="paterno" aria-describedby="basic-addon1"> 
        </div>
        <BR>
        <div class="input-group"> 
        <span class="input-group-addon" id="basic-addon1">Materno</span> 
          <input class="form-control"  id="materno" aria-describedby="basic-addon1"> 
        </div>
        <BR>
        <div class="input-group"> 
          <span class="input-group-addon" id="basic-addon1">Fecha nacimiento </span> 
          <input class="form-control"  aria-describedby="basic-addon1" id="fecha_na" placeholder="dd/mm/yyyy"> 
        </div>
          <br> 
        <div class="input-group"> 
          <span class="input-group-addon">Ingresos Anualues $</span> 
          <input class="form-control" aria-label="Amount (to the nearest dollar)" id="ingreso"> 
        </div> 
        <br> 
      </form>
      <div class="bs-example" data-example-id="simple-button-group"> 
        <div class="btn-group" role="group" aria-label="Basic example"> 
          
          <button type="button" class="btn btn-default" onclick="guardar();">Guardar</button> 
          
        </div> 
      </div>
    </div>
