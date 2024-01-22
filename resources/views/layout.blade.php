<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','珂莎英语 - KE SA English')</title>
    <meta name="description" content="珂莎英语 - KE SA English" />
    <meta name="keywords" content="珂莎英语 - KE SA English" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fullpage.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/course.css"> -->
    <link rel="stylesheet" href="css/course-new-2020715.css">
    <!-- <script src="js/sensorshead.js"></script> -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    @yield('head')
</head>
<body>
<div id="header">
    <!-- 顶部导航 -->
    <nav class="navbar navbar-default fixed-top ele-top" role="navigation" id="topNav">
        <div class="container-fluid">
            <div class="row">
                <div class="nav-wrap">
                    <div class="navkuang flex">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-collapse">
                            <ul class="nav navbar-nav flex navColor2">
                                <li><a href="/"><i class="home-ico"></i>首页</a></li>
                               
                                <li><a href="/learning"><i class="learn-ico"></i>学习体系</a></li>
                                <li><a href="/plans"><i class="plans-ico"></i>套餐体系</a></li>
                                <li><a href="/tutor"><i class="tutors-ico"></i>外教师资</a></li>
                                <li><a href="/about"><i class=""></i>关于我们</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </nav>



</div>
@yield('body')
<div id="footer" class="footer"></div>
<script src="js/bootstrap.min.js"></script>
@yield('foot')
</body>
</html>
