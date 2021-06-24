<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Agenda</title>
</head>
<body>
    <div class="container">
        <form action="wagenda.php" method="POST">

        <div class="form-group">
        <label for ="nombre">Nombre</label>
        <input type="text" class="form-
        control" placeholder="Escribe tu nombre" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
        <label for ="apellidos">Apellidos</label>
        <input type="text" class="form-
        control" placeholder="Escribe tu apellido" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
        <label for ="fnacimiento">Fecha de nacimiento</label>
        <input type="date" class="form-
        control" id="fnacimiento" name="fnacimiento" required>
        </div>
        <div class="form-group">
            <label for ="estadocivil">Estado civil</label>
            <select class="form-
                control" id="estadocivil" name="estadocivil" required>
                <option>Soltero</option>
                <option>Casado</option>
                <option>Divorciado</option>
                <option>Viudo</option>
                <option>Union Libre</option>
            </select>
        </div>
        <div class="form-group">
        <label for ="origen">Origen</label>
        <input list="origenes" id="origen" name="origen" 
        class="form-control" placeholder="Escribe el municipio de origen" required>
        <datalist id="origenes">
            <option value="Gómez Palacio">
            <option value="Lerdo"> 
            <option value="Torreón">
            <option value="Matamoros">
            <option value="Tlahualilo">
            <option value="Santa Clara">
            </datalist>
        </div>
        <div class="form-group">
        <label for ="correo">Correo electronico</label>
        <input type="email" class="form-
        control" id="correo" name="correo" placeholder="you@example.com" required>
        </div>
        <div class="form-group">
        <label for ="redess">Redes Sociales</label>
        <input type="text" class="form-
        control" placeholder="Escribe tus redes sociales separados por comas" id="redess" name="redess" required>
        </div>
        <button type="submit"class="btn btn-primary">Submit</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>