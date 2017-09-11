<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sen kimsin?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Sen Kimsin? .la :)</h2>
            <p class="text-center">Testler kalbin aynasıdır. !! </p>
        </div>
        <div class="row articles">
            <div class="col-md-4 col-sm-6 item">
                @yield('card1')
            </div>

            <div class="col-md-4 col-sm-6 item">
                @yield('card2')
            </div>

            <div class="col-md-4 col-sm-6 item">
                @yield('card3')
            </div>
        </div>

        <div class="row articles">
            <div class="col-md-4 col-sm-6 item">
                @yield('card4')
            </div>

            <div class="col-md-4 col-sm-6 item">
                @yield('card5')
            </div>

            <div class="col-md-4 col-sm-6 item">
                @yield('card6')
            </div>
        </div>

        <div class="row articles">
            <div class="col-md-4 col-sm-7 item">
                @yield('card7')
            </div>

            <div class="col-md-4 col-sm-8 item">
                @yield('card8')
            </div>

            <div class="col-md-4 col-sm-9 item">
                @yield('card9')
            </div>
        </div>

         <div class="row articles">
            <div class="col-md-4 col-sm-7 item">
                @yield('card10')
            </div>

            <div class="col-md-4 col-sm-8 item">
                @yield('card11')
            </div>

            <div class="col-md-4 col-sm-9 item">
                @yield('card12')
            </div>
        </div>



        </div>
    </div>
</div>
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-4 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2016</p>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>