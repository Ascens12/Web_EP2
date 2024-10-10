<?php include 'Static/connect/db.php'?>
<?php include 'includes/header.php'?>

<?php
session_start();
$user = $_SESSION['Usuario'];
echo "<h1>Iniciaste sesión como: " . $user . "</h1>";
        ?>
        <article class="entrada">
            <div class="entrada__imagen">
                      <div class="entrada_contenido">
                  <h4 class="no-margin">Barbershop México</h4>
                  <h4><a href="logout.php">Cerrar sesion</p></a></h4>
                  <p><a href="create.php"><img src="./Static/img/c.png"></a>|
                  <a href="consulta.php"> <img src="./Static/img/r.png"></a>|
                  <a href="eli_act.php"><img src="./Static/img/u.gif"></a>|
                  <a href="create2.php"><img src="./Static/img/d.png"></p></a>|
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque</p>
                    <picture>                      
                <img loading="lazy" src="./Static/img/2.jpg" alt="imagen blog"> 
              </picture>
            </div>
              </div>
        </article>      