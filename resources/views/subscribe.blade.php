<!DOCTYPE html>
<html>
<head>

    <!--[if IE 7 ]>
    <html lang="ru" class="ie7"><![endif]-->
    <!--[if IE 8 ]>
    <html lang="ru" class="ie8"><![endif]-->
    <!--[if IE 9 ]>
    <html lang="ru" class="ie9"><![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=1">
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Open+Sans:300,400,700,800&amp;subset=cyrillic"
        rel="stylesheet">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Рецепты</title>
    <link href="/landing/css/style.css" rel="stylesheet">
    <link href="/landing/css/animation.css" rel="stylesheet">
    <script src="/landing/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wrap">
    <div class="content">
        <div class="main">
            <div class="mainform">
                <div class="logo">
                    <img src="/landing/images/logo.png" class="logo-img">
                    <span>Быстро и вкусно!</span>
                </div>
                <form action="./" method="post" id="form">
                    <div class="inner">
                        <h1>Неограниченный доступ к рецептам</h1>
                        <h2>Авторизация по телефону</h2>
                        <div class="input-frame input-frame-tel">
                            <input id="idPhone" name="msisdn" placeholder="__________" value="7" type="tel"
                                   maxlength="11" class="formInput telInput" required="" autofocus=""
                                   onfocus="var temp_value=this.value; this.value=''; this.value=temp_value">
                        </div>
                        <p class="numberDemo">Пример: 79161234567</p>
                        <button id="idSend" value="Слушать" type="submit" class="submitbutton"
                                disabled="disabled">Читать
                            <span class="btn-icon"></span>
                        </button>
                        <div id="error-box">Пожалуйста укажите Ваш номер телефона</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="agreed" class="agree">
    <input type="checkbox" id="chrul" name="rul" checked="">

    Я согласен(на) с тем, что нажимая кнопку «Читать», я получаю платный доступ на 24 часа к контенту на сайте
    fast-food.pw. Стоимость доступа составляет 30.00 рублей (включая НДС) в сутки для абонентов Tele2. Стоимость услуги
    для абонентов ПАО «МТС» составляет 30 рублей с НДС за 1 календарный день. В случае не получения от абонента запроса
    на отключение подписки на ресурс, списание со счета абонента повторяется, продлевая доступ к сайту на следующие 24
    часа.

</div>
<script type="text/javascript">
    setInterval(function () {
        if ($("#idPhone").val().length > 10) {
            $("#idSend").removeAttr("disabled");
        } else {
            $("#idSend").attr("disabled", "disabled");
        }
    }, 500); //Runs every 0.5s
</script>

</body>
</html>
