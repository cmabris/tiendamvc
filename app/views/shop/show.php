<?php include_once dirname(__DIR__) . ROOT . 'header.php'?>
<h2 class="text-center"><?= $data['subtitle'] ?></h2>
<?= html_entity_decode($data['data']->description) ?>
<?php if ($data['data']->type == 1): ?>
    <p>Público objetivo: <?= $data['data']->people ?></p>
<?php elseif ($data['data']->type == 2): ?>
    <p>Autor: <?= $data['data']->author ?></p>
<?php endif; ?>
<a href="<?= ROOT ?>shop" class="btn btn-success">Volver al listado de productos</a>
<?php include_once dirname(__DIR__) . ROOT . 'footer.php'?>
