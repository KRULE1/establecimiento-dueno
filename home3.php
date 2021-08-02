<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);



		$vista="SELECT * FROM `menu`";

		$resvista = mysqli_query($conn,$vista);
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
	height:450px;
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
        color: #000000;
        font-size: 36px;
}

aside {
	width: 30%;
	height: 500px;
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
    background-color: #8A8B8C;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #F88BF1;
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
                 <!-- Búsqueda Google -->
                     <center>
                        <FORM method=GET action="http://www.google.com/search">
                        <TABLE bgcolor="#FFFFFF"><tr><td>
                        <A HREF="http://www.google.com/">
                        <IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Google" align="absmiddle"></A>
                        <INPUT TYPE=text name=q size=31 maxlength=255 value="">
                        <INPUT TYPE=hidden name=hl value=es>
                        <INPUT type=submit name=btnG VALUE="Búsqueda Google">
                        </td></tr></TABLE>
                        </FORM>
                    </center>
                 <!-- Búsqueda Google -->
                 <section class="main">
                                 
                         <article> 
                              <table class="table"> <center>
                                  <tr> 
                                        <th>Id_menu</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Ingredientes</th>
                                  </tr>
                                  <?php
                                     while($filaMenu = $resvista->fetch_array(MYSQLI_BOTH))
                                      {
                                         echo'<tr>
        					<td>'.$filaMenu['id'].'</td>
        					<td>'.$filaMenu['nombre'].'</td>
        					<td>'.$filaMenu['tipo'].'</td>
        					<td>'.$filaMenu['ingredientes'].'</td>
                                              </tr>';
                                      }
                                  ?> 
                                  <tr>
                                  <tr>
                              </center></table> 
                         </article> 
                          
                        
                 </select>

                    <aside>

                                <div class="container">
                                  <center><h2>Deseas agregar un nuevo menú <span style="color:#F88BF1;"><?php echo $_SESSION['name']; ?> !</span></h2>
                                  <br><br>
	                          <label>Clic abajo para ingresar al chat y solicitar un nuevo menú</label><br>
	                          <br><br>
	                          <a href="chatpage.php" class="btn btn-primary">Abre el chat</a>
                                 </div>
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
