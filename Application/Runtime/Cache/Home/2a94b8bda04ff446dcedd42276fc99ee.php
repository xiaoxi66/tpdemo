<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Statics/Home/img/asset-favicon.ico">
    <title>爱游网</title>
    <link rel="stylesheet" href="/Statics/Lib/normalize-css/normalize.css" />
    <link rel="stylesheet" href="/Statics/Lib/bootstrap/dist/css/bootstrap.css" />
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
        }

        body {
            overflow: hidden
        }

        .nav a {
            color: #000;
            padding: 0 5px !important;
        }

        .nav li {
            border-bottom: dashed 1px #fff;
            margin: 0 15px;
            line-height: 30px;
        }

        .nav div i {
            display: inline-block;
            border-bottom: solid 1px #fff;
            width: 100%;
            cursor: pointer;
            line-height: 40px;
            padding-left: 10px;
            margin-top: 10px;
            font-size: 16px;
        }

        .nav div i:before {
            font-size: 12px;
            position: relative;
            top: 0px;
            left: -3px;
        }

        .active a {
            color: #f00;
        }

        .title {
            color: #fff;
            background: #bebebe;
            font-size: 28px;
            line-height: 50px;
        }

        .row-left,
        .row-rit {
            height: 100%;
            float: left;
            position: relative;
        }

        .row-left {
            background: #efefef;
            padding: 0px;
            border-right: solid 2px #999;
            overflow: auto;
            width: 200px;
            position: relative;
        }

        .left-show {
            background: #999;
            color: #fff;
            top: 50%;
            left: 200px;
            z-index: 999;
            position: absolute;
            width: 10px;
            height: 60px;
            border-radius: 0px 5px 5px 0px;
        }

        .left-show:before {
            font-size: 12px;
            position: relative;
            top: 20px;
            left: -2px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- 页面头部 -->

    <div class="left-show glyphicon glyphicon-step-backward"></div>
    <div class="row-left">
        <div class="title text-center">爱游网</div>

        <div class='nav'>

            <div><i class="glyphicon glyphicon-collapse-down">主要页面</i>


                <li><a href="<?php echo U('travelIndex');?>" target="right">首页</a></li>



                <li><a href="./travel-list.html" target="right">列表页</a></li>



                <li><a href="./travel-info.html" target="right">详情页</a></li>



                <li><a href="./travel-preorder.html" target="right">预定页</a></li>



                <li><a href="./travel-pay.html" target="right">支付页</a></li>



                <li><a href="./travel-help.html" target="right">帮助中心</a></li>



                <li><a href="./travel-feedback.html" target="right">意见反馈</a></li>


            </div>

            <div><i class="glyphicon glyphicon-collapse-down">个人中心</i>


                <li><a href="./travel-personal-homedata.html" target="right">个人资料</a></li>



                <li><a href="./travel-personal-homephonechange1.html" target="right">修改手机号码-第一步</a></li>



                <li><a href="./travel-personal-homephonechange2.html" target="right">修改手机号码-第二步</a></li>



                <li><a href="./travel-personal-homecontacts.html" target="right">常用联系人</a></li>



                <li><a href="./travel-personal-homepassword.html" target="right">修改密码</a></li>



                <li><a href="./travel-personal-ordermanage.html" target="right">订单管理</a></li>



                <li><a href="./travel-personal-orderdetail.html" target="right">订单详情</a></li>



                <li><a href="./travel-personal-collectmanage.html" target="right">收藏管理</a></li>



                <li><a href="./travel-personal-notemanage.html" target="right">游记管理</a></li>



                <li><a href="./travel-personal-noterelease.html" target="right">游记发布</a></li>



                <li><a href="./travel-personal-notecollect.html" target="right">游记收藏</a></li>


            </div>

            <div><i class="glyphicon glyphicon-collapse-down">旅游攻略页面</i>


                <li><a href="./travel-notes-index.html" target="right">游记-首页</a></li>



                <li><a href="./travel-notes-list.html" target="right">游记-列表</a></li>



                <li><a href="./travel-notes-info.html" target="right">游记-详情</a></li>



                <li><a href="./travel-note-authorindex.html" target="right">游记-作者首页</a></li>


            </div>

            <div><i class="glyphicon glyphicon-collapse-down">登录注册</i>


                <li><a href="./travel-login.html" target="right">登录</a></li>



                <li><a href="./travel-signup-step1.html" target="right">注册1</a></li>



                <li><a href="./travel-signup-step2.html" target="right">注册2</a></li>



                <li><a href="./travel-signup-step3.html" target="right">注册3</a></li>



                <li><a href="./travel-forget-step1.html" target="right">忘记密码1</a></li>



                <li><a href="./travel-forget-step2.html" target="right">忘记密码2</a></li>



                <li><a href="./travel-forget-step3.html" target="right">忘记密码3</a></li>


            </div>

        </div>
    </div>
    <div class="row-rit">
        <iframe name="right" id="iframepage" src="<?php echo U('travelIndex');?>" width="100%" height="100%" frameborder="0" ranat="server"></iframe>
    </div>
    <script type="text/javascript" src="/Statics/Lib/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="/Statics/Lib/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $('.nav li:first').addClass('active')
        $('.nav div i').click(function() {
            if ($(this).hasClass("glyphicon-collapse-down")) {
                $(this).removeClass('glyphicon-collapse-down').addClass('glyphicon-expand');
                $(this).parent().find('li').hide();
            } else {
                $(this).removeClass('glyphicon-expand').addClass('glyphicon-collapse-down');
                $(this).parent().find('li').show();
            }
        });
        $('.nav li').click(function() {
            $('.nav li').removeClass('active')
            $(this).addClass('active');
        });


        $(function() {
            var wd = 200;
            $(".row-rit").css('width', $('body').width() - wd + 'px');
            $(".left-show").click(function() {
                if ($(this).hasClass('glyphicon-step-backward')) {
                    $(this).removeClass('glyphicon-step-backward').addClass('glyphicon-step-forward').css("left", '0');
                    $(".row-left").hide();
                    $(".row-rit").css('width', $('body').width() + 'px');
                } else {
                    $(this).removeClass('glyphicon-step-forward').addClass('glyphicon-step-backward').css("left", wd + 'px');
                    $(".row-left").show();
                    $(".row-rit").css('width', $('body').width() - wd + 'px');
                }
            })
        })



        window.onresize = function() {
            // document.getElementById('iframepage').contentWindow.location.reload(true);
            //  document.frames("#iframepage").document.location = "./travel-index.html";
            location.reload(); //修改因缩小浏览器导致页面消失

        }
    </script>
</body>