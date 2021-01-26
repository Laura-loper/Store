<link rel="stylesheet" type="text/css" href="cs/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">  
<?php include("base.php"); ?>

<form name="frmMail" id="frmMail" method="post" action="form.php">
    <div class="container-lg">
        <div class="row-lg">
            Nombre
            <br>
            <input type="text" cols="100" id="nombre" class="nombre" name="nombre" required="required">
        </div>
        <div class="row-lg">
            Apellido
            <br>
            <input type="text" cols="100" id="apellido" class="apellido" name="apellido" required="required">
        </div>
        <div class="row-lg">
            Email
            <br>
            <input type="email" cols="100" id="email" class="email" name="email" required="required">
        </div>
        <br>   
        <div class="row-lg">
            <textarea name="comentarios" rows="10" cols="80" placeholder="Escribe aquí tus comentarios"></textarea>
        </div>
            <br>
        <div class="row-lg"> 
            <input type="submit" class="boton" id="send" value="Enviar">
        </div>
    </div>
    <br>
</form>
    
<br><br><br><br>
<?php include("footer.php") ?>
    
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>