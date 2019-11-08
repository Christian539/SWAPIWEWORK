<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
	<title>SWAPIWEWORK</title>
	 <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/pop.css">
</head>
<body>
<header>
  <img src="../assets/images/star-wars-logo-1.png"  class="brand-logo " alt="">
  <h2>SWAPI WEWORK</h2>
</header>

<section>
  <nav >
     <a href="../index.php"><img src="../assets/images/home.png"  class="ho " align="left" alt="" ></a>
     <p ><h3>Sección Consulta Base de Datos</h3></p>
  </nav>

  <div class="sec card">

    <ul>
      <li><a href="../index.php">*Peliculas</a></li>
      <li><a href="naves.php">*Naves</a></li>
      <li><a href="api.php">*Base de Datos</a></li>
    </ul>
  </div>
  
  <article>
    	
<table class="table table-striped">
    
      
      <tr >
        <td style="border-bottom:1px solid #333;"> Nombre </th>
        <td style="border-bottom:1px solid #333;"> Modelo </th>
        <td style="border-bottom:1px solid #333;"> Pasajeros </th>
        <td style="border-bottom:1px solid #333;"> Velocidad </th>
      </tr>
      <!--Codigo php para conectar con la tabla y mostrar los datos almacenados en la misma-->
       <?php
require('config.php');
$query="SELECT * FROM inf_ship";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr >
        <td style="border-bottom:1px solid #333;"> <?php echo $row['name']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['modelo']; ?></td>
        <td style="border-bottom:1px solid #333;"><?php echo $row['pas']; ?> </td>
        <td style="border-bottom:1px solid #333;"><?php echo $row['vel']; ?> </td>
        
      </tr>
   <?php
}?>
      
    </table>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  </article>
</section>

<footer>
  <p>Christian González Fernández</p>
  <p>chrisgonz437@gmail.com</p>
  <p>7721259746</p>
</footer>



</body>
</html>

