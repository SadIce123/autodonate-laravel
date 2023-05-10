<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Личный кабинет</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <form id="logout" action="/logout" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary" value="Выйти">
        </form>
        <br><br><br>
        <h2>Баланс: {{auth()->user()->balance}} руб.</h2>
        <a class="btn btn-primary" href="/addBalance">Пополнить</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <br><br><br>
        <center><h2>Привет, {{auth()->user()->name}}!</h2></center>
    </body>
</html>
