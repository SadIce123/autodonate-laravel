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
        <br><br><br>
        <br>
        <h5>Покупка доната</h5>
        <form action="/obrabotka" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{auth()->user()->name}}">
            <input type="hidden" name="balance" value="{{auth()->user()->balance}} ">
            <label>Выберите донат</label>
            <select name="donate">
                <option selected value="vip">Start (80 руб)</option>
                <option value="premium">Improved (160 руб)</option>
                <option value="gladiator">Advanced (350 руб)</option>
                <option value="emperor">Elite (500 руб)</option>
            </select>
            <label>Подтвердите выбор доната</label>
            <select name="actionCost">
                <option selected value="80">Start</option>
                <option value="160">Improved</option>
                <option value="350">Advanced</option>
                <option value="500">Elite</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Купить">
        </form>
        <br>
        <h5>Покупка ресурсов</h5>
        <form action="/obrabotkaRes" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{auth()->user()->name}}">
            <label>Выберите за сколько хотите купить ресурс</label>
            <input type="hidden" name="balance" value="{{auth()->user()->balance}}">
            <select name="actionCost">
                <option selected value="vip">10 руб</option>
                <option value="premium">20 руб</option>
                <option value="gladiator">30 руб</option>
                <option value="emperor">40 руб</option>
            </select>
            <label>Выберите ресурс</label>
            <select name="res">
                <option selected value="coal">64 угля</option>
                <option value="stone">64 камня</option>
                <option value="birch_wood">64 березы</option>
                <option value="wheat">64 пшеницы</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Купить">
        </form>

    </body>
</html>
