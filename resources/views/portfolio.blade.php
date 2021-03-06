<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Developer, Eric Marty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" type="text/css"> 

        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
        <script type="text/javascript">
	        $(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['top', 'champ', 'rhino', 'ciaccio', 'react', 'footer']
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

            .top-left {
                position: absolute;
                left: 10px;
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

            .pf-moon {
                background-color: #000;
            }

            .pf-react {
                background-color: #418FFD;
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

            .co-yellow {
                color: #ffc100;
            }

            .pf-react a {
                color: #fff;
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

            a.show-react-icon::before {
                content: url('../imgs/react-logo.png');
                position: relative;
                top: 6px;
                left: -6px;
            }

            .drupal-member {
                max-width: 30%;
                margin-top: -10px;
                padding-left: 20px;
            }

            .appstate {
                max-width: 30%;
                margin-top: -10px;
                padding-left: 20px;
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
                    <div class="top-left back">
                    </div>
                    <div class="top-right back">
                        <a href="/">Home</a>
                        <a href="/portfolio"><strong>Portfolio</strong></a>
			        	<a href="/games">Games</a>
                    </div>
		            <div class="content">
		                <div class="title m-b-md">
		                    Web <b>Portfolio</b>
		                </div>
		                <div class="links">
		                    <a href="#champ" data-menuanchor="champ">Champ</a>
		                    <a href="#rhino" data-menuanchor="rhino">Rhino</a>
                            <a href="#ciaccio" data-menuanchor="ciaccio">Ciaccio</a>
                            <a class="show-react-icon" href="#react" data-menuanchor="react">React Demo</a>
                        </div>
		            </div>
		        </div>
			</div>
			<div class="section fp-auto-height-responsive pf-champ">
				<div class="slide">
					<div class="flex-center position-ref full-height bg-pink">
						<div>
                            <h2><a href="http://champstudio.com" target="_blank">Champ <b>Studio</b></a><i>#pdx</i></h2>
                            <img src="imgs/champ-screen.png" alt="Champ Studio Home Page" />
                            <p>WordPress Developer and Co-owner of Champ Studio.<br />Designer of the classic <b class="co-yellow">Banana Phone</b> logo</p>
                        </div>
					</div>
				</div>
				<div class="slide">
					<div class="flex-center position-ref full-height bg-blue">
                        <div>
    						<img src="imgs/wordpress-plugin.png" alt="Champ Studio Custom Plugin" />
                            <p>I developed a custom SVG animation plugin to display the logo.<br />Written in <b>PHP</b> using WordPress API</p>
                        </div>
					</div>
				</div>
				<div class="slide">
					<div class="flex-center position-ref full-height ">
                        <div>
						  <img src="imgs/champ-menu-screen.png" alt="Champ Studio Menu" />
                          <p>Responsive, bold, and colorful design</p>
                        </div>
					</div>
				</div>
			</div>
			<div class="section fp-auto-height-responsive pf-rhino">
				<div class="flex-center position-ref full-height">
					<div class="slide">
						<div class="flex-center position-ref full-height">
                            <div class="rhino-1">
                                <h2><a href="https://www.rhinonetworks.com" target="_blank">Rhino <b>Networks</b></a><i>#avl</i></h2>
                                <img src="imgs/rhino-screen.png" alt="Rhino Networks Home Page" />
                                <p>I was a lead developer of Rhino's Drupal 7 Commerce site.<br />I also designed the logo</p>
                            </div>
						</div>
					</div>
					<div class="slide">
						<div class="flex-center position-ref full-height bg-orange">
                            <div class="rhino-2">
							     <img src="imgs/drupal-code.png" alt="Drupal module programming" />
                                 <p>I wrote a custom Drupal 7 Invoice module<br />that integrated into Drupal Commerce</p>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="section fp-auto-height-responsive pf-ciaccio">
				<div class="flex-center position-ref full-height">
					<div class="ciaccio-1">
                        <h2><a href="http://elisabethciaccio.com" target="_blank">Elisabeth <b>Ciaccio</b></a><i>#nyc</i></h2>
                        <img src="imgs/ciaccio-screen.png" alt="Elisabeth Ciaccio Image Gallery" />
                        <p>Build and deployed WordPress portfolio<br />with NYC photographer Elisabeth Ciaccio</p>
                    </div>
				</div>
			</div>

            <div class="section fp-auto-height-responsive pf-react">
                <div class="slide">
					<div class="flex-center position-ref full-height bg-blue">
						<div>
                            <h2><a href="https://reactdemo.ericmarty.co" target="_blank">React <b>Demo</b></a><i>#reactjs</i></h2>
                            <img src="imgs/react-demo.png" alt="React" />
                            <p style="margin-top: 15px;">My Workthrough of an advanced React project.<br />View on <a href="https://github.com/hamdle/react-catch-of-the-day" target="_blank">GitHub</a> | <a href="https://reactdemo.ericmarty.co" target="_blank">Live Demo</a></p>
                        </div>
					</div>
				</div>
				<div class="slide">
					<div class="flex-center position-ref full-height bg-blue">
                        <div>
    						<img src="imgs/react-demo-code.png" alt="React Demo Code" />
                            <p style="margin-top: 15px;">Build with React and React Router.<br />Project created using Facebook's <a href="https://github.com/facebook/create-react-app" target="_blank">create-react-app</a></p>
                        </div>
					</div>
                </div>
			</div>
            
			<div class="section fp-auto-height-responsive">
				<div class="flex-center position-ref full-height">
                    <div class="top-right back">
                        <a href="/">Home</a>
                        <a href="/portfolio"><strong>Portfolio</strong></a>
			        	<a href="/games">Games</a></div>
		            <div class="content">
		                <div class="title m-b-md">
		                    Eric <b>Marty</b>
		                </div>
		                <div class="links">
		                    <a href="#top" data-menuanchor="top">Back to Top</a>
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
