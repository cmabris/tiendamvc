<?php include_once 'header.php'?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Registro</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>login/registro/" method="post">
            <div class="form-group text-left">
                <label for="first_name">Nombre:</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                    required placeholder="Escriba su nombre"
                    value="<?php isset($data['dataForm']['firstName']) ? print $data['dataForm']['firstName'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="last_name_1">Apellido 1:</label>
                <input type="text" name="last_name_1" id="last_name_1" class="form-control"
                       required placeholder="Escriba su primer apellido"
                       value="<?php isset($data['dataForm']['lastName1']) ? print $data['dataForm']['lastName1'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="last_name_2">Apellido 2:</label>
                <input type="text" name="last_name_2" id="last_name_2" class="form-control"
                       placeholder="Escriba su segundo apellido"
                       value="<?php isset($data['dataForm']['lastName2']) ? print $data['dataForm']['lastName2'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" class="form-control"
                       required placeholder="Escriba su correo electrónico"
                       value="<?php isset($data['dataForm']['email']) ? print $data['dataForm']['email'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="password">Clave de acceso:</label>
                <input type="password" name="password" id="password" class="form-control"
                       required placeholder="Escriba su contraseña"

                >
            </div>
            <div class="form-group text-left">
                <label for="password2">Repita su clave de acceso:</label>
                <input type="password" name="password2" id="password2" class="form-control"
                       required placeholder="Repita su contraseña"
                >
            </div>
            <div class="form-group text-left">
                <label for="address">Dirección:</label>
                <input type="text" name="address" id="address" class="form-control"
                       required placeholder="Escriba su dirección"
                       value="<?php isset($data['dataForm']['address']) ? print $data['dataForm']['address'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="city">Ciudad:</label>
                <input type="text" name="city" id="city" class="form-control"
                       required placeholder="Escriba su ciudad"
                       value="<?php isset($data['dataForm']['city']) ? print $data['dataForm']['city'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="state">Provincia:</label>
                <input type="text" name="state" id="state" class="form-control"
                       required placeholder="Escriba su provincia"
                       value="<?php isset($data['dataForm']['state']) ? print $data['dataForm']['state'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="postcode">Código postal:</label>
                <input type="text" name="postcode" id="postcode" class="form-control"
                       required placeholder="Escriba su código postal"
                       value="<?php isset($data['dataForm']['postcode']) ? print $data['dataForm']['postcode'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="country">País:</label>
                <input type="text" name="country" id="country" class="form-control"
                       required placeholder="Escriba su país"
                       value="<?php isset($data['dataForm']['country']) ? print $data['dataForm']['country'] : '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar datos" class="btn btn-success">
                <a href="<?= ROOT ?>login/" class="btn btn-info">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php include_once 'footer.php'?>