# CRUD - Cadastro de Imoveis

## Routes
- /imoveis/
- /imoveis/{id}

## Model
- properties
- id
title
name
description
rental_price
sale_price



## View
- master.blade.php
- index.blade.php
show.blade.php
create.blade.php
edit.blade.php


## Controller
- PropertyController
- @index - Todos Imóveis
    @show - Apenas um Imóvel
    @create - Cadastro Imóvel
    @edit - Editar Imóvel
    @update - Atualiza Imóvel
    @delete - Excluir Imóvel
    private @setName


