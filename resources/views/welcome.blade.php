<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сайт для покупки билетов на поезд</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<div class="container">
    <div class="notification has-text-centered">
        <h1 class="title">Сайт для покупки билетов на поезд</h1>
    </div>
</div>
<div class="container">
    <div class="notification">
        <div class="columns">
            <div class="column">
                <input class="input" type="text" placeholder="Откуда">

            </div>
            <div class="column">
                <input class="input" type="text" placeholder="Куда">

            </div>
            <div class="column">
                <input class="input" type="text" placeholder="Дата">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="notification">
        <div class="columns is-centered is-vcentered is-mobile">
            <div class="column is-narrow has-text-centered">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Номер поезда</th>
                        <th>Точка прыбытия</th>
                        <th>Точка отправления</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>123 василек</th>
                        <td>Питер 12.08.19</td>
                        <td>Москва 12.08.19</td>
                        <td><a class="button"><i class="fas fa-shopping-cart"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            Поезд <b>123</b> с маршрутом <b>Питер - Москва</b>
                        </p>
                        <div class="field">
                            <label class="label">Ваше имя</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Купить</button>
                            </div>
                            <div class="control">
                                <button class="button is-text">Отменить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
</body>
</html>
