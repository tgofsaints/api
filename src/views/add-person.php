<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="src/views/css/styles.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
            <h1 style="font-size: 40px">Cadastro de Pessoas</h1>
            <form action="/api/add" method="post">
                <label for="name">Nome:</label>
                <input class= "input" type="text" name="name" id="name" required>
                <label for="age">Idade:</label>
                <input class= "input" type="number" name="age" id="age" required>
                <button class="btn btn-active btn-primary" type="submit">Cadastrar Pessoa</button>
            </form>
            <button class="btn btn-active btn-neutral" type="submit"><a href="/api/list">De Volta a Lista</a></button>
    </div>
    
</body>

</html>