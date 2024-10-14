<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>

<div class="form_container">
    <table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Costo</th>
            <th>Horario</th>
    </tr>
        <thead>
            
    <?php 
        $sql = "select * from servicios;";
        $exec = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_array($exec)){
        ?>
        <tr>
            <th><?php echo $rows['id']; ?></th>
            <th><?php echo $rows['nombre']; ?></th>
            <th><?php echo $rows['precio']; ?></th>
            <th><?php echo $rows['horario'];?></th>
        </tr>
        <?php } ?>

    </table>
</div>


<p><a href="javascript:history.back();"><img src="./Static/img/back.png" alt="Regresar"></a></p>
<?php  include 'includes/footer.php'; ?>
