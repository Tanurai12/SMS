<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shri Agrasen Kanya PG College</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'roboto';
            background-image: url('https://i0.wp.com/velosportsohio.com/wp-content/uploads/2020/03/simple-pattern-white-seamless-website-background.jpg');
            font-size: 14px;
            font-family: 'Raleway', sans-serif;

        }

        .mySlides {
            display: none
        }

        .carousel-inner {
            height: 500px;
            width: 100%
        }

        .inner {
            width: 100%;
            height: 300px;
        }

        .slide-content {
            position: absolute;
            z-index: 100;
            justify-content: center;

            width: 100%;
        }

        .slide-content p {

            font-size: 40px;
            font-style: italic;
            font-weight: bold;
            text-shadow: 2px 2px red;
        }

        .w3-top {
            z-index: 200;
            top: 0;
            position: sticky;
        }

        .img-logo {
            background: white;
            width: 170px;
            margin: auto;
            height: 170px;
            border-radius: 50%;

        }

        .news {
            width: 140px;
            height: 40px;
            margin-top: -34px;
            position: relative;
            z-index: 100;
            padding-top: 7px;
            margin-left: -20px;
        }

        .news a {
            color: black;
            font-weight: bold;
        }

        .marq {
            padding-top: 7px;
            background-color: white !important;

        }

        .marq a {
            color: rgb(126, 126, 243);
            font-weight: bold;
        }

        .links a {
            font-size: 30px;
            padding: 10px;
        }

        .nav-link:hover {

            background: white;


        }

        .gallery-box2,
        .gallery-box1,
        .gallery-box3 {
            overflow: hidden;
            width: 100%;
            height: 100%;
            border: 5px solid white;
            box-shadow: 0px 3px 10px -3px grey;
            position: relative;
        }

        .gallery-box2 img,
        .gallery-box1 img,
        .gallery-box3 img {
            width: 100%;
            height: 100%;

        }

        .last-btn:hover {
            border: 3px solid white;
            cursor: pointer;
            box-shadow: 0px 3px 10px -3px grey;


        }

        .gallery-box1 .btn,
        .gallery-box2 .btn,
        .gallery-box3 .btn {
            float: right;
            margin: 20px;
            margin-bottom: 10px;

        }

        .footer-col1 p,
        .links i {
            cursor: pointer;
        }

        .footer-col1 p:hover {
            text-decoration: underline;
            transition: 2s;
        }

        .footer i {
            font-size: 30px;
        }

        .social-media {
            display: flex;
            color: white;
            /* border: 2px solid white; */
            justify-content: center;
            margin: auto;

        }

        .social {

            padding: 10px;
            border: 1px solid white;
            margin: 10px;


        }

        .footer-copy {
            color: white;
            text-align: center;
        }

        .container1 .card1 .icon {

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            background: #f25c6a;

        }

        .container1 .card1 .icon .fa {

            position: absolute;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            font-size: 80px;

            color: #fff;

        }

        .container1 .card1 .slide {

            width: 300px;

            height: 200px;

            transition: 0.5s;

        }

        .container1 .card1 .slide.slide1 {

            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;

            z-index: 1;

            transition: .7s;

            transform: translateY(100px);

        }

        .container1 .card1:hover .slide.slide1 {

            transform: translateY(0px);

        }

        .container1 .card1 .slide.slide2 {

            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 20px;

            box-sizing: border-box;

            transition: .8s;

            transform: translateY(-100px);

            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);

        }

        .container1 .card1:hover .slide.slide2 {

            transform: translateY(0);

        }

        .container1 .card1 .slide.slide2::after {

            content: "";

            position: absolute;

            width: 30px;

            height: 4px;

            bottom: 15px;

            left: 50%;

            left: 50%;

            transform: translateX(-50%);

            background: #2c73df;

        }

        .container1 .card1 .slide.slide2 .content p {

            margin: 0;

            padding: 0;

            text-align: center;

            color: #414141;

        }

        .container1 .card1 .slide.slide2 .content h3 {

            margin: 0 0 10px 0;

            padding: 0;

            font-size: 24px;

            text-align: center;

            color: #414141;

        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: sans-serif;
            background-color: #262626
        }

        .testimotionals {
            width: 350px;
            display: inline-block;
            margin-left: 50px;
            margin-top: 50px
        }


        .testimotionals .card {

            position: relative;
            overflow: hidden;
            width: 350px;
            margin: 0 auto;
            background: #333;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, .5)
        }

        .testimotionals .card .layer {
            z-index: 1;
            position: absolute;
            top: calc(100% - 2px);
            height: 100%;
            width: 100%;
            left: 0;
            background: linear-gradient(to left, orange, tomato);
            transition: 0.5s;

        }

        .testimotionals .card .content {
            z-index: 2;
            position: relative;
        }

        .testimotionals .card:hover .layer {
            top: 0;
        }

        .testimotionals .card .content p {
            font-size: 14px;
            line-height: 24px;
            color: #fff;

        }

        .testimotionals .card .content .image {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid white;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);

        }

        .testimotionals .card .content .details h2 {
            font-size: 18px;
            color: white;
        }

        .testimotionals .card .content .details h2 span {
            font-size: 18px;
            color: purple;
            transition: 0.5s;
        }

        .testimotionals .card:hover .content .details h2 span {
            color: white;
            position: relative
        }

        body {
            margin-bottom: 20px
        }

        .head1 {

            margin-top: 10px;
            scroll-snap-align: start;

        }

        .head1 img {
            height: 500px;
        }

        .feedback {
            margin: auto;
            text-align: center;
            justify-content: center;
        }


        .footer-gallery {
            position: absolute;
            width: 20%;
        }
        h3,span,h1{
              font-family: "Madimi One", sans-serif;
        }
        .navbar-section{
            box-shadow:3px 3px 1px 2px white;
            position:sticky;
            top:0;
            z-index:200;
            
        }
    </style>
</head>

<body>


    {{-- Navbar --}}
    <section title="navbar" style="background-color: white; color:black" class="text-dark navbar-section">

        <nav class="navbar navbar-expand-lg navbar-light  text-light p-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- <ul class="navbar-nav ">
                    @foreach ($menu[0] as $menuItem)
                        <li class="nav-item @if (isset($menu[$menuItem->id])) dropdown @endif ">
                            <a class=" text-light nav-link @if (isset($menu[$menuItem->id])) dropdown-toggle @endif "
                                 id="navbarDropdown{{ $menuItem->id }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{$menuItem->url}}">
                                {{ $menuItem->title }}
                            </a>

                            @if (isset($menu[$menuItem->id]))
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menuItem->id }}">
                                    @foreach ($menu[$menuItem->id] as $childItem)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{$childItem->url}}">{{ $childItem->title }}</a>

                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach


                </ul> --}}

                <ul class="navbar-nav">
                    @foreach ($menu[0] as $menuItem)
                        <li class="nav-item @if (isset($menu[$menuItem->id])) dropdown @endif ">
                            @if (isset($menu[$menuItem->id]))
                                <a class="text-dark nav-link dropdown-toggle" id="navbarDropdown{{ $menuItem->id }}"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    href="{{ $menuItem->url }}">
                                    {{ $menuItem->title }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menuItem->id }}">
                                    @foreach ($menu[$menuItem->id] as $childItem)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ $childItem->url }}">{{ $childItem->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a class="text-dark nav-link" href="{{ $menuItem->url }}">
                                    {{ $menuItem->title }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>


            </div>
        </nav>

    </section>


    {{-- carousel/ Slider --}}

    <section title="carousel">

        <div id="demo " class="carousel slide" data-ride="carousel">

            <div class="slide-content text-center mt-5 ">

                <div class="img-logo"> <img class="pt-3  " src="{{ $infos->logo }}" alt="" height="160px ">
                </div>

                <p class="text-light mt-5  ">{{ $infos->collegename }}</p>


            </div>


            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach ($datas as $data)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img class="d-block w-100" src="{{ asset($data->img) }}" alt="First slide">

                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </section>


    <section title="marq">
        <div class="container-fluid head2" data-aos="fade-in">

            <div class="marq bg-secondary">
                <marquee direction="left">

                    <img src="https://www.nitt.edu/home/new2.gif" alt=""> <a href="">Admission for
                        23-24</a><img src="https://www.nitt.edu/home/new2.gif" alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                    <a href="">Admission for 23-24</a><img src="https://www.nitt.edu/home/new2.gif"
                        alt="">
                </marquee>

            </div>
            <div class="news text-center bg-danger text-light">

                <a href="" class="text-light">Latest News</a>


            </div>

        </div>



    </section>


    {{-- about --}}
    <section title="about">
        <div class="container-fluid head3 mt-3" data-aos="fade-up">

            <div class="row p-5 ">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12  text-center" data-aos="slide-left">

                    <h3 class=" text-danger font-weight-bold ">About Shri Agrasen Kanya P.G. College Varanasi</h3>

                    <p class=" w-100 mt-4" style="color: grey; font-size: 20px; ">
                        Since time immemorial, Varanasi, the most ancient living city in the world and the cultural
                        capital of India peninsula has evolved as a sacred seat of learning and knowledge. Shri Agrasen
                        Kanya P.G. College has shined as a bright star of knowledge spreading exclusively for.
                    </p>

                    <div class="btn  btn-outline-danger my-2 my-sm-0 " style="margin-top: 20px !important;">Read More
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 mt-2 first-img" data-aos="slide-right">
                    <img src="https://shriakpgc.net/wp-content/uploads/2021/04/banner3.jpg" width="100%"
                        alt="">
                </div>


            </div>
        </div>
    </section>

    {{-- popular courses --}}

    <section>
        <div class="container-fluid popular-course  pb-5" style="background-color: {{ $infos->color }};">
            <div class="logo text-center pt-5 pb-4" data-aos="fade-up"><span class="text-light font-weight-bold "
                    style="font-size: 40px; ,  text-align: center; color: white !important ; border-bottom: 1px solid white;">
                    Popular Courses
                </span>
            </div>

            <div class="row ">
                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">

                                <h3>Bachelor of Arts</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span>1200</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">

                                <h3>Bachelor Of Commerce</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span>1200</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">
                                <h3>Bachelor Of Science</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span>1200</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">

                                <h3>M.A (Home Science)</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span>1200</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">

                                <h3>Bachelor Of Commerce</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">1200</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-4 col-md-4 col-sm-12  ">
                    <div class="testimotionals">
                        <div class="card">
                            <div class="layer">

                            </div>
                            <div class="content text-light">
                                <h3>Bachelor Of Science</h3>

                                <p>The college offers a wide range of Courses. These are:</p>

                                <i class="fa fa-user" aria-hidden="true"></i><span class="ml-2">1200</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- feedback form --}}

    <section class="head1">
        <div class="container mb-5">
            <div class="row">

                <div class="col-12 col-lg-6 col-md-6 col-sm-12  ">
                    <img src="https://www.creataum.com/assets/images/about-left-image.png" alt="">

                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12  w-100">
                    <div class="feedback">

                        <div class="card text-left mt-4 w-100 pb-5" style="background:#dce0e5;">
                            <h3 class="text-center  text-light mt-3">Drop A Feedback</h3>
                            <div class="card-body p-4 ">
                                <form id="myForm" method="post" action="feedback">
                                    @csrf
                                    <input type="text" class="form-control  " name="name" id=""
                                        placeholder="Your Name">
                                    <input type="text" class="form-control mt-2" name="add" id=""
                                        placeholder="Your Address">

                                    <textarea cols="34" class="form-control mt-2" rows="5" value="Message"placeholder="Send us your query"
                                        name="msg"></textarea>
                                    <label class="mt-3">Upload Image :</label>
                                    <input type="file" class="form-control mt-2" name="img" id="">
                                    <button type="submit" class="btn bg-danger form-control mt-2 text-light"
                                        id="submitBtn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section>


    {{-- news and events --}}

    <section>
        <div class="container-fluid gallery  mt-2" style="background-color: {{ $infos->color }};">
            <div class="logo text-center pt-3" data-aos="fade-up"><span class="text-light font-weight-bold "
                    style="font-size: 45px; text-align: center; color: white !important ; border-bottom: 1px solid white;">
                    Latest News
                </span>
            </div>

            <div class="row mt-3 gallery-first pb-5">

                <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-12 mt-4">

                    <div class="gallery-box1 bg-light">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner  inner">
                                <div class="carousel-item active    ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block  " alt="...">
                                </div>
                                <div class="carousel-item  item ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block w-100 h-100" alt="...">
                                </div>
                                <div class="carousel-item  item ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1.jpg"
                                        class="d-block w-100 h-100" alt="...">
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4 font-weight-bold ">श्री अग्रसेन कन्या पी.जी. कॉलेज में श्री राम अंतरिक्ष
                            वेधशाला उत्सव का आयोजन</h3>
                        <div class="btn  btn-outline-danger my-2 my-sm-0 justify-content-center"
                            style="margin-top: 50px !important;">Read More</div>

                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-12 mt-4">

                    <div class="gallery-box2 bg-light">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner  inner ">
                                <div class="carousel-item item active   ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block  " alt="...">
                                </div>
                                <div class="carousel-item item   ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block " alt="...">
                                </div>
                                <div class="carousel-item item   ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1.jpg" class="d-block "
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 font-weight-bold">श्री अग्रसेन कन्या पीo जी० कॉलेज, वाराणसी। परीक्षा संशोधित
                            समय-सारिणी सम्बन्धी सूचना</h3>

                        <div class="btn  btn-outline-danger my-2 my-sm-0 justify-content-center"
                            style="margin-top: 50px !important;">Read More</div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-12 mt-4">

                    <div class="gallery-box3 bg-light">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner  inner">
                                <div class="carousel-item  item active   ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block " alt="...">
                                </div>
                                <div class="carousel-item  item  ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1-1.jpg"
                                        class="d-block" alt="...">
                                </div>
                                <div class="carousel-item  item  ">
                                    <img src="https://shriakpgc.net/wp-content/uploads/2024/02/1.jpg"
                                        class="d-block w-100 h-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 font-weight-bold">परीक्षा आवेदन-पत्र सम्बन्धी सूचना</h3>

                        <div class="btn  btn-outline-danger my-2 my-sm-0 justify-content-center"
                            style="margin-top: 50px !important;">Read More</div>
                    </div>
                </div>

            </div>


        </div>
    </section>

    {{-- testimonials --}}


    <div class="container1 container-fluid bg-light  pb-5">
        <div class="logo text-center pt-4 pb-4"><span class="font-weight-bold"
                style="font-size: 40px; text-align: center; color: #f25c6a !important ;  border-bottom: 1px solid red;">
                TESTIMONIALS</span>
        </div>
        <div class="row ml-3 mt-3 ">

            @foreach ($testis as $testi)
                <div class="col-12 col-lg-3 col-md-3 col-sm-12  ">
                    <div class="card1 ">

                        <div class="slide slide1">

                            <div class="content">

                                <div class="icon">

                                    <i class="fa fa-user-circle" aria-hidden="true"></i>

                                </div>

                            </div>

                        </div>

                        <div class="slide slide2">

                            <div class="content">

                                <h3>

                                    {{ $testi->name }}

                                </h3>
                                <p>

                                    <i> {{ $testi->address }}</i>

                                </p>

                                <p>{{ $testi->msg }}</p>

                            </div>

                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>


    <!-- Map -->
    <section title="map">
        <div class="container-fluid mt-2 ">
            <div class="logo text-center"><span class="font-weight-bold"
                    style="font-size: 40px; color: {{ $infos->color }};  text-align: center ;  border-bottom: 1px solid red;">GET
                    DIRECTION</span>
            </div>
            <iframe class="mt-4" src="{{ $infos->map }}" width="100%" height="450" style="border:7;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    {{-- contact --}}

    <div class="container-fluid contact pt-5 pb-4  text-light" style="background-color: {{ $infos->color }};">
        <h1 class="text-center font-weight-bolder "> CONTACT </h1>
        <p class="text-opacity text-center text-opacity"><i>Query? Get In Touch!</i></p>

        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 mr-auto p-3 ">

                    <i class="fa-solid fa-location-dot m-2" style="width:30px"></i>{{ $infos->address }}<br>
                    <i class="fa fa-phone m-2" style="width:30px"></i> Phone Number: +91 {{ $infos->phone1 }}<br>
                    <i class="fa fa-phone m-2" style="width:30px"></i>Supportive Phone Number: +91
                    {{ $infos->phone2 }}<br>

                    <i class="fa fa-envelope m-2" style="width:30px"> </i> Email Address: {{ $infos->mail1 }}<br>
                    <i class="fa fa-envelope m-2" style="width:30px"> </i>Supportive Email Address:
                    {{ $infos->mail2 }}<br>


                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 p-3 ">

                    <form method="post" action="contact">
                        @csrf
                        <div class="form-group row ">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name">
                            </div>
                            <div class="col-sm-12  mt-3">
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row ml-0">
                            <textarea cols="72" rows="5" placeholder="Message" name="msg" style="border-radius:10px"></textarea>
                        </div>

                        <div class="form-group row ">
                            <div class="offset-sm-4 col-sm-5">
                                <button type="submit" class="text-light w-75"
                                    style="padding:10px; background-color:black; outline:none; border :none">Send</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <section>
        <div class="container-fluid  footer bg-dark mt- pb-5 pt-5">
            <div class="card footer-gallery text-left w-25 float-left mt-3 ">

                <div class="card-body text-center ">
                    <h4 class="card-title font-weight-bold ">Gallery</h4>
                    <p class="card-text">
                        <img src="https://shriakpgc.net/wp-content/uploads/2021/04/banner3-150x150.jpg"
                            height="150px">
                        <img src="https://shriakpgc.net/wp-content/uploads/2021/04/4-150x150.jpeg" height="150px">

                    </p>
                </div>
            </div>


            <div class=" social-media pt-4 pb-5">


                <div class="facebook social ">
                    <a href="https:/www.facebook.com"> <i class="fa-brands fa-facebook text-light"
                            data-toggle="tooltip" title="Facebook"></i></a>

                </div>
                <div class="insta social">
                    <a href="https:/www.instagram.com"> <i class="fa-brands fa-instagram text-light"
                            data-toggle="tooltip" title="instagram"></i></a>
                </div>
                <div class="twit social">
                    <a href="https:/www.twitter.com"> <i class="fa-brands fa-twitter text-light"
                            title="twitter"></i></a>
                </div>
                <div class="link social">
                    <a href="https:/www.linkedIn.com"><i class="fa-brands fa-linkedin text-light"
                            title="linkedin"></i></a>
                </div>
                <div class="yt social">
                    <a href="https:/www.youtube.com"><i class="fa-brands fa-youtube text-light"
                            title="youtube"></i></a>
                </div>


            </div>

            <div class="footer-copy mt-1">

                <h3 class="pl-5 ml-3">Affiliated to {{ $infos->affiliate }}</h3>
                <p> {{ $infos->since }}</p>
                <p>&copy; SchoolName, All Rights Reserved | Created By Company Name</p>
            </div>
        </div>
    </section>
    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
