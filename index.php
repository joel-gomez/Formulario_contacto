<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario de contacto</title>

        <title>Formulario de Contacto con Bootstrap y PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <style>
body {
    background-color: #2aabd2;
}
.red {
    color: red;
}
 
</style>
    <body>

       <!-- INICIO FORMULARIO HTML -->
       <div class="container" style="padding-top: 15px;">
           <center><h4 style="color: #ffffff">Formulario de Contacto </h4></center>
<form method="POST" action="enviar.php">

<div class="form-row mt-5">
    <div class="col-md-4 mb-3">
        <label>Nombres:<span class="red">*</span></label>
        <input type="text" class="form-control" name="txtNombre" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label>Apellidos:<span class="red">*</span></label>
        <input type="text" class="form-control"  name="txtApellido" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label>Email:<span class="red">*</span></label>
        <input type="email" class="form-control"  name="txtCorreo" required>
    </div>
</div>

<div class="form-group">
    <label>Comentarios:<span class="red">*</span></label>
    <textarea class="form-control" name="txtComentarios" rows="3" min="25" required></textarea>
</div>

<div class="form-group mb-10">
    <button class="btn btn-success" type="submit" name="submit" >Enviar</button>
    <button class="btn btn-danger" type="reset" name="reset">Limpiar</button>
</div>
</div>

</form>
           
  

    </body>
</html>