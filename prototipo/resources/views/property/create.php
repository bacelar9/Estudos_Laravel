<h1>Formulário de Cadastro :: Imoveis </h1>

<form action="<?= url('/imoveis/store'); ?>" method="post">
    <?= csrf_field(); ?>
    <label for="title">Titulo do Imóvel</label>
    <input type="text" name="title" id="title"></input>
    <br>
    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="19"></textarea>
    <br>
    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price"></input>
    <br>
    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price"></input>
    <br>
    <button type="submit">Cadastrar Imóvel</button>
</form>
