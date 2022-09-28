<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="index.php" class="navbar-brand">Tienda</a>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <div class="card p-4 bg-light">
                <div class="card-header">
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="card-body">
                    <form action="login/verifyUser/" method="POST">
                        <div class="form-group text-left">
                            <label for="user">Usuario:</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group text-left">
                            <label for="password">Clave de acceso:</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-left">
                            <input type="submit" value="Enviar" class="btn btn-success">
                        </div>
                        <div class="form-group text-left">
                            <input type="checkbox" name="remember">
                            <label for="remember">Recordar</label>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="login/alta" class="btn btn-info">Nuevo usuario</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="login/olvido" class="btn btn-info">Recordar Contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">

        </div>
    </div>
</div>
</body>
</html>
