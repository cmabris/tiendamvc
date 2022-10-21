<?php include_once dirname(__DIR__) . ROOT . 'header.php'?>
<h2 class="text-center"><?= $data['subtitle'] ?></h2>
<img src="<?= ROOT ?>img/<?= $data['data']->image ?>" class="rounded float-right" alt="">
<h4>Precio:</h4>
<p><?= number_format($data['data']->price, 2) ?>€</p>
<?php if ($data['data']->type == 1): ?>
    <h4>Descripción:</h4>
    <?= html_entity_decode($data['data']->description) ?>
    <h4>A quien va dirigido:</h4>
    <p><?= $data['data']->people ?></p>
    <h4>Objetivos:</h4>
    <p><?= $data['data']->objetives ?></p>
    <h4>¿Qué es necesario conocer?</h4>
    <p><?= $data['data']->necesites ?></p>
<?php elseif ($data['data']->type == 2): ?>
    <h4>Autor:</h4>
    <p><?= $data['data']->author ?></p>
    <h4>Editorial:</h4>
    <p><?= $data['data']->publisher ?></p>
    <h4>Número de páginas:</h4>
    <p><?= $data['data']->pages ?></p>
    <h4>Resumen:</h4>
    <?= html_entity_decode($data['data']->description) ?>
<?php endif; ?>
<a href="<?= ROOT . (!empty($data['back']) ? $data['back'] : 'shop') ?>" class="btn btn-success">Volver al listado de productos</a>
<a href="<?= ROOT ?>cart/addproduct/<?= $data['data']->id ?>/<?= $data['user_id'] ?>" class="btn btn-primary">Comprar</a>
<?php include_once dirname(__DIR__) . ROOT . 'footer.php'?>



