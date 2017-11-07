<!DOCTYPE html>
<html lang="zh-CN">

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hacker Space &mdash; 创客空间 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="创客空间" />
    <meta name="keywords" content="" />

    {{--分享网站 - 按钮--}}
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    {{--空间图标在这设置下--}}
    <link rel="shortcut icon" href="favicon.ico">
    {{--谷歌字体--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">--}}

    <!-- Animate.css -->
    <link rel="stylesheet" href={{asset("static/css/animate.css")}}>
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href={{asset("static/css/icomoon.css")}}>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href={{asset("static/css/bootstrap.min.css")}}>
    <!-- Flexslider  -->
    <link rel="stylesheet" href={{asset("static/css/flexslider.css")}}>
    <!-- Theme style  -->
    <link rel="stylesheet" href={{asset("static/css/style.css")}}>


    {{--jquery2.1.4--}}
    {{--<script src={{asset("static/js/jquery.min.js")}}></script>--}}
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src={{asset("static/js/respond.min.js")}}></script>
    <![endif]-->
</head>
<body>
<div id="fh5co-page">
    {{--小屏幕设备的菜单弹出--}}
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    {{--侧边栏 start--}}
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">
        <h1 id="fh5co-logo"><a href={{url('/')}}>Hacker Space</a></h1>
        <nav id="fh5co-main-menu" role="navigation">
            <ul>
                {{--菜单项在navigation_bar.blade.php中修改--}}
                @include("commond.navigation_bar")
            </ul>
        </nav>
        {{--侧边栏页脚--}}
        <div class="fh5co-footer">
            {{--学校图标--}}
            <a href="http://www.hnist.cn/"><img src="{{url("static/images/logo.png")}}" width="60" height="60" border="0" alt="学校官网" title="学校官网"></a>
            <p></p>
            <p><small><span> &copy; 2017 xxx.com All Rights Reserved.</span></small></p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
        </div>
    </aside>
    {{--侧边栏 end--}}
    <div id="fh5co-main">
        @section("Content")
        Content
        @show
    </div>
</div>

<!-- Modernizr JS -->
<script src={{asset("static/js/modernizr-2.6.2.min.js")}}></script>
<!-- jQuery -->
{{--<script src="{{asset("static/js/jquery.min.js")}}"></script>--}}
<script src="{{asset("static/js/jquery-3.2.1.min.js")}}"></script>
<!-- jQuery Easing -->
<script src="{{asset("static/js/jquery.easing.1.3.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("static/js/bootstrap.min.js")}}"></script>
<!-- Waypoints -->
<script src="{{asset("static/js/jquery.waypoints.min.js")}}"></script>
<!-- Flexslider -->
<script src="{{asset("static/js/jquery.flexslider-min.js")}}"></script>

<!-- MAIN JS -->
<script src="{{asset("static/js/main.js")}}"></script>

</body>
</html>