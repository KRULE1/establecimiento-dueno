<?php include "layouts/header5.php"; ?>
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
    padding-top:5%;
    padding-bottom:5%;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #960D0D;
}
  </style>
<?php
  include "config.php";
  if($_POST)
	{
		$nameest = $_POST['nameest'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where password = '".$password."' ";
		$sql = "SELECT * FROM `est` where nameest = '".$nameest."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['nameest'] = $row['nameest'];
			header('Location: establecimientointer.php');
		}
		else
		{
			echo "<script> alert('Nombre o contraseña incorrectas.'); </script>";
		}
	}
?>

<div class="container">
  <center><h2>Confirmar datos por seguridad</h2></center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre establecimiento:</label>
	  
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Ingresa el nombre del establecimiento" name="nameest">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="ingresa una contraseña" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
