<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Developer, Eric Marty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" type="text/css"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #413e49;
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #413e49;
                padding: 10px 25px;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:first-child {
                color: #fff;
                background-color: #418FFD;
            }

            .links > a.upper-menu:first-child {
                color: inherit;
                background-color: inherit;
            }

            .links > a:first-child:hover {
                background-color: #111;
            }

            .links > a.upper-menu:first-child:hover {
                background-color: inherit;
            }

            .title b {
                border-top: 1px solid #ddd;
                font-weight: 400;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    <a class="upper-menu" href="/"><strong>Home</strong></a>
                    <a href="/portfolio">Portfolio</a>
                    <a href="/games">Games</a>
                </div>
            <div class="content">
                <div class="title m-b-md">
                    Eric <b>Marty</b>
                </div>
                <div class="links">
                    <a href="/portfolio">Portfolio</a>
                    <a href="https://www.linkedin.com/in/ericpmarty" target="_blank">LinkedIn</a>
                    <a href="https://github.com/hamdle" target="_blank">Github</a>
                </div>
            </div>
        </div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69511485-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
