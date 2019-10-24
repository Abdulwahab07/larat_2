<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta name="description" content="This is cloud based solution for central sterile supply department. ">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/Grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/queries.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700" rel="stylesheet">
    <title>Tow Direction Form for Arabic And English</title>

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
<section class="section-form">
    <div class="row">
        <h2>We're happy to hear from you , please fill it</h2>
    </div>

    <div class="row lang">
        <div class="col span-2-of-3">
            <input type="submit" value="Change Language">
        </div>
    </div>

    <div class="row">
        <form method="post" action="#" class="contact-form">
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
                    <label for="find-us">How did you find us ?</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search">Search Engine</option>
                        <option value="ad">Advertisement</option>
                        <option value="sm">Social Media</option>
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
        <p>
            Copyright &copy; <span id="year">2018</span> by Abdulwahab. All rights reserved.
        </p>
    </div>
</footer>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
<script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
<script src="js/fomr-script.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
</html>
