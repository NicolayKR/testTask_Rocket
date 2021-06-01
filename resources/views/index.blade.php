<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>testTask</title>
</head>
<body>
    <main>
        <div id="app">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-sm-1 col-2">
                            <a href="#"><img src="assets/logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-2">
                            <nav >
                                <ul class="menu">
                                    <li class="menu_item"><a href="#" class="menu_link">Услуги</a></li>
                                    <li class="menu_item"><a href="#" class="menu_link">Портфолио</a></li>
                                    <li class="menu_item"><a href="#" class="menu_link">Отзывы</a></li>
                                    <li class="menu_item"><a href="#" class="menu_link">Вакансии</a></li>
                                    <li class="menu_item"><a href="#" class="menu_link">Контакты</a></li>
                                </ul>               
                            </nav>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-8 number_block">
                            <a href="tel:89514991153" class="subheader_phone">8(863)-243-15-10</a>
                            <div class="subheader_call">Ростов-на-Дону</button>
                        </div>
                    </div>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>
            <section class="consultation">
                <div class="container">
                    <h2 class="title_left">
                        Рекламно-информационное <br> агентство
                    </h2>
                    <div class="consultation__descr">
                        Будем рады, если Вы обратитесь в наше Агентство. Мы готовы <br>
                        предложить Вам передовые решения для продвижения <br>
                        Вашего бизнеса.  
                    </div>
                    <form class="feed-form" action="#">               
                        <input name="phone" required placeholder="Номер телефона" type="tel">
                        <button class="button button_submit">Обратный звонок</button>
                    </form>
                </div>
            </section>
            <section class="news ">
                <div class="container">
                    <div class="news__title">
                        Новости
                    </div>
                    <div class="carousel__news">
                        <!-- <sliders></sliders> -->
                        <slider></slider>
                    </div>
            </section>
            <footer>
                <div class="container">
                    <div class="footer_wrapper xs-visible">
                        <img src="assets/logo2.png" alt="">
                        <div class="footer_links">                          
                            <a href="#" class="footer_link">Услуги</a>
                            <a href="#" class="footer_link">Портфолио</a>
                            <a href="#" class="footer_link">Отзывы</a>
                            <a href="#" class="footer_link">Вакансии</a>
                            <a href="#" class="footer_link">Контакты</a>
                        </div>
                    </div>
                    <div class="footer_wrapper xs-hidden">
                        <div class="footer_subheader">
                            Ростове-на-Дону,<br>
                            Ленина,21
                        </div>
                        <div class="footer_phone">
                            8(863)-243-15-10
                        </div>
                    </div>
                </div>
            </footer>
            <div class="menu-2">
                <ul class="menu-2-ul">
                    <li class="menu-2-ul_item"><a href="#" class="menu-2_link">Услуги</a></li>
                    <li class="menu-2-ul_item"><a href="#" class="menu-2_link">Портфолио</a></li>
                    <li class="menu-2-ul_item"><a href="#" class="menu-2_link">Отзывы</a></li>
                    <li class="menu-2-ul_item"><a href="#" class="menu-2_link">Вакансии</a></li>
                    <li class="menu-2-ul_item"><a href="#" class="menu-2_link">Контакты</a></li>
                </ul>
                <div class="menu-2_footer">
                    <div class="menu-2_footer_subheader">
                        Ростове-на-Дону,<br>
                        Ленина,21
                    </div>
                    <div class="menu-2_footer_phone">
                        8(863)-243-15-10
                    </div>
                </div>
            </div>               
        </div>
    </main>
    <script src="./js/app.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>