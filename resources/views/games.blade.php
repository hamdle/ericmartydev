<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Game Designer, Eric Marty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" type="text/css"> 

        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
        <script type="text/javascript">
	        $(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['top', 'moon', 'footer']
			});
		});
		</script>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.min.css" />
        <style>
            html, body {
                background-color: #fff;
                color: #413e49;
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            p { 
                color: #fff;
                text-align: center; 
            }

            a {
                color: #fff;
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

            .links > a, .back > a {
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

            .links > a:first-child:hover {
                background-color: #111;
            }

            .title b {
                border-top: 1px solid #ddd;
                font-weight: 400;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .pf-moon {
                background-color: #584cda;
            }

            .pf-champ {
            	background-color: #ffc100;
            }

            .pf-pld {
            	background-color: #2ba9da;
            }

            .pf-rhino {
            	background-color: #6aae01;
            }

            .pf-ciaccio {
            	background-color: #333333;
            }

            .bg-pink {
            	background-color: #f92aaf;
            }

            .bg-blue {
            	background-color: #418FFD;
            }

            .bg-orange {
                background-color: #ff6327;
            }

            .bg-pete-green {
                background-color: #258b2e;
            }

            .bg-dark-gray {
                background-color: #0d0d0d;
            }

            .co-yellow {
                color: #ffc100;
            }

            h2 {
            	color: #fff;
            	font-weight: 300;
            	font-size: 48px;
                text-align: center;
                margin-bottom: 0.2em;
            }

            h2 > a {
                color: #fff;
                text-decoration: none;
            }

            h2 > a:hover {
                /*border-bottom: 1px solid #fff;*/
                /*text-decoration: underline;*/
                color: #eee;
            }
            
            ul {
                list-style: none;
            }

            ul > li, p {
                padding: 10px 25px;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase; 
                color: #fff;  
                margin-top: -10px;   
            }

            img {
                max-width: 100%;
            }

            i {
                font-size: 20px;
                font-style: normal;
                padding-left: 1em;
                line-height: 48px;
                color: rgba(255,255,255,0.45);
            }

            .pf-moon div span {
                padding: 10px 55px;
            }

            @media screen and (max-width: 725px) {
                img {
                    max-width: 100%;
                }

                .links > a {
                    padding: 8px 20px;
                    letter-spacing: inherit;
                }
            }
        </style>
    </head>
    <body>
		
		<div id="fullpage" class="fullpage-wrapper">
			<div class="section fp-auto-height-responsive">
				<div class="flex-center position-ref full-height">
		            <div class="top-right back">
			        	<a href="/portfolio">Web</a>
			        </div>
		            <div class="content">
		                <div class="title m-b-md">
		                    Game <b>Dev</b>
		                </div>
		                <div class="links">
		                    <a href="#moon" data-menuanchor="moon">Moon</a>
		                </div>
		            </div>
		        </div>
			</div>
			<div class="section fp-auto-height-responsive pf-moon">
				<div class="slide">
					<div class="flex-center position-ref full-height">
						<div>
                            <h2 style="margin-bottom: 0.6em;"><a href="http://moonreporter.com" target="_blank">Pete Cactus <b>Moon Reporter</b></a><i>#pdx</i></h2>
                            <span><iframe width="560" height="315" src="https://www.youtube.com/embed/ipo00gfeeAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
                            <p style="margin-top: 30px;">C# | Unity | Development & Design</p>
                        </div>
					</div>
				</div>
				<div class="slide">
					<div class="flex-center position-ref full-height bg-pete-green">
                        <div>
    						<img src="imgs/moon-start-screen.png" alt="Pete Cactus Moon Reporter Start Menu" style="margin-bottom: 35px;" />
                            <p>Start Menu | Colors / Fonts / UX/UI Design</p>
                        </div>
					</div>
				</div>
				<div class="slide">
					<div class="flex-center position-ref full-height bg-dark-gray">
                        <div>
						  <img src="imgs/moon-screen.png" alt="Champ Studio Menu" />
                          <p>Web design | Flat-file CMS <b>Grav</b> | <a href="https://moonreporter.com" target="_blank">Moonreporter.com</a></p>
                        </div>
					</div>
				</div>
			</div>
            
			<div class="section fp-auto-height-responsive">
				<div class="flex-center position-ref full-height">
		            <div class="top-right back"></div>
		            <div class="content">
		                <div class="title m-b-md">
		                    Eric <b>Marty</b>
		                </div>
		                <div class="links">
		                    <a href="#top" data-menuanchor="top">Games</a>
		                    <a href="https://www.linkedin.com/in/ericpmarty" target="_blank">LinkedIn</a>
                            <a href="https://github.com/hamdle" target="_blank">Github</a>
                		</div>
		            </div>
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