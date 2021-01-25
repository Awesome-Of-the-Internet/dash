<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
    @livewireStyles
    @notifyCss
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive-fonts.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title> 
</head>

<body style="background: #f1f1f1">
    <x:notify-messages />
    <style type="text/css">
    .navbar-dark .navbar-nav .nav-link {
        color: #333;
    }

    #player * {
        direction: ltr !important;
    }

    .course {
        transition: all .2s ease-in-out;
        cursor: pointer;
    }

    .course:hover {
        border-color: #ff9800 !important;
    }

    .row {
        margin: 0px
    }

    a {
        text-decoration: none !important;
    }
    .navbar{
        background-color: #fff!important
    }
    .navbar .nav-link{
        color:#555;
        font-size: 16px
    }

    nav{
        box-shadow: 0px 0px 10px #ddd;
    }

    </style>
    <form method="POST" action="{{route('logout')}}" id="logout-form">@csrf</form>
    <div class="col-12 px-0" style=" ;position: relative;">
        <nav class="navbar navbar-expand-lg  bg-dark p-0" style="" id="main-nav">
            <div class="container">
                <a href="/">
                <img src="/images/logo2.png" class="logo" alt="images" style="padding: 7px;max-width: 164px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item mt-2 px-1">
                            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                        </li> --}}
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="/page">الدورات</a>
                        </li>
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="/page">المحاضرات التعليمية</a>
                        </li>
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="/page">شركاء النجاح</a>
                        </li>
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="/partners">منصة المحلل الفني الإحترافية</a>
                        </li>
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="/page">المدونة</a>
                        </li>
                        <li class="nav-item mt-2 px-1">
                            <a class="nav-link" href="#">قالوا عنا</a>
                        </li>
                        @if(!auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <div style="background: #03a7ee;width: 126px;text-align: center;border-radius: 73px;color: #ffffff;height: 44px;padding-top: 7px;box-shadow: 0px 0px 12px #03a7ee;" class="pb-2">
                                    سجل الآن
                                </div>
                            </a>
                        </li>
                        @else
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="box-shadow: unset!important">
                                <span class="fas fa-user font-4 p-2" style="width: 40px;height: 40px;background: #fff;border-radius: 50%; color: #2b5bbb"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item text-start d-flex" href="#">دوراتي</a></li>
                                @if(\Auth::user()->power=="ADMIN")
                                <li><a class="dropdown-item text-start d-flex" href="/admin">لوحة التحكم</a></li>
                                @else
                                <li><a class="dropdown-item text-start d-flex" href="/dashboard">لوحة التحكم</a></li>
                                @endif
                                <li><a class="dropdown-item text-start d-flex" href="#" onclick="document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
                            </ul>
                        </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
        @yield('content')
   
    <div class="col-12 px-3 py-3" style="background: #f7f7f7">
        <div class="col-12 footer-area  py-0 px-0 pb-0 " style=" border-top: 1px solid var(--bg-main-bg)">
            <div class="container  px-0">
                <div class="col-12 px-0  pt-4 row mt-md-3 pb-4">
                    <div class="col-12  col-md-6   pt-2 pt-4 px-0 p-md-2">
                        <div class="p-md-0 col-12 px-0 mt-4">
                            <div class="col-12 px-0">
                                <div class="col-12">
                                    <h5 class="" style="color: var(--bg-font-1);font-size: 1.10rem">تابعنا</h5>
                                    <ul style="display: block;padding: 0px;list-style: none;" class="mt-2 mb-2">
                                        <a href="#" class="d-inline-block p-1">
                                            <span class="fab fa-facebook-f d-inline-block " style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-font-6);color: #3b5998;cursor: pointer;border-radius: 50%!important"></span>
                                        </a>
                                        <a href="#" class="d-inline-block p-1">
                                            <span class="fab fa-twitter d-inline-block " style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-font-6);color: #00aced;cursor: pointer;border-radius: 50%!important"></span>
                                        </a>
                                        <a href="#" class="d-inline-block p-1">
                                            <span class="fab fa-youtube d-inline-block " style="width: 40px;height: 40px;padding: 11px 10px ;border:1px solid var(--bg-font-6);color: #FF0000;cursor: pointer;border-radius: 50%!important"></span>
                                        </a>
                                        <a href="#" class="d-inline-block p-1">
                                            <span class="fab fa-instagram d-inline-block " style="width: 40px;height: 40px;padding: 11px 12px ;border:1px solid var(--bg-font-6);color: var(--bg-font-4);cursor: pointer;border-radius: 50%!important"></span>
                                        </a>
                                        <a href="#" class="d-inline-block p-1">
                                            <span class="fab fa-telegram-plane d-inline-block " style="width: 40px;height: 40px;padding: 11px 12px ;border:1px solid var(--bg-font-6);color: #1e96c8;cursor: pointer;border-radius: 50%!important"></span>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6   py-1 row px-0 px-md-2">
                        <div class="col-md-6 px-0">
                            <div class="col-12 pt-2">
                                <h5 class="" style="color: var(--bg-font-1);font-size: 1.10rem">روابط</h5>
                                <ul style="display: block;padding: 0px;list-style: none;" class="col-12 mt-2 pt-2 ">
                                    <li><a href="/terms" style="color: var(--bg-font-4);font-size: 15px;" class="kufi py-1 d-inline-block">شروط الاستخدام </a></li>
                                    <li><a href="/privacy-policy" style="color: var(--bg-font-4);font-size: 15px;" class="kufi py-1 d-inline-block">سياسة الخصوصية</a></li>
                                    <li><a href="/support" style="color: var(--bg-font-4);font-size: 15px;" class="kufi py-1 d-inline-block">الدعم الفني</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="col-12 pt-2">
                                <h5 class="" style="color: var(--bg-font-1);font-size: 1.10rem">وسائل الدفع</h5>
                                <ul style="display: block;padding: 0px;list-style: none;" class="mt-3">
                                    <img src="https://i.pinimg.com/originals/54/e3/0e/54e30edf9d8e3f86b1935d5d3d1317d8.png" style="width: 100px;padding: 5px 0px;border-radius: 0px!important; max-width: 100%!important" alt="وسائل الدفع">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="col-12 " style="background: #f1f1f1">
        <div class="container" style="border-top: 1px solid var(--bg-main-bg);">
            <div class="col-12 row text-center">
                <div class="col-12  mt-1 mb-2 pt-3 pb-2 ">
                    <h6 style="color: #232323;font-size: 14px;line-height: 1" class="my-2 text-center">جميع الحقوق محفوظة © المتداول 2021 </h6>
                </div>
            </div>
        </div>
    </div>
    {{-- <h1 class="helvet">أهلاً بكم!</h1> --}}
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
    const player = new Plyr('#player');

    </script>
</body>
@livewireScripts
@notifyJs
</html>
