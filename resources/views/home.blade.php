<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <div id="app" class="d_flex">
            <header class="d_flex">
                <div class="navbar d_flex">
                    <div class="nav_left d_flex"></div>
                    <nav class="d_flex">
                        <ul class="d_flex">
                            <li><a href="">HOME</a></li>
                            <li><a href="">ABOUT US</a></li>
                        </ul>
                    </nav>
                    <div class="nav_right d_flex"></div>
                </div>
            </header>

            <main class="d_flex">
                    Content
            </main>

            <footer class="d_flex">
                <div class="footer d_flex">
                    <div class="foot_left d_flex"></div>
                    <div class="foot d_flex">
                        <div class="foot_column d_flex">
                            <h2>CONTATTI</h2>
                            <ul>
                                <li><a href="">HOME</a></li>
                                <li><a href="">ABOUT US</a></li>
                            </ul>
                        </div>
                        <div class="foot_column d_flex">
                            <h2>SOCIAL</h2>
                            <ul>
                                <li><a href="">HOME</a></li>
                                <li><a href="">ABOUT US</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="foot_right d_flex"></div>
                </div>
            </footer>

        </div>
    </body>
</html>