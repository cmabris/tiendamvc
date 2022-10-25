<?php include_once(VIEWS . 'header.php') ?>
<div class="card" id="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
            <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
            <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
            <li class="breadcrumb-item">Verifica los datos</li>
        </ol>
    </nav>
    <div class="card-header">
        <h1><?= $data['titulo'] ?></h1>
        <p>Verifique los datos antes de continuar</p>
    </div>
    <div class="card-body">
        <?php $verify = false; $subtotal = 0; $send = 0; $discount = 0 ?>

        Modo de Pago: <?= $data['payment'] ?><br>
        Nombre: <?= $data['user']->first_name ?> <?= $data['user']->last_name_1 ?> <?= $data['user']->last_name_2 ?><br>
        Dirección: <?= $data['user']->address ?><br>
        Ciudad:	<?= $data['user']->city ?><br>
        Estado: <?= $data['user']->state ?><br>
        Código Postal: <?= $data['user']->zipcode ?><br>
        País: <?= $data['user']->country ?><br>

        <table class="table table-stripped" width="100%">
            <tr>
                <th width="12%">Producto</th>
                <th width="58%">Descripción</th>
                <th width="1.8%">Cant.</th>
                <th width="10.12%">Precio</th>
                <th width="10.12%">Subtotal</th>
            </tr>
            <?php foreach ($data['data'] as $key => $value) : ?>
                <tr>
                    <td><img src="<?= ROOT ?>img/<?= $value->image ?>" width="105" alt="<?= $value->name ?>"></td>
                    <td><b><?= $value->name ?></b><?= substr(html_entity_decode($value->description),0,200) ?>...</td>
                    <td class="text-right"><?= number_format($value->quantity,0) ?></td>
                    <td class="text-right"><?= number_format($value->price,2) ?> &euro;</td>
                    <td class="text-right"><?= number_format($value->price * $value->quantity,2) ?> &euro;</td>
                </tr>
                <?php $subtotal += $value->price * $value->quantity; $discount += $value->discount; $send += $value->send ?>
            <?php endforeach ?>
            <?php $total = $subtotal - $discount + $send ?>
        </table>
        <hr>
        <table width="100%" class="text-right">
            <tr>
                <td width="79.85%"></td>
                <td width="11.55%">Subtotal:</td>
                <td width="9.20%"><?= number_format($subtotal,2) ?>&euro;</td>
            </tr>
            <tr>
                <td width="79.85%"></td>
                <td width="11.55%">Descuento:</td>
                <td width="9.20%"><?= number_format($discount,2) ?>&euro;</td>
            </tr>
            <tr>
                <td width="79.85%"></td>
                <td width="11.55%">Envío:</td>
                <td width="9.20%"><?= number_format($send,2) ?>&euro;</td>
            </tr>
            <tr>
                <td width="79.85%"></td>
                <td width="11.55%">Total:</td>
                <td width="9.20%"><?= number_format($total,2) ?>&euro;</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a href="<?= ROOT ?>cart/thanks" class="btn btn-success" role="button">Pagar</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php include_once(VIEWS . 'footer.php') ?>