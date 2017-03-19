<!DOCTYPE html>
<html>
<head>
    <title>Sefako Makgatho Health Science university</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="/js/jquery-1.11.0.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
</head>
<body>
<div class="head" id="home">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo_smu.png" alt=""></a>
        </div>
        <div class="header">
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="images/menu-icon.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/contacts">Apply</a></li>
                </ul>
                <!----start-top-nav-script---->
                <script type="text/javascript" src="/js/responsive-nav.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
                <!----//End-top-nav-script---->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@yield('banner')
<!--start-website-->
<!--Responsive-tabs-Starts-Here-->
</div>
<script src="/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- Partners Starts Here --->
<!--Responsive-tabs-ends-Here-->
<!--end-website-->
<!--start-special-->
<div class="special">

</div>
<!--end-special-->

<!--start-footer-->
<!--end-footer-->
</body>
</html>