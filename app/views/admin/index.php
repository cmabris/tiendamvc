<?php include_once dirname(__DIR__) . ROOT . 'header.php'?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Módulo de Administración</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>admin/verifyUser" method="post">
            <div class="form-group text-left">
                <label for="user">Usuario:</label>
                <input type="text" name="user" class="form-control"
                       placeholder="Escribe el correo electrónico"
                       value="<?= $data['data']['user'] ?? '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="password">Clave de acceso:</label>
                <input type="password" name="password" class="form-control"
                       placeholder="Escribe la contraseña"
                       value="<?= $data['data']['password'] ?? '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
<?php include_once dirname(__DIR__) . ROOT . 'footer.php'?>
