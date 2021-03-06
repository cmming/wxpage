<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style lang="css">
        #showPage {
            width: 375px;
            height: 667px;
            border: 1px solid black;
            border-sizing: border-box;
            margin: 0 auto;
        }
        
        .ani {
            width: 40px;
            height: 40px;
            border: 1px solid #fff;
        }
        
        .choseItem {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="form-horizontal container-fluid">
        
        <div class="row">
            <div class="col-xs-2">
                <div class="row" style='height:50vh;overflow-y:scroll;'>
                    <div class="col-xs-12" id = 'imgListContent'>
                        <div class="imgList"></div>
                        <!--存放所有的图片列表-->
                        <!--<img  style = 'height:200px;width:100%' class="img-thumbnail" src="./images/1.jpg" alt="">
                        <div class="caption" style="background-color:#fff;">
                            <p style = "text-align:center">./images/1.jpg</p>
                        </div>-->

                        <button class="btn btn-success" id='getMoreImg' data-page='1'>加载更多</button>
                    </div>
                </div>
                <div class="row" style='height:50vh;overflow-y:scroll;margin-top:20px;border:1px solid #dfdfdf'>
                    <div class="col-xs-12">
                        上传
                        <p><input type="file" id="upfile"></p>
                        <p id="progressNum"></p>
                        <img id = 'pevImg' src="" alt="" width="100px" height="100px">
                        <p><input type="button" id="upJQuery" value="上传"></p>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-3">
                <div id="showPage">
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <meta charset="utf-8" />
                        <meta name="renderer" content="webkit" />
                        <title>VRwedding</title>

                        <link rel="stylesheet" href="./css/swiper.min.css">
                        <link rel="stylesheet" href="./css/animate.min.css">
                        <link rel="stylesheet" href="./css/index.css">
                        <style>
                            .main {
                                max-width: 750px;
                                margin: 0 auto;
                            }
                            
                            .ani img {
                                width: 100%;
                                height: 100%;
                                vertical-align: bottom;
                            }
                            #array{
                                width:5%;height:5%; bottom:5%; left:45%;
                            }
                        </style>
                    </head>

                    <body>
                        <div class="swiper-container main">
                            <div class="swiper-wrapper">
                                <section class="swiper-slide swiper-slide1  page1">
                                </section>
                            </div>
                            <img src="images/arrow.png"  id="array" class="resize">
                        </div>
                        <script src="./js/swiper.min.js"></script>
                        <script src="./js/swiper.animate.min.js"></script>
                        <script src="./js/mobile-util.js"></script>
                        <script>
                            function reAnimate(isLoop) {
                                return mySwiper = new Swiper(".swiper-container", {
                                    direction: "vertical",
                                    loop: isLoop,
                                    // virtualTranslate : true,
                                    mousewheelControl: true,
                                    onInit: function (swiper) {
                                        swiperAnimateCache(swiper);
                                        swiperAnimate(swiper);
                                    },
                                    onSlideChangeEnd: function (swiper) {
                                        swiperAnimate(swiper);
                                    },
                                    onTransitionEnd: function (swiper) {
                                        swiperAnimate(swiper);
                                    },


                                    watchSlidesProgress: true,

                                    onProgress: function (swiper) {
                                        for (var i = 0; i < swiper.slides.length; i++) {
                                            var slide = swiper.slides[i];
                                            var progress = slide.progress;
                                            var translate = progress * swiper.height / 4;
                                            scale = 1 - Math.min(Math.abs(progress * 0.5), 1);
                                            var opacity = 1 - Math.min(Math.abs(progress / 2), 0.5);
                                            slide.style.opacity = opacity;
                                            es = slide.style;
                                            es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform =
                                                "translate3d(0," + translate + "px,-" + translate + "px) scaleY(" + scale + ")";
                                        }
                                    },

                                    onSetTransition: function (swiper, speed) {
                                        for (var i = 0; i < swiper.slides.length; i++) {
                                            es = swiper.slides[i].style;
                                            es.webkitTransitionDuration = es.MsTransitionDuration = es.msTransitionDuration = es.MozTransitionDuration =
                                                es.OTransitionDuration = es.transitionDuration = speed + "ms";
                                        }
                                    },
                                });
                            }
                            window.onload = function () {
                                reAnimate(false);
                            }
                            var eventHandle = function (obj, type, fn) {
                                if (obj.addEventListener) {
                                    obj.addEventListener(type, fn, false)
                                } else if (obj.attachEvent) {
                                    obj.attachEvent('on' + type, fn)
                                }
                            };
                        </script>
                    </body>

                    </html>

                </div>
            </div>

            <div class="col-xs-7">
                <div class="form-group">
                    <label  class="col-sm-3 control-label">
                        当前页数：<span id="pageNum">1</span>
                    </label>
                    <div class="col-sm-3">
                        <button id="addPage" class="btn btn-primary">添加一页</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">
                        为
                        <select name="chosePage" class="chosePage" id="chosePage">
                            <option value="1">1</option>
                        </select>页:
                    </label>
                    <div class="col-sm-4">
                        <input type="text" name="pageBg" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <button id="addPageBg" class="btn btn-primary">设置背景</button>
                    </div>
                </div>
                <!--添加元素-->
                <div class="form-group">
                    <label  class="col-sm-3 control-label">
                    为
                        <select name="chosePage" class="chosePage" id="choseElemPage">
                            <option value="1">1</option>
                        </select> 页:
                    </label>
                    <div class="col-sm-3">
                        <button id="addElem" class="btn btn-primary">添加一个元素</button>
                    </div>
                </div>
                <!--设置元素-->
                <div class="form-group">
                    <div class="row">
                        <label  class="col-sm-3 control-label">
                        选中一个元素
                        </label>
                        <div class="col-sm-2">
                            宽(单位1/16)：
                            <input type="text" name="elemWidth" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            高(百分比)：
                            <input type="text" name="elemHeight" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-2">
                            离左边的距离(百分比)：
                            <input type="text" name="elemLeft" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            离上边的距离(百分比)：
                            <input type="text" name="elemTop" class="form-control">
                        </div>
                    </div>
                    
                    <!--<div class="col-sm-2">
                        文字：
                        <input type="text" name="font_content" class="form-control">
                    </div>
                    <div class="col-sm-offset-2 col-sm-2">
                        文字大小：
                        <input type="text" name="font_size" class="form-control">
                    </div>-->
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-2">
                            跳转路径：
                            <input type="text" name="elemHref" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            元素图片：
                            <input type="text" name="elemImg" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-2">
                            动画种类:
                            <input type="text" name="animate_effect" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            出现延迟时间:
                            <input type="text" name="animate_delay" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            动画整个时间:
                            <input type="text" name="animate_duration" class="form-control">
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button id="settingElem" class="btn btn-success">设置元素属性</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <select class="input input--dropdown js--animations">
                            <optgroup label="Attention Seekers">
                            <option value="bounce">bounce</option>
                            <option value="flash">flash</option>
                            <option value="pulse">pulse</option>
                            <option value="rubberBand">rubberBand</option>
                            <option value="shake">shake</option>
                            <option value="swing">swing</option>
                            <option value="tada">tada</option>
                            <option value="wobble">wobble</option>
                            <option value="jello">jello</option>
                            </optgroup>

                            <optgroup label="Bouncing Entrances">
                            <option value="bounceIn">bounceIn</option>
                            <option value="bounceInDown">bounceInDown</option>
                            <option value="bounceInLeft">bounceInLeft</option>
                            <option value="bounceInRight">bounceInRight</option>
                            <option value="bounceInUp">bounceInUp</option>
                            </optgroup>

                            <optgroup label="Bouncing Exits">
                            <option value="bounceOut">bounceOut</option>
                            <option value="bounceOutDown">bounceOutDown</option>
                            <option value="bounceOutLeft">bounceOutLeft</option>
                            <option value="bounceOutRight">bounceOutRight</option>
                            <option value="bounceOutUp">bounceOutUp</option>
                            </optgroup>

                            <optgroup label="Fading Entrances">
                            <option value="fadeIn">fadeIn</option>
                            <option value="fadeInDown">fadeInDown</option>
                            <option value="fadeInDownBig">fadeInDownBig</option>
                            <option value="fadeInLeft">fadeInLeft</option>
                            <option value="fadeInLeftBig">fadeInLeftBig</option>
                            <option value="fadeInRight">fadeInRight</option>
                            <option value="fadeInRightBig">fadeInRightBig</option>
                            <option value="fadeInUp">fadeInUp</option>
                            <option value="fadeInUpBig">fadeInUpBig</option>
                            </optgroup>

                            <optgroup label="Fading Exits">
                            <option value="fadeOut">fadeOut</option>
                            <option value="fadeOutDown">fadeOutDown</option>
                            <option value="fadeOutDownBig">fadeOutDownBig</option>
                            <option value="fadeOutLeft">fadeOutLeft</option>
                            <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                            <option value="fadeOutRight">fadeOutRight</option>
                            <option value="fadeOutRightBig">fadeOutRightBig</option>
                            <option value="fadeOutUp">fadeOutUp</option>
                            <option value="fadeOutUpBig">fadeOutUpBig</option>
                            </optgroup>

                            <optgroup label="Flippers">
                            <option value="flip">flip</option>
                            <option value="flipInX">flipInX</option>
                            <option value="flipInY">flipInY</option>
                            <option value="flipOutX">flipOutX</option>
                            <option value="flipOutY">flipOutY</option>
                            </optgroup>

                            <optgroup label="Lightspeed">
                            <option value="lightSpeedIn">lightSpeedIn</option>
                            <option value="lightSpeedOut">lightSpeedOut</option>
                            </optgroup>

                            <optgroup label="Rotating Entrances">
                            <option value="rotateIn">rotateIn</option>
                            <option value="rotateInDownLeft">rotateInDownLeft</option>
                            <option value="rotateInDownRight">rotateInDownRight</option>
                            <option value="rotateInUpLeft">rotateInUpLeft</option>
                            <option value="rotateInUpRight">rotateInUpRight</option>
                            </optgroup>

                            <optgroup label="Rotating Exits">
                            <option value="rotateOut">rotateOut</option>
                            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                            <option value="rotateOutDownRight">rotateOutDownRight</option>
                            <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                            <option value="rotateOutUpRight">rotateOutUpRight</option>
                            </optgroup>

                            <optgroup label="Sliding Entrances">
                            <option value="slideInUp">slideInUp</option>
                            <option value="slideInDown">slideInDown</option>
                            <option value="slideInLeft">slideInLeft</option>
                            <option value="slideInRight">slideInRight</option>

                            </optgroup>
                            <optgroup label="Sliding Exits">
                            <option value="slideOutUp">slideOutUp</option>
                            <option value="slideOutDown">slideOutDown</option>
                            <option value="slideOutLeft">slideOutLeft</option>
                            <option value="slideOutRight">slideOutRight</option>
                            
                            </optgroup>
                            
                            <optgroup label="Zoom Entrances">
                            <option value="zoomIn">zoomIn</option>
                            <option value="zoomInDown">zoomInDown</option>
                            <option value="zoomInLeft">zoomInLeft</option>
                            <option value="zoomInRight">zoomInRight</option>
                            <option value="zoomInUp">zoomInUp</option>
                            </optgroup>
                            
                            <optgroup label="Zoom Exits">
                            <option value="zoomOut">zoomOut</option>
                            <option value="zoomOutDown">zoomOutDown</option>
                            <option value="zoomOutLeft">zoomOutLeft</option>
                            <option value="zoomOutRight">zoomOutRight</option>
                            <option value="zoomOutUp">zoomOutUp</option>
                            </optgroup>

                            <optgroup label="Specials">
                            <option value="hinge">hinge</option>
                            <option value="rollIn">rollIn</option>
                            <option value="rollOut">rollOut</option>
                            </optgroup>
                        </select>
                        <button class="butt js--triggerAnimation btn btn-primary">Animate it</button>
                        <span id="animationSandbox" style="display: block;"><h1 class="site__title mega">Animate.css</h1></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="button" class="btn btn-success" id="createHtml">生成html</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
<script src="./js/swiper.min.js"></script>
<script src="./js/swiper.animate.min.js"></script>
<script src="./js/mobile-util.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
<script>

    var cssImg = [];
    function testAnim(x) {
        $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    };
    //刷新iframe   
    function refreshFrame() {
        document.getElementById('myframe').contentWindow.location.reload(true);
    }

    //生成css
    function setCss(attr, attrVal, unit) {
        return attrVal != '' ? (attr + ":" + attrVal + unit + ";") : '';
    }
    // 生成img  isImg false 为背景 true img 标签
    function createImg(src, isImg) {
        return src != '' ?
            (isImg ? ('<img src="' + src + '">') : ("background-image:url(" + src + ")")) :
            '';
    }
    function getImg(){
        $.ajax({
            url: './createHtml.php',
            type: "post",
            dataType: 'json',
            data: { 'html': createHtml },//这里是你传到后台的html
            success: function () {
            }

        });
    }
    //初始化 图片资源
    function getImgList(page){
        var res = {searchdata:JSON.stringify({page:page})};
        $.ajax({
            url:'./getImgPath.php',
            type:'post',
            data:res,
            success: function (data) {
                
                var resData = JSON.parse(data);
                var datas =resData.data,dataLen = datas.length,html = '';
                if(dataLen){
                    for(var i=0;i<dataLen;i++){
                        html+=`<img  style = 'height:200px;width:100%' class="img-thumbnail" src="`+datas[i]+`" alt="">
                        <div class="caption" style="background-color:#fff;">
                            <p style = "text-align:center">`+datas[i]+`</p>
                        </div>`;
                    }
                }
                
                $('#imgListContent .imgList').append(html);

                 $('#getMoreImg').attr('data-page',page+1);
                
            }
        });
    }

    $(document).ready(function () {
        getImgList(1);
        $('#getMoreImg').on('click',function(){
            var cur_page = $(this).attr('data-page');
            console.log(cur_page);
            getImgList(cur_page);
        });
        // 图片预览功能
        document.getElementById("upfile").onchange = function () {
            var fileInfo = $("#upfile").get(0).files[0];
            if (fileInfo.type.indexOf('image') !== -1) {
                // 两种图片预览的方式 filereader 和 window.URL.createObjectURL
                // prop和attr 的区别 prop用于获取元素自带的属性 attr则用于获取元素的自定义属性
                $("#pevImg").prop("src", window.URL.createObjectURL(fileInfo));
            }

        }

        $('#upJQuery').on('click', function () {
            var fd = new FormData();
            fd.append("upload", 1);
            fd.append("upfile", $("#upfile").get(0).files[0]);
            $.ajax({
                url: "test.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: fd,
                // 获取上传文件的进度
                xhr: function () {
                    //  获取原生的xhr 对象
                    var xhr = jQuery.ajaxSettings.xhr();

                    //进度事件 xhr.onload
                    // 完成上传上传事件
                    // xhr.upload.onload = function () {
                    //     alert('finish downloading')
                    // }
                    // 上传的过程中
                    // 侦查附件上传情况    ,这个方法大概0.05-0.1秒执行一次
                    xhr.upload.onprogress = function (ev) {
                        if (ev.lengthComputable) {
                            var percent = 100 * ev.loaded / ev.total;
                            $("#progressNum").html(percent);
                        }
                    }
                    return xhr;
                },
                //  文件上传完成后
                success: function (data) {
                     var resData = JSON.parse(data);
                    if(resData.code == 200){
                        getImgList(1);
                    }
                }
            });
        });
        $('.js--triggerAnimation').click(function (e) {
            e.preventDefault();
            var anim = $('.js--animations').val();
            $('input[name="animate_effect"]').val(anim);
            testAnim(anim);
        });

        $('.js--animations').change(function () {
            var anim = $(this).val();
            testAnim(anim);
        });
        // 向页面添加元素
        $('#addPage').on('click', function () {
            var pageNum = $('#pageNum').html();
            $('#pageNum').html(Number(pageNum) + 1);
            var classPageNum = 'page' + (Number(pageNum) + 1);
            // var pageBg='background-image: url('+ $('input[name="pageBg"]').val()+');';
            var pageHtml = '<section class="swiper-slide swiper-slide1 ' + classPageNum + '"></section>';
            $('.chosePage').append('<option value="' + (Number(pageNum) + 1) + '">' + (Number(pageNum) + 1) + '</option>');
            $('.swiper-wrapper').append(pageHtml);
            reAnimate(false);
        });
        //为不同的页面添加背景 向上腾娱乐标签中添加数据
        $('#addPageBg').on('click', function () {
            var inputBg = $('input[name="pageBg"]').val();
            var pageNUm = $('#chosePage option:selected').val();
            var pageBgCss = '.page' + pageNUm + '{background-image: url(' + inputBg + ');height: 100%}';
            $('#showPage style').append(pageBgCss);
            cssImg.push(inputBg);

            reAnimate(false);
        });
        // 添加一个元素
        $("#addElem").on('click', function () {
            var pageNum = $('#choseElemPage option:selected').val();
            // 为元素生成时间戳的id
            var itemClassName = 'pageItem' + new Date().getTime();
            var elemHtml = '<div class="ani ' + itemClassName + '"></div>';
            // 将其放置到里面去
            $('.swiper-wrapper .page' + pageNum).append(elemHtml);
        });
        // 选中一个元素
        $('.swiper-wrapper').on('click', '.ani', function () {
            $(this).addClass('choseItem');
            // 为按钮设置当前激活元素
            $("#settingElem").attr('data-active', $(this).attr('class'));
        });
        // 设置一个元素
        $("#settingElem").on('click', function () {
            // 找到那个元素
            var activeItemClass = $(this).attr('data-active')
                , activeItem = $('[class="' + activeItemClass + '"]');
            //获取元素属于那个页面
            var pageNum = $('#choseElemPage option:selected').val()
                // 元素大小
                , elemWidth = $('input[name="elemWidth"]').val()
                , elemHeight = $('input[name="elemHeight"]').val()
                , elemLeft = $('input[name="elemLeft"]').val()
                , elemTop = $('input[name="elemTop"]').val()
                // 元素的文字
                , elemFont_content = $('input[name="font_content"]').val()
                , elemFont_size = $('input[name="font_size"]').val()
                // 元素跳转链接
                , elemHref = $('input[name="elemHref"]').val()
                // 元素图片
                , elemImg = $('input[name="elemImg"]').val()
                // 动画相关设置
                , elem_animate_effect = $('input[name="animate_effect"]').val()
                , elem_animate_duration = $('input[name="animate_duration"]').val()
                , elem_animate_delay = $('input[name="animate_delay"]').val();
            // 生成style样式
            // setCss('width', elemWidth);
            var style = setCss('width', elemWidth, 'rem') + setCss('height', elemHeight, '%') + setCss('left', elemLeft, 'vh') + setCss('top', elemTop, 'vh') + setCss('font-size', elemFont_size, 'rem') + '"';
            // var style = 'style="' + setCss('width', elemWidth, 'rem') + setCss('height', elemHeight, 'rem') + setCss('left', elemLeft, 'vh') + setCss('top', elemTop, 'vh') + setCss('font-size', elemFont_size, 'rem') + '"';
            // 文字相关的
            var itemContent = elemFont_content;
            // 生成img 标签
            var imgElemHtml = '';
            if (elemImg != '') {
                imgElemHtml = '<img src="' + elemImg + '">';
            }
            // 动画相关的
            // var animateAttr = "swiper-animate-effect='" + elem_animate_effect + "' swiper-animate-duration='" + elem_animate_duration + "s' " +
            //     "swiper-animate-delay='" + elem_animate_delay + "s'";
            activeItem.attr({
                'swiper-animate-effect': elem_animate_effect,
                'swiper-animate-duration': elem_animate_duration + 's',
                'swiper-animate-delay': elem_animate_delay + 's',
                'style': style
            }).html(imgElemHtml);
            if(elemHref){
                var activeItemClassArr=activeItemClass.split(" "),activeItemClassLen=activeItemClassArr.length,curHrefClass='';
                for(var i=0;i<activeItemClassLen;i++){
                    if(activeItemClassArr[i].indexOf('pageItem')!=-1){
                        curHrefClass=activeItemClassArr[i];
                    }
                }
                // pageHrefStr="$('."+curHrefClass+"')"+
                // ".on('click',function(){"+
                //      "window.location.href='"+ elemHref+"';"+
                //  "});"
                // 避免引入jquery
                pageHrefStr="eventHandle(document.getElementsByClassName('"+curHrefClass+"')[0],'click',function(){window.location.href = '"+elemHref+"';})";
                    
                $('#showPage script').eq(-1).append(pageHrefStr);
                
            }
            reAnimate(false);
        });
        // 生成html
        $("#createHtml").on('click', function () {
            $("#showPage .swiper-slide").removeAttr("style");
            $(".ani").removeAttr("swiper-animate-style-cache");
            $('.swiper-wrapper').removeAttr("style");
            // swiper-animate-style-cache
            var createHtml = $("#showPage").html();

            var domain = window.location.href;
            var num = domain.split("").reverse().join("").indexOf('/'),
            domainStr = domain.substring(0,domain.length-num);
            
            //获取 代码片段中的 所有的 url
            var frag = document.createElement('div');
            frag.innerHTML =  $('#showPage').html();
            var result = cssImg;
            [].map.call(frag.querySelectorAll('img'), function(img){
                var src = img.src;
                src = src.replace(domainStr,'./');
                 result.push(src)
            });
            [].map.call(frag.querySelectorAll('link'), function(img){ 
                var src = img.href;
                src = src.replace(domainStr,'./');
                 result.push(src)
            });
            [].map.call(frag.querySelectorAll('script'), function(img){
                var src = img.src;
                if(img.src!=''){
                    src = src.replace(domainStr,'./');
                    result.push(src)
                } 
            });
            

            $.ajax({
                url: './createHtml.php',
                type: "post",
                dataType: 'json',
                data: { 'html': createHtml,'filePath': JSON.stringify(result)},//这里是你传到后台的html
                success: function (data) {
                    //下载生成的文件
                    window.location.href = data.data;
                }

            });
        });
    });

</script>

</html>