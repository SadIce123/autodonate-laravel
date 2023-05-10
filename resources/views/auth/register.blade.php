@if ($errors->any())
<div class="alert-message error">
    @foreach($errors->all() as $error)
        <br><br><br><br>
        <li><h5>{{$errors}}</h5></li>
    @endforeach
    @endif
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<link rel="stylesheet" href="https://getbootstrap.com/1.4.0/assets/css/bootstrap.min.css">
<title>AkriVillage</title>
<div class="topbar">
    <div class="fill">
        <div class="container">
            <a class="brand" href="/">AkriVillage</a>
            <ul class="nav">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="login">Вход</a></li>
                <li><a href="register">Регистрация</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container my-5">
    <h1 class="text-center">Регистрация на сайте</h1>
    <div class="col-md-6 mx-auto">
        <form action="/register" method="post">
            @csrf
            <label>Ник в игре</label>
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Ник в игре" required>
            </div>
            <br>
            <label>EMail</label>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
            <br>
            <label>Пароль</label>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Пароль" required>
            </div>
            <br>
            <label>Пароль</label>
            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль" required>
            </div>
            <br>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>
