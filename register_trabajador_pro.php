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
    width: 70%;
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
  <form class="form-horizontal" method="post" action="add_user_trabajador.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Nombre:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa un nombre" name="nombre" required>
      </div>
    </div>
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Apellido Paterno:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa un nombre" name="apellidoP" required>
      </div>
    </div>
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Apellido Materno:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa un nombre" name="apellidoM" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Correo:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Ingresa un correo" name="correo" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Contraseña:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Ingresa una contraseña" name="password" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Fecha nacimiento:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="año/mes/dia" name="fechaN" required>
      </div>
    </div>
    <label class="control-label col-sm-2 col-sm-offset-2" for="name">Ingrese direccion:</label>
	  
      <div class="col-sm-5">
        <textarea class="form-control" id="address" placeholder="Ingrese su nombre" name="direccion" required></textarea>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Ingresa su Nombre:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Ingresa la dirección" name="nombreT" required>
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
