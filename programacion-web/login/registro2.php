<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container-sm">
    <form class="row g-3 needs-validation" method="POST" >
        <h1>Complete Su Registro!</h1>

       
        <div class="col-md-12 text-center">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" name="Direccion" placeholder="Direccion." >
        </div>
        <div class="col-md-12 text-center">
        <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" name="Telefono" placeholder="Numero Telefonico">
        </div>
        <div class="col-md-6 text-center">
        <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" placeholder="Email">
        </div>
        <div class="col-md-6"></div>

       <div class="col-md-4 ">
             <label for="PlanAf" class="form-label">Plan de Afiliacion</label>
             <select class="form-select" id="PlanAf" name="PlanAf" required>
                <option selected disabled value="">Elegir...</option>
                <option value="PlanInd">Plan Individual</option>
                <option value="PlanPar">Plan Pareja</option>
                <option value="PlanFam">Plan Familiar</option>
            </select>
        </div>


<!-- FAMILIARES -->
        <hr>

        <h2>Familiares</h2>

        <div class="col-md-6  text-center">
            <label for="nombre_f1" class="form-label">Nombre</label>
            <input type="text" name="nombre_f1" placeholder="Nombre" value="NA">
        </div>

        <div class="col-md-6  text-center">
            <label for="apellido_f1" class="form-label">Apellido</label>
            <input type="text" name="apellido_f1" placeholder="Apellido" value="NA">
        </div>

        <div class="col-md-4  text-center">
            <label for="ci_f" class="form-label">Cedula de Identidad</label>
            <input type="text" name="ci_f1" placeholder="Cedula" value="">
        </div>
         <div class="col-md-4 text-center">
             <label for="parentesco_f" class="form-label">Parentesco</label>
             <select class="form-select" id="parentesco_f1" name="parentesco_f1" >
                <option selected disabled value="">Elegir...</option>
                <option value="Padre">Padre</option>
                <option value="Madre">Madre</option>
                <option value="Hijo/a">Hijo/a</option>
            </select>
        </div> 
        
        <hr>

        <div class="col-md-6  text-center">
            <label for="nombre_f2" class="form-label">Nombre</label>
            <input type="text" name="nombre_f2" placeholder="Nombre." value="NA">
        </div>

        <div class="col-md-6  text-center">
            <label for="apellido_f2" class="form-label">Apellido</label>
            <input type="text" name="apellido_f2" placeholder="Apellido." value="NA">
        </div>

        <div class="col-md-4  text-center">
            <label for="ci_f2" class="form-label">Cedula de Identidad</label>
            <input type="text" name="ci_f2" placeholder="Cedula" value="">
        </div>
        <div class="col-md-4 text-center">
        <label for="parentesco_f2" class="form-label">Parentesco</label>
             <select class="form-select" id="parentesco_f2" name="parentesco_f2" >
                <option selected disabled value="">Elegir...</option>
                <option value="Padre">Padre</option>
                <option value="Madre">Madre</option>
                <option value="Hijo/a">Hijo/a</option>
            </select>
        </div> 

        <hr>

        <div class="col-md-6  text-center">
            <label for="nombre_f3" class="form-label">Nombre</label>
            <input type="text" name="nombre_f3" placeholder="Nombre." value="NA">
        </div>

        <div class="col-md-6  text-center">
            <label for="apellido_f3" class="form-label">Apellido</label>
            <input type="text" name="apellido_f3" placeholder="Apellido." value="NA">
        </div>

        <div class="col-md-4  text-center">
            <label for="ci_f3" class="form-label">Cedula de Identidad</label>
            <input type="text" name="ci_f3" placeholder="Cedula" value="">
        </div>
        <div class="col-md-4 text-center">
        <label for="parentesco_f3" class="form-label">Parentesco</label>
             <select class="form-select" id="parentesco_f3" name="parentesco_f3" >
                <option selected disabled value="">Elegir...</option>
                <option value="Padre">Padre</option>
                <option value="Madre">Madre</option>
                <option value="Hijo/a">Hijo/a</option>
            </select>
        </div> 

        <hr>

        <div class="col-md-6  text-center">
            <label for="nombre_f4" class="form-label">Nombre</label>
            <input type="text" name="nombre_f4" placeholder="Nombre." value="NA">
        </div>

        <div class="col-md-6  text-center">
            <label for="apellido_f4" class="form-label">Apellido</label>
            <input type="text" name="apellido_f4" placeholder="Apellido." value="NA">
        </div>

        <div class="col-md-4  text-center">
            <label for="ci_f4" class="form-label">Cedula de Identidad</label>
            <input type="text" name="ci_f4" placeholder="Cedula" value="">
        </div>
        <div class="col-md-4 text-center">
        <label for="parentesco_f4" class="form-label">Parentesco</label>
             <select class="form-select" id="parentesco_f4" name="parentesco_f4" >
                <option selected disabled value="">Elegir...</option>
                <option value="Padre">Padre</option>
                <option value="Madre">Madre</option>
                <option value="Hijo/a">Hijo/a</option>
            </select>
        </div> 

        <input type="submit" name="Enviar">
       
    </form>
</div>
    
</body>
</html>
<?php
    if(isset($_POST)){
        include("php/query/insertar_form.php");
        include("php/query/insertar_fam.php");
        Location('Enviado.php');

    }
    ?>