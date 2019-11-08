<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
	<title>SWAPIWEWORK</title>
	 <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/pop.css">
 <script>
  function toggle_visibility(id){
    var e = document.getElementById(id);
    if(e.style.display=='block')
      e.style.display = 'none';
    else
      e.style.display = 'block';
    }
</script>
</head>
<body>
<header>
  <img src="../assets/images/star-wars-logo-1.png"  class="brand-logo " alt="">
    
  <h2>SWAPI WEWORK</h2>
</header>

<section>
  <nav >
     <a href="../index.php"><img src="../assets/images/home.png"  class="ho " align="left" alt="" ></a>
     <p ><h3>Sección de Naves</h3></p>
  </nav>

  <div class="sec card">
    <ul>
     <li><a href="../index.php">*Peliculas</a></li>
      <li><a href="naves.php">*Naves</a></li>
      <li><a href="api.php">*Base de Datos</a></li>
    </ul>
  </div>
  
  <article>
	<div id="app">
   	<button v-on:click="fetch" class="btn btn-dark">Mostrar Naves</button>
 	  <table  class="table table-striped">
 	    <thead>
			    <tr>
			      <th scope="col">Nave</th>
			    </tr>
		  </thead>
		</table>
 	 
   <div v-for="ships of ship" v-bind:key="ships.id">
 	 	<table  class="table table-striped">
 	 		<tr>
 	 			<td width = "130px">{{ships.name}}</td>
        <td width = "130px"><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><img src="../assets/images/edit.png"  class="ho " align="left" alt=""></a></td>
 	 		</tr>
 	 	</table>

  <div id="popup-box1" class="popup-position">
    <div id="popup-wrapper">
      <div id="popup-container">
        <div id="popup-head-color1">
          <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
          <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Información </p>
        </div>
        <br>
    <form action="agregar.php" method="POST">
      <table border="0" align="center">
        <tr>
          <td align="right">Nombre:</td>
          <td><input type="text" id="txtbox" name="name" v-model="ships.name" required><br></td>
        </tr>
    
        <tr>
          <td align="right">Modelo:</td>
          <td><textarea id="txtbox" min="1" name="modelo" v-model="ships.model" required></textarea><br></td>
        </tr>
    
        <tr>
          <td align="right">Pasajeros:</td>
          <td><input type="number" id="txtbox" name="pas" v-model="ships.passengers"  required><br></td>
        </tr>
    
        <tr>
          <td align="right">Velocidad:</td>
          <td><input type="text" id="txtbox" name="vel" v-model="ships.max_atmosphering_speed" required><br></td>
        </tr>
    
        <tr  align="left">
          <td>&nbsp;  </td>
          <td><input type="SUBMIT" class="btn btn-dark" id="btnnav" value="Guardar"></a></td>
        </tr>
    
    </table>
    </form>

      </div>
    </div>
  </div>

   </div>
	</div>
  
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="text/javascript" src="../js/nave.js"></script>
  
  </article>
</section>

<footer>
  <p>Christian González Fernández</p>
  <p>chrisgonz437@gmail.com</p>
  <p>7721259746</p>
</footer>

</body>
</html>

