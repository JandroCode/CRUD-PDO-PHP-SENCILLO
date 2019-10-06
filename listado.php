<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center ">
        <div class="col-md-7 ">
        <h1>Listado de usuarios</h1>

        <a class="btn btn-success mt-4" href="agregarform.php">Añadir usuario</a>

    

            <table class="table mt-5 text-center ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php include_once 'select.php'  ?>

                </tbody>
            </table>
        </div>
    </div>
</div>   
</body>
</html>