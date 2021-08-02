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
                        <li><a href="http://localhost/k-rule/home4.php"><img src="restaurante.png" alt="Negocio" width="120" height="70"></a> </li>
                        <li><a href="http://localhost/k-rule/home5.php"><img src="ajustes.png" alt="Configuracion" width="120" height="70"></a> </li>
                    </ul>
                 </nav>
                </center>






</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>
