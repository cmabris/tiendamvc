<?php include_once 'header.php'?>
    <div class="card p-4 bg-light">
        <div class="card-header">
            <h1 class="text-center"><?= $data['subtitle'] ?></h1>
        </div>
        <div class="card-body">
            <form action="<?= ROOT ?>login/olvido" method="post">
                <div class="form-group text-left">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group text-left mt-2">
                    <input type="submit" value="Enviar" class="btn btn-success">
                    <a href="<?= ROOT ?>login" class="btn btn-info">Cancelar</a>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="row">
                <p>Recibirás un correo electrónico, comprueba la bandeja de SPAM</p>
            </div>
        </div>
    </div>
<?php include_once 'footer.php'?>
