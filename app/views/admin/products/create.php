<?php include_once(VIEWS . 'header.php')?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
<script src="<?= ROOT . 'js/adminCreateProduct.js' ?>"></script>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Alta de un producto</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>adminProduct/create/" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="type">Tipo de producto</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Selecciona el tipo de producto</option>
                    <?php foreach($data['type'] as $type): ?>
                        <option value="<?= $type->value ?>"
                            <?= (isset($data['data']['type']) && $data['data']['type'] == $type->value) ? ' selected' : '' ?>
                        ><?= $type->description ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control"
                       placeholder="Escribe el nombre del producto" required
                       value="<?= $data['data']['name'] ?? '' ?>"
                >
            </div>
            <div class="form-group text-left">
                <label for="description">Descripción:</label>
                <textarea name="description" id="editor" rows="10"><?= $data['data']['description'] ?? '' ?></textarea>
            </div>
            <div id="book">
                <div class="form-group text-left">
                    <label for="author">Autor:</label>
                    <input type="text" name="author" class="form-control"
                           placeholder="Escribe el autor del libro"
                           value="<?= $data['data']['author'] ?? '' ?>">
                </div>
                <div class="form-group text-left">
                    <label for="publisher">Editorial:</label>
                    <input type="text" name="publisher" class="form-control"
                           placeholder="Escribe la editorial del libro"
                           value="<?= $data['data']['publisher'] ?? '' ?>">
                </div>
                <div class="form-group text-left">
                    <label for="pages">Páginas:</label>
                    <input type="text" name="pages" class="form-control"
                           placeholder="Escribe el número de páginas del libro"
                           value="<?= $data['data']['pages'] ?? '' ?>">
                </div>
            </div>
            <div id="course">
                <div class="form-group text-left">
                    <label for="people">Público objetivo:</label>
                    <input type="text" name="people" class="form-control"
                           placeholder="Escribe el público objetivo del curso"
                           value="<?= $data['data']['people'] ?? '' ?>">
                </div>
                <div class="form-group text-left">
                    <label for="objetives">Objetivos:</label>
                    <input type="text" name="objetives" class="form-control"
                           placeholder="Escribe los objetivos del curso"
                           value="<?= $data['data']['objetives'] ?? '' ?>">
                </div>
                <div class="form-group text-left">
                    <label for="necesites">Conocimientos necesarios previos:</label>
                    <input type="text" name="necesites" class="form-control"
                           placeholder="Escribe los conocimientos necesarios previos"
                           value="<?= $data['data']['necesites'] ?? '' ?>">
                </div>
            </div>
            <div class="form-group text-left">
                <label for="price">Precio del producto:</label>
                <input type="text" name="price" class="form-control" pattern="^(\d|-)?(\d|,)*\.?\d*$"
                       placeholder="Escribe el precio del producto sin comas ni símbolos" required
                       value="<?= $data['data']['price'] ?? '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="discount">Descuento del producto:</label>
                <input type="text" name="discount" class="form-control" pattern="^(\d|-)?(\d|,)*\.?\d*$"
                       placeholder="Escribe el descuento del producto sin comas ni símbolos."
                       value="<?= $data['data']['discount'] ?? '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="send">Coste del envío del producto:</label>
                <input type="text" name="send" class="form-control" pattern="^(\d|-)?(\d|,)*\.?\d*$"
                       placeholder="Escribe el costo del envio del producto sin comas ni símbolos."
                       value="<?= $data['data']['send'] ?? '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="image">Imagen del producto:</label>
                <input type="file" name="image" class="form-control" accept="image/jpeg,image/x-png,image/gif">
            </div>
            <div class="form-group text-left">
                <label for="published">Fecha del producto:</label>
                <input type="date" name="published" class="form-control"
                       placeholder="Fecha de creación o publicación del producto (aaaa-mm-dd)"
                       value="<?= $data['data']['published'] ?? '' ?>">
            </div>
            <div class="form-group text-left">
                <label for="relation1">Producto relacionado:</label>
                <select class="form-control" name="relation1" id="relation1">
                    <option value="">Selecciona un producto relacionado</option>
                    <?php foreach ($data['catalogue'] as $item) : ?>
                        <option value="<?= $item->id ?>"
                            <?= (isset($data['data']['relation1']) && $data['data']['relation1']==$item->id) ? ' selected ' : '' ?>
                        >
                            <?= $item->name ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label for="relation2">Producto relacionado:</label>
                <select class="form-control" name="relation2" id="relation2">
                    <option value="">Selecciona un producto relacionado</option>
                    <?php foreach ($data['catalogue'] as $item) : ?>
                        <option value="<?= $item->id ?>"
                            <?= (isset($data['data']['relation2']) && $data['data']['relation2']==$item->id) ? ' selected ' : '' ?>
                        >
                            <?= $item->name ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label for="relation3">Producto relacionado:</label>
                <select class="form-control" name="relation3" id="relation3">
                    <option value="">Selecciona un producto relacionado</option>
                    <?php foreach ($data['catalogue'] as $item) : ?>
                        <option value="<?= $item->id ?>"
                            <?= (isset($data['data']['relation3']) && $data['data']['relation3']==$item->id) ? ' selected ' : '' ?>
                        >
                            <?= $item->name ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label for="status">Estado del producto:</label>
                <select class="form-control" name="status" id="status">
                    <option value="">Selecciona el estado del producto</option>
                    <?php foreach ($data['status'] as $status) : ?>
                        <option value="<?= $status->value ?>"
                            <?= (isset($data['data']['status']) && $data['data']['status']==$status->value) ? ' selected ' : '' ?>
                        >
                            <?= $status->description ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-check text-left">
                <input type="checkbox" name="mostSold" id="mostSold" class="form-check-input"
                    <?= (isset($data['data']['mostSold']) && $data['data']['mostSold']==1) ? ' checked ' : '' ?>
                >
                <label for="mostSold" class="form-check-label">Producto más vendido</label>
            </div>
            <div class="form-check text-left">
                <input type="checkbox" name="new" id="new" class="form-check-input"
                    <?= (isset($data['data']['new']) && $data['data']['new']==1) ? ' checked ' : '' ?>
                >
                <label for="new" class="form-check-label">Producto nuevo</label>
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar" class="btn btn-success">
                <a href="<?= ROOT ?>adminproduct" class="btn btn-info">Regresar</a>
            </div>
        </form>
    </div>
    <div class="card-footer">

    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch( error => {
                console.error(error)
            })
    </script>
</div>
<?php include_once(VIEWS . 'footer.php')?>
