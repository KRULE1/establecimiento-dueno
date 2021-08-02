<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>

nav{
	background: #6C6667;
	overflow: hidden; /* Propiedad que obliga a los elementos float contenidos a ser incluidos en el contenedor */
}
nav ul{
	display: inline-block;
        list-style-type: none;
} 

nav ul li{
	float: left;
}

nav h1{
	color: #0FD3EE;
}


nav ul li a{
	padding: 5px 20px 10px;
	display:block;
	color:#B00A08;
	text-decoration: none;
        
}

article{
	width:60%;
	height:250px;
	border: 10px;
	padding: 5px;
	margin: 20px;
	float:left;
        color:#1DEAEA;
}


a{
        color: #11E2CC;
}

p{
        color: #FFFFFF;
        font-size: 36px;
}

aside {
	width: 30%;
	height: 320px;
	color:#C50808;
	border: 10px;
	padding: 10px;
	position: static;
	overflow: hidden;
	margin:50px;
}


aside h3{
	text-align: center;
}


FONT {
text-shadow: 5px 5px 5px #E21111 ;
}


a:hover {
filter: invert(100%);
}





  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>
 <center><marquee behavior= alternate width=100% direction=right>
                    <FONT FACE=arial COLOR=#CB0413 SIZE=25>
                        <div>
                            <img src="1.png" width="80" height="50" /> Bienvenido <?php echo $_SESSION['name']; ?> !<img src="1.png" width="80" height="50" />
                        </div>
                    </FONT>
                </marquee></center>
                

                <center>
                <nav>
                    <ul> 
                        <li><a href="http://localhost/k-rule/home.php"><img src="home.png" alt="home" width="120" height="70"></a> </li> 
                        <li><a href="http://localhost/k-rule/home2.php"> <img src="admin.png" alt="Administrar" width="120" height="70"></a> </li>
                        <li><a href="http://localhost/k-rule/home3.php"><img src="menu2.png" alt="Menus" width="120" height="70"></a> </li>
                        <li><a href="http://localhost/k-rule/loginest.php"><img src="restaurante.png" alt="Negocio" width="120" height="70"></a> </li>
                        <li><a href="http://localhost/k-rule/home5.php"><img src="ajustes.png" alt="Configuracion" width="120" height="70"></a> </li>
                    </ul>
                 </nav>
                </center>

 <section class="wrapper">
                <center><p>selecciona una de las opciones dependiendo la funcion que desees realizar</p></center>
                 <section class="main">
                         <article> 
                            <center>
                                <table>
                                    <tr>
                                      <td><strong><a href="register_trabajador_pro.php"><center> Agregar empleado </center></a></strong></td>
                                      <td><strong><a href="registerdueno.php"><center> Agregar Negocio </center></a></strong></td>
                                      <td><strong><a href="dueño.html"><center> Consultas </center></a></strong></td>
                                      <td><strong><a href="dueño.html"><center> Modificar </center></a></strong></td>
                                    </tr>
                                    <tr>
                                        <td><a href="register_trabajador_pro.php"><img src="images/empleado.png" alt="empleado" width="180" height="150"></a></td>
                                        <td><a href="registerdueno.php"> <img src="images/puesto.png" alt="negocio" width="180" height="150"></a></td>
                                        <td><a href="dueño.html"><img src="images/consultar.png" alt="consultar" width="180" height="150"></a></td>
                                        <td><a href="dueño.html"><img src="images/modificar.png" alt="modificar" width="180" height="150"></a></td>
                                    </tr>
                                </table>
                            </center>> 
                            
                         </article>
                    
                 </select>

                    <aside>
                                <center><p>selecciona ya sea la imágen o la letra que se encuentra encima de cada imágen para seleccionar la opción que desees consultar</p></center>
                    </aside>

                </section>

                <footer>
                     
                </footer>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>
