<?php include_once(VIEWS . 'header.php') ?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Eliminación de un producto</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>adminProduct/delete/<?= $data['product']->id ?>" method="POST">
            <div class="form-group text-left">
                <label for="type">Tipo de Producto:</label>
                <select class="form-control" name="type" id="type" disabled>
                    <?php foreach ($data['type'] as $type) : ?>
                        <option value="<?= $type->value ?>"
                            <?= (isset($data['product']->type) && $data['product']->type == $type->value) ? ' selected ' : '' ?>
                        >
                            <?= $type->description ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" disabled
                       value="<?= (isset($data['product']->name)) ? $data['product']->name : '' ?>">
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Si" class="btn btn-danger">
                <a href="<?= ROOT ?>adminProduct" class="btn btn-info">No</a>
                <p>Una vez borrado, la información no será recuperable</p>
            </div>
        </form>
    </div>
</div>
<?php include_once(VIEWS . 'footer.php') ?>
