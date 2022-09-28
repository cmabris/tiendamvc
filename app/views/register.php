<?php include_once 'header.php'?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Registro</h1>
    </div>
    <div class="card-body">
        <form action="login/registro" method="post">
            <div class="form-group text-left">
                <label for="first_name">Nombre:</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                    required placeholder="Escriba su nombre"
                >
            </div>
            <div class="form-group text-left">
                <label for="last_name_1">Apellido 1:</label>
                <input type="text" name="last_name_1" id="last_name_1" class="form-control"
                       required placeholder="Escriba su primer apellido"
                >
            </div>
            <div class="form-group text-left">
                <label for="last_name_2">Apellido 2:</label>
                <input type="text" name="last_name_2" id="last_name_2" class="form-control"
                       placeholder="Escriba su segundo apellido"
                >
            </div>
            <div class="form-group text-left">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" class="form-control"
                       required placeholder="Escriba su correo electrónico"
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
                >
            </div>
            <div class="form-group text-left">
                <label for="city">Ciudad:</label>
                <input type="text" name="city" id="city" class="form-control"
                       required placeholder="Escriba su ciudad"
                >
            </div>
            <div class="form-group text-left">
                <label for="state">Provincia:</label>
                <input type="text" name="state" id="state" class="form-control"
                       required placeholder="Escriba su provincia"
                >
            </div>
            <div class="form-group text-left">
                <label for="postcode">Código postal:</label>
                <input type="text" name="postcode" id="postcode" class="form-control"
                       required placeholder="Escriba su código postal"
                >
            </div>
            <div class="form-group text-left">
                <label for="country">País:</label>
                <input type="text" name="country" id="country" class="form-control"
                       required placeholder="Escriba su país"
                >
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar datos" class="btn btn-success">
                <a href="login/" class="btn btn-info">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php include_once 'footer.php'?>