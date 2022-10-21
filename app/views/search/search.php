<?php include_once dirname(__DIR__) . ROOT . 'header.php'?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center"><?= $data['subtitle'] ?></h1>
    </div>
    <div class="card-body">
        <?php foreach ($data['data'] as $key => $value): ?>
            <?php if($key%4 == 0): ?>
                <div class="row">
            <?php endif; ?>
            <div class="card pt-2 col-sm-3">
                <img src="../img/<?= $value->image ?>" class="img-responsive"
                     style="width: 100%" alt="<?= $value->name ?>">
                <a href="<?= ROOT ?>shop/show/<?= $value->id ?>">
                    <p><?= $value->name ?></p>
                </a>
            </div>
            <?php if($key%4 == 3): ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once dirname(__DIR__) . ROOT . 'footer.php'?>
