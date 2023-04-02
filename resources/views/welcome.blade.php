<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Tourism, туризм, путешествия, road, forests, active,">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dropdown.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/searchbar.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tourism</title>
</head>

<body>

<header class="header">
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="#">Tourism</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#Gallery">Galery</a></li>
                <li><a href="#AboutUs">About us</a></li>
                <li><a href="#Statistic">Statistic</a></li>
                <li><a href="#Video">Video</a></li>
                <li><a href="/blog">Blog</a></li>
                <li class="with-dropdown"><a href="/login" aria-haspopup="true">Login</a>
                    <ul class="dropdown" aria-label="submenu">
                        <li><a href="/registration">Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--https://www.w3schools.com/howto/howto_css_searchbar.asp-->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</header>

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__title2">
                EXPLORE THE
            </h2>
            <h1 class="intro__title">
                DEEP FOREST
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.
            </p>
        </div>
    </div>
</div>


<div class="block1" id="Gallery">
    <div class="container">
        <h2 class="block1__title">
            Gallery
        </h2>
        <div class="slider">
            <div class="item">
                <img src="../img/slide1.jpg" alt="">
            </div>

            <div class="item">
                <img src="../img/slide2.jpg" alt="">
            </div>

            <div class="item">
                <img src="../img/slide3.jpg" alt="">
            </div>

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>
        <br>

        <div class="slider-dots">
            <span class="slider-dots_item" onclick="currentSlide(1)"></span>
            <span class="slider-dots_item" onclick="currentSlide(2)"></span>
            <span class="slider-dots_item" onclick="currentSlide(3)"></span>
        </div>
    </div>
</div>



<div class="block2" id="AboutUs">
    <div class="text__container">
        <p class="block__title">
            About us
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntlabore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi et dolore
            magna aliqua.
        </p>
    </div>
</div>


<div class="block3" id="Statistic">
    <div class="container">
        <h2 class="block3__title">
            Statistics
        </h2>
        <h2 class="block3__title2">
            Did you know?
        </h2>
        <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntlabore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi et dolore
            magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididuntlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi et dolore magna aliqua.
        </p>
        <div class="ststistic__container">
            <div class="statistic__container">
                <span class="num" data-val="2000">0000</span>
                <p class="statistic__text">Lorem ipsum</p>
            </div>
            <div class="statistic__container">
                <span class="num" data-val="23">00</span>
                <p class="statistic__text">Lorem ipsum</p>
            </div>
            <div class="statistic__container">
                <span class="num" data-val="1932" 2>0000</span>
                <p class="statistic__text">Lorem ipsum</p>
            </div>
            <div class="statistic__container">
                <span class="num" data-val="120">000</span>
                <p class="statistic__text">Lorem ipsum</p>
            </div>
        </div>
    </div>
</div>

<div class="block4" id="Video">
    <div class="text__container">
        <!---https://www.w3schools.com/css/css_tooltip.asp-->
        <p class="tooltip">
            Lorem ipsum
            <span class="tooltip__text">Lorem ipsum dolor sit.</span>
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntlabore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi et dolore
            magna aliqua.
        </p>
    </div>
    <div class="video">
        <iframe width="900" height="512" src="https://www.youtube.com/embed/AGcTCvn-a6g"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <h2 class="end">
        Thourism.
    </h2>
</div>
<footer class="footer">
    Все права защищены мной<br />
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi tenetur labore impedit neque ex qui illo
    perferendis dolorem doloribus earum, ducimus officiis enim odit. Suscipit, earum. Ipsam maxime consectetur
    laudantium.
</footer>

<script src="{{asset('assets/js/slider.js')}}"></script>
<script src="{{asset('assets/js/numCounting.js')}}"></script>
<script src="{{asset('assets/js/navMenu.js')}}"></script>

</body>

</html>
