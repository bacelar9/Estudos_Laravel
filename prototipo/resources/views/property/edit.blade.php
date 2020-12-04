<h1>Formulário de Edição :: Imoveis </h1>

<?php
$property = $property[0];
?>

<form action="<?= url('/imoveis/update', ['name' => $property->name]); ?>" method="post">
    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="title">Titulo do Imóvel</label>
    <input type="text" name="title" id="title" value="<?= $property->title; ?>"></input>
    <br>
    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="19" ><?= $property->description; ?></textarea>
    <br>
    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price"  value="<?= $property->rental_price; ?>"></input>
    <br>
    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price"  value="<?= $property->sale_price; ?>"></input>
    <br>
    <button type="submit">Atualizar Imóvel</button>
</form>
