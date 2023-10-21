<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/myStyle.css">

    <title>Роспись ткани, кастом одежды и обуви, подарки, необычные подарки,живопись</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <ul>
            <li><a href="#portfolio">Портфолио</a></li>
            <li><a href="#quest">Ответы на вопросы</a></li>
            <li><a href="#forma">Заказать</a></li>
        </ul>
        <h1 class="container" data-mdb-animation-start="onLoad">Роспись по ткани</h1>
        <div class="cub">
            <img src="images/header/drop2.png" alt="drop">

        </div>
    </div>

</header>
<main>
    <section class="top ">
        <div class="container">
            <p id="one">Художник - это человек, который умеет создавать прекрасные картины.</p>
            <p id="two">Но знаете ли вы, что они могут быть не только на холсте?</p>
            <p id="three">Художники также могут расписывать одежду и кроссовки!</p>
            <p id="four">Это очень интересно и забавно, потому что каждый рисунок получается уникальным и
                неповторимым.</p>
            <p class="container" id="five">Если вы хотите выглядеть стильно и оригинально, то обязательно обратитесь к
                художнику, который
                сможет расписать вашу одежду или обувь.</p>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                <path fill-rule="evenodd"
                      d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
            <button type="button" class="btn btn-secondary btn-lg"><a href="#forma">Напиши художнику</a></button>
        </div>
        <svg id="up" xmlns="http://www.w3.org/2000/svg" fill="red" class="bi bi-arrow-up-circle-fill"
             viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
        </svg>
    </section>
    <section class="slider">

        <p><a name="portfolio"></a></p>
        <h2>За пять минут кистью умелой, мир черно-белый весь разрисуют чудаки!</h2>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                        aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="background-carousel">

                        <img src="images/slider/slider1.jpg" class="d-block w-80 shadow " alt="slider1">

                        <div class="carousel-caption d-none d-md-block bg-opacity-50 bg-secondary border border-white">
                            <h5>Почему художник решил нарисовать картину на сумочке?</h5>
                            <p>
                                Потому что он хотел показать, что искусство может быть в любом месте и на любой
                                поверхности.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider2.jpg" class="d-block w-80" alt="slider2">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 bg-secondary border border-white">
                            <h5>Индивидуальность</h5>
                            <p>Рисунки на твоих вещах позволяют выразить свою индивидуальность и характер, что делает
                                тебя более привлекательным для окружающих.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider3.jpg" class="d-block w-80" alt="slider3">
                        <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-secondary border border-white">

                            <h5>Как вы думаете, что общего между новыми кроссовками и новыми отношениями?</h5>
                            <p>
                                И то, и другое - интрига!
                            </p>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider4.jpg" class="d-block w-80" alt="slider4">
                        <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-secondary border border-white">
                            <h5>Стиль и мода</h5>
                            <p>Рисунки на одежде являются модными и стильными, что позволяет тебе выглядеть современно и
                                актуально.</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider5.jpg" class="d-block w-80" alt="slider5">
                        <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-secondary border border-white">
                            <h5>Долговечность</h5>
                            <p>Качественные рисунки на одежде остаются яркими и четкими даже после многочисленных
                                стирок</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider6.jpg" class="d-block w-80" alt="slider6">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 bg-secondary border border-white">
                            <h5>Знаете, почему люди так любят рисовать на одежде?</h5>
                            <p> Потому что это единственный вид искусства, где можно почувствовать себя настоящим
                                пятновыводителем!</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="background-carousel">
                        <img src="images/slider/slider7.jpg" class="d-block w-80" alt="slider7">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 bg-secondary border border-white">
                            <h5>Нарисуем для тебя картину даже на подошве кроссовка!</h5>
                            <p>
                                Если окажется, что это единственная пустая поверхность, которая у тебя есть.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="modl"></div>
    </section>
    <section class="descr container">
        <p><a name="quest"></a></p>
        <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
                <h3 class="accordion-header " id="1">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#odin" aria-expanded="true" aria-controls="odin">
                        Что такое кастом?
                    </button>
                </h3>
                <div id="odin" class="accordion-collapse collapse show " aria-labelledby="1"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>В широком смысле это обновление
                            одежды.</p>
                        <p>С помощью росписи можно не только украсить скучный элемент одежды, но и замаскировать пятно.
                            Помимо этого, если у вас есть вещь со старым потрескавшимся принтом, я с радостью
                            восстановлю картинку и вещь будет как новая!
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Что можно расписать?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>Я воплощу любую вашу идею!

                            <li>&ndash; футболки, майки, свитшоты, худи, платья, рубашки, пиджаки</li>
                            <li>&ndash; джинсы, джинсовые куртки и юбки</li>
                            <li>&ndash; рюкзаки, сумки, шопперы</li>
                            <li>&ndash; головные уборы: шляпы, панамы, кепки</li>
                            <li>&ndash; кожаные изделия: обложки для паспорта, кроссовки, куртки</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Как происходит моя работа?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Я использую специальные акриловые краски по ткани, поэтому рисунок не смывается при стирке
                            и живет долгие годы.</p>
                        <p>Кожаные изделия расписываются другими акриловыми красками, которые предназначены
                            специально для кожи. Они обладают повышенной стойкостью к царапинам, потому что кожаные
                            изделия наиболее чувствительны к этому.</p>
                        <p>Вы передаете мне одежду. Это не обязательно должна быть новая вещь из магазина.
                            Если у вас есть старая вещь, которую хотите преобразить, достаточно ее просто постирать.
                            Далее мы обсуждаем вашу идею, я создаю макет, где показываю, как рисунок будет выглядеть
                            на вашей вещи. После утверждения макета я приступаю к рисованию. В процессе рисования я
                            могу присылать вам фотоотчет.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Украшенная вручную поверхность нуждается в бережном отношении!
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Синтетические и смешанные ткани более капризны и чувствительны к стирке, поэтому они не
                            обеспечивают прочного сцепления с краской.акое изделие стирать можно только вручную в
                            прохладной воде.
                        </p>
                        <p>При использовании машинной стирки лучше выбирать программы для тонких тканей с температурой
                            не выше 40 °С. Не используйте продолжительный отжим, это приводит к преждевременному износу
                            рисунка.
                        </p>
                        <p>Если изделие имеет небольшой размер, лучше стирать его вручную. Не используйте отбеливатель,
                            чтобы краски по ткани не потеряли в цвете.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#dwa" aria-expanded="false" aria-controls="dwa">
                        Упаковка и доставка
                    </button>
                </h2>
                <div id="dwa" class="accordion-collapse collapse" aria-labelledby="2"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Все заказы я упаковываю в свою авторскую упаковку. Внутри кладу инструкцию по уходу
                            за одеждой, визитку с моими контактами и мини-подарки.
                        </p>
                        <p>Сроки:</p>
                        <p>Обычно роспись средней сложности занимает 2-3 дня. Но иногда срок работы может увеличиваться
                            в зависимости от моей загруженности другими заказами. Перед праздниками загруженность
                            плотная. Учитывайте это и делайте заказ заранее, минимум за 2 недели
                        </p>
                        <p>Доставка по России:</p>
                        <p>Почта России, СДЭК и так далее - от 300р</p>
                        <p>Экспресс-Л: от 675р. Доставка осуществляется через РЖД. Срок доставки 1-2 дня. Получение
                            посылки только на вокзале вашего города.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#tree" aria-expanded="false" aria-controls="tree">
                        Цены
                    </button>
                </h2>
                <div id="tree" class="accordion-collapse collapse" aria-labelledby="3"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Стоимость работы всегда индивидуальна, в среднем от 3000р до 7000р. Все зависит от сложности,
                            размеров и детализированности рисунка, используемых материалов и техник, срочности
                            выполнения работы.
                        </p>
                        <h2>Ориентировочная стоимость:</h2>
                        <p>футболки, шопперы - от 2000р;</p>
                        <p>джинсовки, толстовки - от 5000р;</p>
                        <p>кожаные изделия - от 5000р;</p>
                        <p>окрашивание тай-дай - от 500р;</p>
                        <p>создание эскизов - бесплатно;</p>
                        <p>авторская упаковка - бесплатно</p>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <section class="video ">

        <div class="video-block">
            <div class="video-text-border">
                <h4 class="d-none d-md-block">Рисунок на рюкзаке может быть отличным способом выразить свои эмоции и
                    чувства. Если вы переживаете
                    трудный период в
                    жизни, то можете нарисовать на рюкзаке что-то позитивное и вдохновляющее, чтобы поднять себе
                    настроение.</h4>
            </div>

            <video autoplay muted loop preload="auto" controls
                   class="video__content">
                <source src="video/videoBag.mp4" type="video/mp4">
            </video>
        </div>

        <div class="video-block">
            <video autoplay muted loop controls
                   class="video__content">
                <source src="video/videoSweatshirt.mp4" type="video/mp4">
            </video>
            <div class="video-text-border">
                <h4 class="d-none d-md-block">
                    Роспись на одежде как необычный и стильный способ выразить свои чувства и пожелания. Такой
                    подарок
                    будет радовать глаз и напоминать о вас каждый раз, когда человек надевает эту вещь.
                </h4>
            </div>
        </div>
    </section>
    <section class="form ">
        <div class="container">
            <h2>Закажи роспись на ткани и добавьте яркий акцент в свою жизнь!</h2>
            <?php
            $theme = "Новый заказ";
            error_reporting(E_ERROR);   //Отключение предупреждений и нотайсов (warning и notice) на сайте
            // создание переменных из полей формы
            if (isset($_POST['name1'])) {
                $name1 = $_POST['name1'];
                if ($name1 == '') {
                    unset($name1);
                }
            }
            if (isset($_POST['email1'])) {
                $email1 = $_POST['email1'];
                if ($email1 == '') {
                    unset($email1);
                }
            }
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
                if ($text == '') {
                    unset($text);
                }
            }
            if (isset($_POST['sab'])) {
                $sab = $_POST['sab'];
                if ($sab == '') {
                    unset($sab);
                }
            }

            //стирание треугольных скобок из полей формы
            /* комментарий */
            if (isset($name1)) {
                $name1 = stripslashes($name1);
                $name1 = htmlspecialchars($name1);
            }
            if (isset($email1)) {
                $email1 = stripslashes($email1);
                $email1 = htmlspecialchars($email1);
            }
            if (isset($text)) {
                $text = stripslashes($text);
                $text = htmlspecialchars($text);
            }
            // адрес почты куда придет письмо
            $address = "OksanaDubikW@yandex.ru";

            // текст письма
            $note_text = "
    Тема : $theme \r\n
    Имя : $name1 \r\n
    Email : $email1 \r\n
       Дополнительная информация : $text";
            if (isset($name1) && isset ($sab)) {
                mail($address, $theme, $note_text, "Content-type:text/plain; windows-1251");

                $text = "<div class = 'textPhp'  style=' background-color: #ddddfa;
                width: 100%;
                text-align: center;
                padding: 40px'><p style='font-size:25px;'>
                    Уважаемый(ая)
                    <b style='font-size:25px;'>
                        $name1
                    </b>
                    Ваше письмо отправленно успешно. <br>
                    Спасибо. <br>
                    Вам скоро ответят на почту <b style='font-size:25px;'>
                    $email1</b>.
                </p>
                </div>";
                echo  $text;

            }
            ?>
            <form action="1956.php" method="post" name="f1" enctype="multipart/form-data">
                <p><a name="forma"></a></p>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Ваше имя" name="name1" required=""
                           aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Ваш email" aria-label="Username" name="email1"
                           required="required">
                </div>
                <div class="textar input-group mb-3">
                    <span class="input-group-text">Дополнительные детали</span>
                    <textarea class="form-control" aria-label="With textarea" name="text"></textarea>
                </div>

                <input class="btn btn-secondary" type="submit" value="ЗАКАЗАТЬ" name="sab">
                <input class="btn btn-secondary" type="reset" value="ОЧИСТИТЬ" name="cli">


            </form>
        </div>
    </section>
</main>

<footer>
    <div class="footer container">

        <p>По вопросам, связанным с заказами, звоните
            по телефону 1-888-878-3227.
        </p>
        <p>Мы не занимаемся продажей или арендой
            одежды. Все работы подлежат предварительному согласованию с заказчиком.
        </p>


        <p><a href="#"> &#169; Данный сайт является
                интеллектуальной собственностью</a></p>
    </div>

</footer>

<script src="script/myScript.js"></script>
</body>
</html>