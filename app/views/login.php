<?php include_once 'header.php'?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Login</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>login/verifyUser/" method="POST">
            <div class="form-group text-left">
                <label for="user">Usuario:</label>
                <input type="text" name="user" class="form-control"
                 placeholder="Escribe el correo electrónico"
                 value="<?= isset($data['data']) ? $data['data']['user'] : '' ?>"
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
            <div class="form-group text-left">
                <input type="checkbox" name="remember"
                 <?= (isset($data['data']) && $data['data']['remember'] == 'on') ? 'checked' : '' ?>
                >
                <label for="remember">Recordar</label>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-6">
                <a href="<?= ROOT ?>login/registro" class="btn btn-info">Nuevo usuario</a>
            </div>
            <div class="col-sm-6">
                <a href="<?= ROOT ?>login/olvido" class="btn btn-info">Recordar Contraseña</a>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'?>
