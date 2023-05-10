<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<center><h1>AkriMoney</h1>
        <h2>Текущий баланс: {{auth()->user()->balance}} руб.</h2>
        <br><br>
        <h2>Пополнение баланса</h2>
        <div class="input-group mb-3">
            <form method="POST" action="https://yoomoney.ru/quickpay/confirm.xml">
                @csrf
                <input class="form-control" name="sum" placeholder="Сумма">
                <input type="hidden" name="receiver" value="4100117996753868">
                <input type="hidden" name="paymentType" value="ac">
                <br>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
