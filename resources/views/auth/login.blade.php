@if ($errors->any())
    <div class="alert-message error">
        @foreach($errors->all() as $error)
            <br><br><br><br>
            <li><h5>{{$errors}}</h5></li>
        @endforeach
        @endif
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
    <h1 class="text-center">Вход на сайт</h1>
    <div class="col-md-6 mx-auto">
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <br>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Пароль">
            </div>
            <br>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Войти">
            </div>
            <a href="{{route('google-auth')}}">Войти с гугл</a>
        </form>
    </div>
</div>
