<!DOCTYPE html>
<html lang="{{config('app.locale')}}" dir="{{config('app.direction')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta name="description" content="This is cloud based solution for central sterile supply department. ">
    <link href="{{ asset('vendors/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/Grid.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/animate.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"  >
    <link href="{{ asset('css/queries.css') }}" rel="stylesheet"  >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"  >
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700" rel="stylesheet">
    <title> cssd cloud tracking system</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#dfdfdf">
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#dfdfdf">
    <meta name="msapplication-config" content="{{ asset('favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ff0000">
</head>

<body>
<header>
    <nav class="navbar">
        <div class="container">
        <div class="row">
            <img src="{{ asset('css/img/logo-white.png') }}" alt="CSSD TRAKING LOGO" class="logo">
            <img src="{{ asset('css/img/logo.png') }}" alt="CSSD TRAKING LOGO-black" class="logo-black">
            <ul class="main-nav js--main-nav">
                <li><a href="#features">Features Overview</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#industries">Industries</a></li>
                <li><a href="#sign">Sign up</a></li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
        </div>
    </nav>
    <div class="hero-text-box">
        <div class="container">
            <h1>Track your operations.<br> quickly , simply and easily .</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#">Get Free Trail</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#">Schedule a Demo </a>
        </div>
    </div>
</header>

<section class="section-features js--section-features" id="features">
    <div class="row">
        <h2>Follow Sterilization Processes &mdash; With out Mistakes</h2>
        <p class="long-copy">
            Hello we are cssd tracker, your premium sterilization tracking software . We know you're always busy. No time for tracking all sterilization operations. So let us simplify that for you so fast and easy.
        </p>
    </div>

    <div class="row js--wp-1">
        <div class="col span-1-of-3 box">
            <i class="ion-ionic icon-big"></i>
            <h3>Up to 365 days/year</h3>
            <p>
                Never Cook somthing somthing somthing somthing somthing somthing somthing somthing somthing
            </p>
        </div>

        <div class="col span-1-of-3 box">
            <i class="ion-arrow-shrink icon-big"></i>
            <h3>Up to 365 days/year</h3>
            <p>
                Never Cook somthing somthing somthing somthing somthing somthing somthing somthing somthing
            </p>
        </div>

        <div class="col span-1-of-3 box">
            <i class="ion-log-out  icon-big"></i>
            <h3>Up to 365 days/year</h3>
            <p>
                Never Cook somthing somthing somthing somthing somthing somthing somthing somthing somthing
            </p>
        </div>

    </div>

</section>

<section class="section-hero-img" id="pricing">
    <ul class="ster-showcase clearfix">
        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/1.jpg') }}" alt="one">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/2.jpg') }}" alt="two">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/3.jpg') }}" alt="three">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/4.jpg') }}" alt="four">
            </figure>
        </li>
    </ul>
    <ul class="ster-showcase clearfix">
        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/5.jpg') }}" alt="five">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/6.jpg') }}" alt="six">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/7.jpg') }}" alt="seven">
            </figure>
        </li>

        <li>
            <figure class="ster-photo">
                <img src="{{ asset('css/img/8.jpg') }}" alt="eight">
            </figure>
        </li>
    </ul>
</section>

<section class="section-steps" id="support">
    <div class="row">
        <h2>How it Works  &mdash; Simple 1 , 2 , 3</h2>
    </div>

    <div class="row">
        <div class="col span-1-of-2 steps-box">
            <img src="{{ asset('css/img/app-iPhone.png') }}" alt="CSSD Tracking system on iphone" class="app-screen js--wp-2">
        </div>
        <div class="col span-1-of-2 steps-box">
            <div class="works-step">
                <div>1</div>
                <p>Choose the subscribtion plan that best fits your needs and sign up today</p>
            </div>
            <div class="works-step">
                <div>2</div>
                <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
            </div>
            <div class="works-step">
                <div>3</div>
                <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
            </div>

            <a href="#" class="btn-app"><img src="{{ asset('css/img/download-app.svg') }}" alt="app store button"></a>
            <a href="#" class="btn-app"><img src="{{ asset('css/img/download-app-android.png') }}" alt="Play store button"></a>

        </div>
    </div>
</section>

<section class="section-cities" id="resources">
    <div class="row">
        <h2>We're currently in these cities</h2>
    </div>
    <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
            <img src="{{ asset('css/img/lisbon-3.jpg') }}" alt="Lisbon">
            <h3>Lisbon</h3>
            <div class="city-feature">
                <i class="ion-ios-person icon-small"></i>
                1600+ happy eaters
            </div>
            <div class="city-feature">
                <i class="ion-ios-star icon-small"></i>
                60+ top chefs
            </div>
            <div class="city-feature">
                <i class="ion-social-twitter icon-small"></i>
                <a href="#">@omnifood_lx</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="{{ asset('css/img/san-francisco.jpg') }}" alt="san Francisco">
            <h3>San Francisco</h3>
            <div class="city-feature">
                <i class="ion-ios-person icon-small"></i>
                3700+ happy eaters
            </div>
            <div class="city-feature">
                <i class="ion-ios-star icon-small"></i>
                160+ top chefs
            </div>
            <div class="city-feature">
                <i class="ion-social-twitter icon-small"></i>
                <a href="#">@omnifood_sf</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="{{ asset('css/img/berlin.jpg') }}" alt="Berlin">
            <h3>Berlin</h3>
            <div class="city-feature">
                <i class="ion-ios-person icon-small"></i>
                2300+ happy eaters
            </div>
            <div class="city-feature">
                <i class="ion-ios-star icon-small"></i>
                110+ top chefs
            </div>
            <div class="city-feature">
                <i class="ion-social-twitter icon-small"></i>
                <a href="#">@omnifood_berlin</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="{{ asset('css/img/london.jpg') }}" alt="London">
            <h3>London</h3>
            <div class="city-feature">
                <i class="ion-ios-person icon-small"></i>
                1200+ happy eaters
            </div>
            <div class="city-feature">
                <i class="ion-ios-star icon-small"></i>
                50+ top chefs
            </div>
            <div class="city-feature">
                <i class="ion-social-twitter icon-small"></i>
                <a href="#">@omnifood_london</a>
            </div>
        </div>
    </div>
</section>

<section class="section-testimos" id="industries">
    <div class="row">
        <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <blockquote>
                Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                <cite><img src="{{ asset('css/img/customer-1.jpg') }}" alt="Alberto Duncan">Alberto Duncan</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                <cite><img src="{{ asset('css/img/customer-2.jpg') }}" alt="Joana Silva">Joana Silva</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                <cite><img src="{{ asset('css/img/customer-3.jpg') }}" alt="Milton Chapman">Milton Chapman</cite>
            </blockquote>
        </div>
    </div>
</section>

<section class="section-plans js--section-plans" id="sign">
    <div class="row">
        <h2>Start eating healthy today</h2>
    </div>

    <div class="row">
        <div class="col span-1-of-3">
            <div class="plan-box js--wp-4">
                <div>
                    <h3>Premium</h3>
                    <p class="plan-price">$399 <span>/ month</span></p>
                    <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty">1 meal every day</i></li>
                        <li><i class="ion-ios-checkmark-empty">Order 24/7</i></li>
                        <li><i class="ion-ios-checkmark-empty">Access to newest creations</i></li>
                        <li><i class="ion-ios-checkmark-empty">Free delivery</i></li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-full">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">$149 <span>/ month</span></p>
                    <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty">1 meal 10 days/month</i></li>
                        <li><i class="ion-ios-checkmark-empty">Order 24/7</i></li>
                        <li><i class="ion-ios-checkmark-empty">Access to newest creations</i></li>
                        <li><i class="ion-ios-checkmark-empty">Free delivery</i></li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Starter</h3>
                    <p class="plan-price">19$ <span>/ meal</span></p>
                    <p class="plan-price-meal">&nbsp;</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty">1 meal</i></li>
                        <li><i class="ion-ios-checkmark-empty">Order from 8 am to 12 pm</i></li>
                        <li><i class="ion-ios-close-empty"></i></li>
                        <li><i class="ion-ios-checkmark-empty">Free delivery</i></li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-form" id="form">
    <div class="row">
        <h2>We're happy to hear from you</h2>
    </div>

    <div class="row">
        <form method="post" action="mailer.php" class="contact-form">
            <div class="row">
                <div class="form-messages success">
                    Thank you! Your message has been sent.
                </div>
                <div class="form-messages error">
                    Oops! Something went wrong. Please try again!
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label for="name">Name</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label for="email">Email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" id="email" placeholder="Your e-mail address" required>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label for="find-us">How did you find us?</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search">Search Engine</option>
                        <option value="ad">Advertisement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>Newsletter</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="checkbox" name="news" id="news" checked> Yes, Please
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>Drop us a line</label>
                </div>
                <div class="col span-2-of-3">
                    <textarea name="messege" placeholder="your messege"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" value="Send it!">
                </div>
            </div>

        </form>
    </div>
</section>

<footer>
    <div class="row">
        <div class="col span-1-of-2">
            <ul class="footer-nav">
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">iOS App</a></li>
                <li><a href="#">Android App</a></li>
            </ul>
        </div>
        <div class="col span-1-of-2">
            <ul class="social-links">
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <p>
            Copyright &copy; <span id="year">2018</span> by Abdulwahab. All rights reserved.
        </p>
    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
<script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('vendors/js/jquery.waypoints.min.js') }}"></script>
</body>


</html>


