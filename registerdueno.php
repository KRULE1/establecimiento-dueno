<?php include "layouts/header4.php"; ?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: #26262b9e;
    padding-top:2%;
    padding-bottom:2%;
  }
  .btn-primary {
    background-color: #0C5B85;
}
  </style>

<div class="container">

  <center><h2>Formulario de registro</h2></center></br>
  <form class="form-horizontal" method="post" action="establecimientointer.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Nombre Establecimiento:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa un nombre" name="nameest" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Ingresa la dirección del establecimiento:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa la dirección" name="addressest" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Tipo Establecimiento:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" id="name" placeholder="Ingresa el tipo de establecimiento" name="tipeest" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Número Establecimiento:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="ingresa un número" name="numberest" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Ingrese su nombre:</label>
	  
      <div class="col-sm-5">
        <textarea class="form-control" id="address" placeholder="Ingrese su nombre" name="namedueno" required></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Enviar datos</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
