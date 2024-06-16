<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Error Page</title>
    <link href="{{ asset('/admin_assets/css/404.css') }}" rel="stylesheet" type="text/css" >

</head>
<body class="bg-purple">
    <a href="#" target="_blank">
        <header class="top-header">
        </header>

        <!--dust particel-->
        <div>
            <div class="starsec"></div>
            <div class="starthird"></div>
            <div class="starfourth"></div>
            <div class="starfifth"></div>
        </div>
        <!--Dust particle end--->

        <div class="lamp__wrap">
            <div class="lamp">
                <div class="cable"></div>
                <div class="cover"></div>
                <div class="in-cover">
                    <div class="bulb"></div>
                </div>
                <div class="light"></div>
            </div>
        </div>
        <!-- END Lamp -->
        <section class="error">
            <!-- Content -->
            <div class="error__content">
                <div class="error__message message">
                    <h1 class="message__title">Page Not Found</h1>
                    <p class="message__text">We're sorry, the page you were looking for isn't found here. The link you followed may either be broken or no longer exists. Please try again, or take a look at our.</p>
                </div>
                <div class="error__nav e-nav">
                    <a href="{{ url()->previous()}}" target="_blanck" class="e-nav__link"></a>
                </div>
            </div>
            <!-- END Content -->

        </section>
    </a>
</body>
</html>
