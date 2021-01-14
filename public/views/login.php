<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>fitU - panel logowania</title>

    <link rel="stylesheet" href="/public/style/normalize.css">
    <link rel="stylesheet" href="/public/style/style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/public/img/logo_white.svg">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div>
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }

                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="your@email.com">
                <input name="password" type="password" placeholder="tu wpisz swoje hasło">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>

