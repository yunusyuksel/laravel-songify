<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songify | Login</title>
    <link rel="stylesheet" href={{asset("/assets/css/user.css")}}>
</head>

<body>
    <div class="main-wrapper">
        <div class="container">
            <div class="main-content">
                <div class="left-section">
                    @yield('leftSection')

                </div>
                <div class="right-section">
                    <div class="title">
                        <h2>Musics For Everyone</h2>
                        <p>Discover Songs From All Around The World</p>

                        <div class="list-div">
                            <ul class="list-group">
                                <li class="list-item check-mark">Listen music nonstop!</li>
                                <li class="list-item check-mark">Reach more than 50 million songs</li>
                                <li class="list-item check-mark">Download Musics, Listen Everywhere</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>