<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body class="interview">
<!-- Форма опроса пользователя,который прошел регитрацию и выполнил вход-->
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <form action="../validation/interview_check.php" method="post">
                <div id="q1"><span>1. Из какого вы города?</span><br>
                    <input type="radio" class="form-check-input mt-0" aria-label="Radio button for following text input"
                           name="q1" value=" г.Минск"><span>г.Минск</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1" value="г.Витебск"><span>
                        г.Витебск</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1" value="г.Брест"><span>
                        г.Брест</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1"
                           value="г.Гомель"><span>г.Гомель</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1"
                           value="г.Могилев"><span>г.Могилев</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1"
                           value="г.Гродно"><span>г.Гродно</span>
                </div>
                <br>
                <div id="q2"><span>2. Ваш пол?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2"
                           value="Мужчина"><span>Мужчина</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2"
                           value="Женщина"><span>Женщина</span><br>
                </div>
                <br>
                <div id="q3"><span>3. Ваш возраст?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3"
                           value="16-20 лет"><span>16-20 лет</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3"
                           value="20-25 лет"><span>20-25 лет</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3" value="25-35 лет"><span>25-35 лет</span>
                    <br>
                    <input type="radio" class="form-check-input mt-0" name="q3" value="35-45 лет"><span>35-45 лет</span>
                    <br>
                    <input type="radio" class="form-check-input mt-0" name="q3" value="45 лет и старше">
                    <span>45 лет и старше</span><br>
                </div>
                <br>
                <div id="q4"><span>4. Какой вы национальности?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Белорусской"><span>Белорусской
                    </span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Русской"><span>
                        Русской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Польской"><span>
                        Польской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Украинской"><span>
                        Украинской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Еврейской"><span>
                        Еврейской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Татарской"><span>
                        Татарской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Цыганской"><span>
                        Цыганской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Латышской"><span>
                        Латышской</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Литовской"><span>
                        Литовской</span>
                </div>
                <br>
                <div id="q5"><span>5. Какое у вас вероисповедание?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5"
                           value="Православие"><span>Православие</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5"
                           value="Католицизм"><span>Католицизм</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Протестантизм"><span>
                        Протестантизм</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Иудаизм"><span>
                        Иудаизм</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Ислам"><span>
                        Ислам</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Атеизм"><span>
                        Атеизм</span>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Завершить опрос">
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>

<?php
// Функция ini_set не отображает вывод всех ошибок на экране пользователя
ini_set('display_errors', 'Off');
include "../validation/interview_check.php"; ?>
</body>
</html>

