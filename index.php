<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
  <title>SWAPIWEWORK</title>
   <!-- bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/pop.css">
</head>
<body>
<header>
  <img src="assets/images/star-wars-logo-1.png"  class="brand-logo " alt="">
    
  <h2>SWAPI WEWORK</h2>
</header>

<section>
  <nav >
     <a href="index.php"><img src="assets/images/home.png"  class="ho " align="left" alt="" ></a>
     <p ><h3>Sección de peliculas</h3></p>
  </nav>

  <div class="sec card">

    <ul>
     <li><a href="index.php">*Peliculas</a></li>
      <li><a href="php/naves.php">*Naves</a></li>
      <li><a href="php/api.php">*Base de Datos</a></li>
    </ul>
  </div>
  
  <article>
      

  <div id="app">
   <button v-on:click="fetch" class="btn btn-dark">Mostrar Peliculas</button>
    <table  class="table table-striped">
      <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Director</th>
            <th scope="col">Episodio</th>
            <th scope="col">Consultar</th>
          </tr>
      </thead>
    </table>
   <div v-for="films of film" v-bind:key="films.id">
   
    <table  class="table table-striped">
      <tr>
        <td width = "130px">{{films.title}}</td>
        <td width = "130px">{{films.director}}</td>
        <td width = "130px">{{films.episode_id}}</td>
        <td width = "130px"><a href="php/naves.php"><button class="btn btn-dark">Info</button></a></td>
      </tr>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="js/peli.js"></script>
 
<!-- bootrap 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->


  </article>
</section>

<footer>
  <p>Christian González Fernández</p>
  <p>chrisgonz437@gmail.com</p>
  <p>7721259746</p>
</footer>

</body>
</html>

