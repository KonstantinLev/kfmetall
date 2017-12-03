<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4e93bc">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4e93bc">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4e93bc">

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hamburgers.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.mmenu.all.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <title>KFMetall</title>
</head>
<body>

    <div id="my-page" class="home">
        <div id="my-header">
            <?php include_once ('parts/header.html')?>
        </div>
        <div id="my-content">
            <div class="content home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="block-short-descr">
                                <p class="title"><b>KF Metall</b> - перспективное и уверенно развивающееся предприятие!</p>
                                <p class="info">Основная ценность для нас - клиент, поэтому коллектив нашего завода предоставляет
                                    выгодные и удобные условия для каждого заказчика. Мы стремимся сделать партнёрство
                                    надёжным и удобным для всех</p>
                                <p class="privilege">Преимущества работы с нами:</p>
                                <ul>
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Вы получаете продукцию высокого качества по конкурентоспособной цене;</li>
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Вся продукция соответствует действующим стандартам и техническим условиям;</li>
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Индивидуальный подход к каждому заказчику повышает эффективность сотрудничества;</li>
                                    <!--<li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Благодаря удобной системе скидок партнёрство становится более выгодным;</li>-->
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Кротчайшие сроки изготовления сводят время поставки до минимума;</li>
                                    <!--<li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Квалифицированные специалисты помогут решить любые технические вопросы, сэкономив ваше время;</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="block-callback">
                                <h1 class="text-center">Обратная связь</h1>
                                <form method="post">
                                    <div class="form-group labeled-input">
                                        <input id="phone" name="contacts" placeholder="телефон" required>
                                        <label for="phone" class="label-placeholder">Как с Вами связаться?</label>
                                    </div>
                                    <div class="form-group">
                                        <i>
                                            Заполняя данную форму, вы принимаете условия
                                            <a href="policy" target="_blank">Соглашения об использовании сайта</a>, в том
                                            числе в части обработки и использования персональных данных
                                        </i>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn-main center-block" value="Отправить">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="my-footer">
            <footer>

            </footer>
            <!--Модалка-->
            <?php include_once ('parts/modal.html')?>
        </div>
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mmenu.all.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</body>
</html>