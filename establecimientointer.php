<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header6.php"; 
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


article{
	width:60%;
	height:350px;
	border: 10px;
	padding: 5px;
	margin: 20px;
	float:left;
        color:#1DEAEA;
}

aside {
	width: 30%;
	height: 750px;
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

footer {
  clear: left;
  height: 300px;
  color:#1DEAEA;
  text-align: center;
  line-height: 3;
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
                            <img src="1.png" width="80" height="50" /> Bienvenido a su establecimiento <?php echo $_SESSION['name']; ?> !<img src="1.png" width="80" height="50" />
                        </div>
                    </FONT>
                </marquee></center>


              <section class="wrapper">
                 <section class="main">
                         <article> 
                           
                         </article>
                        

                         <article>

                         </article>
                 </select>

                    <aside>
                       <center> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30023.628738182957!2d-98.9761494!3d19.84191645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1625523879583!5m2!1ses-419!2smx" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center></br>
                        <p><center> CONSULTA EL MAPA </center></p></br>

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
