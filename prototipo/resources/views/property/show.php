<h1>Página Single</h1>

<?php
if (!empty($property)) {
    foreach ($property as $prop) {
?>
        <h2>Titulo do Imóvel: <?= $prop->title; ?> </h2>

        <p>Valor de Locação: <?= $prop->description; ?> </p>

        <p>Valor de Locação: R$ <?= number_format($prop->rental_price, 2, ',', '.'); ?> </p>

        <p>Valor de Venda: R$ <?= number_format($prop->sale_price, 2, ',', '.'); ?> </p>
<?php
    }
}
