<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Statics/Home/img/asset-favicon.ico">

    <title>爱游网-首页</title>


    <link rel="stylesheet" href="/Statics/Lib/normalize-css/normalize.css" />
    <link rel="stylesheet" href="/Statics/Lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/Statics/Lib/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/Statics/Lib/cityselect/cityselect.css" />
    <link rel="stylesheet" href="/Statics/Lib/jquery.autocomplete/jquery.autocomplete.css" />
    <link rel="stylesheet" href="/Statics/Home/css/page-travel-index.css" />
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-content">


            <!-- 页面头部 -->
            <!--顶部导航-->
            <div class="topNavWrapper">
                <div class="container">
                    <nav class="navbar">
                        <div class="navbar-left">您好，欢迎访问爱游网！请<a href="travel-login.html" target="_blank">登录</a>　<a href="travel-signup-step1.html" target="_blank">注册</a></div>
                        <div class="navbar-right"><a href="travel-help.html" target="_blank">帮助中心</a> <a href="travel-feedback.html" target="_blank">意见反馈</a></div>
                    </nav>
                </div>
            </div>
            <!--头部导航-->
            <header>

                <div class="headerWrapper">
                    <div class="container">
                        <a href="#"><img src="/Statics/Home/img/widget-aylogo.png" width="200px" /></a>
                        <span class="tel"><span class="glyphicon glyphicon-earphone"></span>010-66668888</span>
                    </div>
                </div>
                <div class="menuNavWrapper">
                    <div class="container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="travel-index.html" target="_blank">首页</a></li>
                            <li><a href="#">国内游</a></li>
                            <li><a href="#">周边游</a></li>
                            <li><a href="#">境外游</a></li>
                            <li><a href="travel-notes-index.html" target="_blank">旅游攻略</a></li>
                        </ul>
                    </div>
                </div>

            </header>



            <div class="travel-index">
                <div class="container">
                    <div class="maincontent">
                        <!-- 搜索区域 -->
                        <!--城市选择-->
                        <div class="locations">
                            <input type="text" class="cityinput" id="citySelect" placeholder="北京市">
                            <span class="glyphicon glyphicon-map-marker city-icon"></span>
                            <span class="city-span">出发</span>
                            <span class="glyphicon glyphicon-menu-down arrow-down"></span>
                        </div>
                        <!--搜索区域-->
                        <div class="travel-search">
                            <div class="main-search">
                                <div class="dropdown-choose">
                                    <div id="dropdown">
                                        <div class="choosed">周边游</div>
                                        <span class="glyphicon glyphicon-menu-down arrow-down"></span>
                                        <ul class="list-unstyled">
                                            <li><a href="#" rel="1">周边游</a></li>
                                            <li><a href="#" rel="1">境外游</a></li>
                                            <li><a href="#" rel="1">国内游</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search-area">
                                    <input type="text" class="input-search" id="autocomplete" placeholder="请输入目的地和产品编号">
                                    <a class="search-btn" href="#">搜索</a>
                                </div>
                            </div>
                            <div class="hot-words">
                                <span>热门城市：</span><a href="#">北京</a><a href="#">上海</a><a href="#">南京</a><a href="#">贵州</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- 调用内容组件 -->
                        <div class="navintro">
                            <!--左侧列表导航-->
                            <div class="travel-index-nav">
                                <div class="citylistbox">
                                    <div class="listbox">
                                        <div class="list">
                                            <img src="/Statics/Home/img/widget-icon0.png" class="icon">
                                            <dl>
                                                <dt>国内游</dt>
                                                <dd>
                                                    <a href="travel-list.html" target="_blank">香港</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">北京</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="box">周边游</div>

                                    </div>

                                    <div class="listbox">
                                        <div class="list">
                                            <img src="/Statics/Home/img/widget-icon0.png" class="icon">
                                            <dl>
                                                <dt>国内游</dt>
                                                <dd>
                                                    <a href="travel-list.html" target="_blank">北京</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">北京</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="box">国内游</div>
                                    </div>
                                    <div class="listbox">
                                        <div class="list">
                                            <img src="/Statics/Home/img/widget-icon0.png" class="icon">
                                            <dl>
                                                <dt>境外游</dt>
                                                <dd>
                                                    <a href="travel-list.html" target="_blank">北京</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">北京</a><a href="travel-list.html" target="_blank">承德</a><a href="travel-list.html" target="_blank">承德</a>
                                                    <a href="travel-list.html" target="_blank">廊坊</a><a href="travel-list.html" target="_blank">保定</a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="box">境外游</div>
                                    </div>

                                </div>
                            </div>
                            <!--banner区-->
                            <div class="travel-index-imgroll">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="/Statics/Home/img/asset-banner01.jpg" alt="出国游">
                                        </div>
                                        <div class="item">
                                            <img src="/Statics/Home/img/asset-banner02.jpg" alt="出国游">
                                        </div>
                                        <div class="item">
                                            <img src="/Statics/Home/img/asset-banner03.jpg" alt="出国游">
                                        </div>
                                        <div class="item">
                                            <img src="/Statics/Home/img/asset-banner04.jpg" alt="出国游">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
                                </div>
                            </div>
                        </div>
                        <div class="recommend">
                            <!--推荐区一-->


                            <div class="recommend1">
                                <h4 class="title-nobg"><span>爱游推荐</span></h4>
                                <div class="prolist">
                                    <ul>


                                        <li class="proline">
                                            <a href="travel-info.html" target="_blank">
                                                <div class="proline-img"><img src="/Statics/Home/img/asset-product01.jpg" class="img-responsive" /></div>
                                                <div class="proline-text">
                                                    <div class="destination">【爱游推荐】丽江+大理+洱海双飞6日自由行</div>
                                                    <div class="price"><i>￥4399</i>起<em>北京出发</em></div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="proline">
                                            <a href="travel-info.html" target="_blank">
                                                <div class="proline-img"><img src="/Statics/Home/img/asset-product02.jpg" class="img-responsive" /></div>
                                                <div class="proline-text">
                                                    <div class="destination">【爱游推荐】日本东京+箱根+京都+大阪5晚6日优质游</div>
                                                    <div class="price"><i>￥1400</i>起<em>南京出发</em></div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="proline">
                                            <a href="travel-info.html" target="_blank">
                                                <div class="proline-img"><img src="/Statics/Home/img/asset-product03.jpg" class="img-responsive" /></div>
                                                <div class="proline-text">
                                                    <div class="destination">【爱游推荐】丽江+大理+洱海双飞6日自由行</div>
                                                    <div class="price"><i>￥3700</i>起<em>北京出发</em></div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="proline">
                                            <a href="travel-info.html" target="_blank">
                                                <div class="proline-img"><img src="/Statics/Home/img/asset-product04.jpg" class="img-responsive" /></div>
                                                <div class="proline-text">
                                                    <div class="destination">【爱游推荐】台湾7晚8日游</div>
                                                    <div class="price"><i>￥2019</i>起<em>北京出发</em></div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="proline">
                                            <a href="travel-info.html" target="_blank">
                                                <div class="proline-img"><img src="/Statics/Home/img/asset-product05.jpg" class="img-responsive" /></div>
                                                <div class="proline-text">
                                                    <div class="destination">【爱游推荐】日本东京+箱根+京都+大阪5晚6日优质游</div>
                                                    <div class="price"><i>￥2089</i>起<em>北京出发</em></div>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>


                            <!--推荐区二-->

                            <div class="recommend2">
                                <div class="recommend-left">
                                    <h4 class="title-bg"><span>周边游</span></h4>
                                    <div class="recommend-detail">
                                        <div class="title">常用目的地</div>
                                        <div class="points">
                                            <ul class="list-unstyled">
                                                <li><a href="#">古北水镇</a></li>
                                                <li><a href="#">故宫</a></li>
                                                <li><a href="#">八达岭长城</a></li>
                                                <li><a href="#">颐和园</a></li>
                                                <li><a href="#">北京欢乐谷</a></li>
                                                <li><a href="#">北京野鸭湖国家湿地公园</a></li>

                                            </ul>
                                        </div>
                                        <div class="title">短线玩法</div>
                                        <div class="points">
                                            <ul class="list-unstyled">
                                                <li><a href="#">天安门+故宫</a></li>
                                                <li><a href="#">颐和园+圆明园</a></li>
                                                <li><a href="#">玉渊潭公园</a></li>
                                                <li><a href="#">颐和园</a></li>
                                                <li><a href="#">北京欢乐谷</a></li>
                                                <li><a href="#">北京野鸭湖国家湿地公园</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="recommend-right">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">推荐</a><em class="arrow"><i></i></em></li>
                                        <li role="presentation"><a href="#tab-a" aria-controls="tab-a" role="tab" data-toggle="tab">北京</a><em class="arrow"><i></i></em></li>
                                        <li role="presentation"><a href="#tab-b" aria-controls="tab-b" role="tab" data-toggle="tab">上海</a><em class="arrow"><i></i></em></li>
                                        <li role="presentation"><a href="#tab-c" aria-controls="tab-c" role="tab" data-toggle="tab">武汉</a><em class="arrow"><i></i></em></li>
                                        <li role="presentation"><a href="#tab-d" aria-controls="tab-d" role="tab" data-toggle="tab">杭州</a><em class="arrow"><i></i></em></li>
                                        <li role="presentation"><a href="#tab-e" aria-controls="tab-e" role="tab" data-toggle="tab">西安</a><em class="arrow"><i></i></em></li>

                                    </ul>
                                    <a class="pull-right more" href="#">更多周边游线路>></a>

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="prolist">
                                                <ul>

                                                    <li class="proline">
                                                        <a href="travel-info.html" target="_blank">
                                                            <div class="proline-img"><img src="/Statics/Home/img/asset-product01.jpg" class="img-responsive" /></div>
                                                            <div class="proline-text">
                                                                <div class="destination">【爱游推荐】丽江+大理+洱海双飞6日自由行</div>
                                                                <div class="price"><i>￥4399</i>起<em>北京出发</em></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="proline">
                                                        <a href="travel-info.html" target="_blank">
                                                            <div class="proline-img"><img src="/Statics/Home/img/asset-product02.jpg" class="img-responsive" /></div>
                                                            <div class="proline-text">
                                                                <div class="destination">【爱游推荐】日本东京+箱根+京都+大阪5晚6日优质游</div>
                                                                <div class="price"><i>￥1400</i>起<em>南京出发</em></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="proline">
                                                        <a href="travel-info.html" target="_blank">
                                                            <div class="proline-img"><img src="/Statics/Home/img/asset-product03.jpg" class="img-responsive" /></div>
                                                            <div class="proline-text">
                                                                <div class="destination">【爱游推荐】丽江+大理+洱海双飞6日自由行</div>
                                                                <div class="price"><i>￥3700</i>起<em>北京出发</em></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="proline">
                                                        <a href="travel-info.html" target="_blank">
                                                            <div class="proline-img"><img src="/Statics/Home/img/asset-product04.jpg" class="img-responsive" /></div>
                                                            <div class="proline-text">
                                                                <div class="destination">【爱游推荐】台湾7晚8日游</div>
                                                                <div class="price"><i>￥2019</i>起<em>北京出发</em></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="proline">
                                                        <a href="travel-info.html" target="_blank">
                                                            <div class="proline-img"><img src="/Statics/Home/img/asset-product05.jpg" class="img-responsive" /></div>
                                                            <div class="proline-text">
                                                                <div class="destination">【爱游推荐】日本东京+箱根+京都+大阪5晚6日优质游</div>
                                                                <div class="price"><i>￥2089</i>起<em>北京出发</em></div>
                                                            </div>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab-a">北京</div>
                                        <div role="tabpanel" class="tab-pane" id="tab-b">上海</div>
                                        <div role="tabpanel" class="tab-pane" id="tab-c">武汉</div>
                                        <div role="tabpanel" class="tab-pane" id="tab-d">杭州.</div>
                                        <div role="tabpanel" class="tab-pane" id="tab-e">西安</div>
                                    </div>

                                </div>
                            </div>

                            <!--推荐区三-->
                            <div class="recommend3">
                                <h4 class="title-nobg"><span>旅游攻略</span></h4>
                                <div class="prolist">
                                    <figure class="effect-jazz">
                                        <img src="/Statics/Home/img/widget-gl1.jpg" alt="旅游一" />
                                        <figcaption>
                                            <h3>悉尼</h3>
                                            <p>感受阳关之都</p>
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-jazz">
                                        <img src="/Statics/Home/img/widget-gl02.jpg" alt="旅游一" />
                                        <figcaption>
                                            <h3>澳洲</h3>
                                            <p>考拉的故乡</p>
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-jazz">
                                        <img src="/Statics/Home/img/widget-gl03.jpg" alt="旅游一" />
                                        <figcaption>
                                            <h3>夏威夷</h3>
                                            <p>吸收阳光精华</p>
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-jazz">
                                        <img src="/Statics/Home/img/widget-gl02.jpg" alt="旅游一" />
                                        <figcaption>
                                            <h3>澳洲</h3>
                                            <p>考拉的故乡</p>
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-jazz">
                                        <img src="/Statics/Home/img/widget-gl1.jpg" alt="旅游一" />
                                        <figcaption>
                                            <h3>悉尼</h3>
                                            <p>感受阳关之都</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
    </div>
    <!-- 页面底部 -->
    <!--底部版权-->
    <footer>
        <div class="foot-box">
            <div class="container ">
                <dl>
                    <dt>关于爱游</dt>
                    <dd>爱游介绍</dd>
                    <dd>网站地图</dd>
                </dl>
                <dl>
                    <dt>联系我们</dt>
                    <dd>意见反馈</dd>
                    <dd>在线客服</dd>
                    <dd>微博：爱游网</dd>
                    <dd>微信公号（二维码）</dd>
                </dl>
                <dl>
                    <dt>网站条款</dt>
                    <dd>会员条款</dd>
                    <dd>网站声明</dd>
                    <dd>免责声明</dd>
                </dl>
                <dl>
                    <dt>帮助中心</dt>
                    <dd>新手上路</dd>
                    <dd>使用帮助</dd>
                </dl>
                <dl>
                    <dt><img src="/Statics/Home/img/widget-wx_cz.jpg" /></dt>
                    <dd>Andirod客户端</dd>
                </dl>
                <dl>
                    <dt><img src="/Statics/Home/img/widget-wx_cz.jpg" /></dt>
                    <dd>IOS客户端</dd>
                </dl>
            </div>

            <div class="container">
                <hr>
                <p class="text-center">Copyright ©️2017 www.aiyou.com 北京爱游国际旅行社版权所有 电话：010-66668888 京ICP备 170012号</p>
            </div>
        </div>
    </footer>
    <!--侧边栏-->
    <div class="sidebar">
        <div class="slider-top">
            <ul class="list-unstyled sidenavbars">
                <li>
                    <a href="travel-personal-homedata.html" target="_blank">
                    <span class="icon"><i class="glyphicon glyphicon-user"></i></span>
                    <div class="hidetext">
                        <a href="#">我的爱游</a>
        </div>
        </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <span class="icon"><i class="glyphicon glyphicon-heart"></i></span>
                <div class="hidetext">
                    <a href="#">我的收藏</a>
    </div>
    </a>
    </li>
    <li>
        <a href="travel-feedback.html" target="_blank">
                 <span class="icon"><i class="glyphicon glyphicon-edit"></i></span>
                 <div class="hidetext">
                    <a href="#">意见反馈</a>
        </div>
        </a>
    </li>
    </ul>
    </div>
    <div class="slider-bottom">
        <ul class="list-unstyled">
            <li class="cd-top"><i class="glyphicon glyphicon-plane gotop"></i></li>
        </ul>
    </div>
    </div>
    <!-- 页面 css js -->

    <script type="text/javascript" src="/Statics/Lib/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="/Statics/Lib/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Statics/Lib/cityselect/cityselect.js"></script>
    <script type="text/javascript" src="/Statics/Lib/jquery.autocomplete/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="../js/widget-travel-index-nav.js"></script>
    <script>
        $(function() {
            $(".sidebar li").hover(
                function() {
                    $(this).addClass("active");
                    $(this).children(".hidetext").show();
                },
                function() {
                    $(this).removeClass("active");
                    $(this).children(".hidetext").hide();
                })
        })

        var offset = 300,
            offset_opacity = 1200,
            scroll_top_duration = 700,
            $back_to_top = $('.cd-top');

        $(window).scroll(function() {
            ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('cd-fade-out');
            }
        });
        $back_to_top.on('click', function(event) {
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration);
        });
    </script>
    <script src="../js/page-travel-index.js"></script>
</body>