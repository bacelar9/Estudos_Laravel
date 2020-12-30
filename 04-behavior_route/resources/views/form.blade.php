<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de Rotas</title>

    ><link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container my-3">
        <form action="{{url('/users/2')}}" method="POST"  autocomplete="off" >
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            @method('PUT')

            <div class="form-group">
                <label for="first_name">Primeiro Nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Hilton">
            </div>
            <div class="form-group">
                <label for="last_name">Segundo Nome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Bacelar">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="bacelar.si@gmail.com">
            </div>
            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
