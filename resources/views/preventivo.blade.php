<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css resources/js/app.js'])
</head>
<body>
    
    
    <div class="container">
        <h1>Contattaci</h1>
        
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        
        <form action="{{ route('preventivo.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" id="cognome" name="cognome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="auto">Auto</label>
                <input type="text" class="form-control" id="auto" name="auto" required>
            </div>
            <div class="form-group">
            <label for="targa">Targa</label>
            <input type="text" class="form-control" id="targa" name="targa" required>
        </div>
        <div class="form-group">
            <label for="numero_telefono">Numero di Telefono</label>
            <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" required>
        </div>
        <div class="form-group">
            <label for="corpo">Messaggio</label>
            <textarea class="form-control" id="corpo" name="corpo" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>

</body>
</html>