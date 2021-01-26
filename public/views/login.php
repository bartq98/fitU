<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>fitU - panel logowania</title>

    <link rel="stylesheet" href="/public/style/normalize.css">
    <link rel="stylesheet" href="/public/style/login.css">
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
                <input name="email" type="text" placeholder="Tutaj wpisz swój adres e-mail">
                <input name="password" type="password" placeholder="Wpisz tutaj swoje hasło">
                <div class="button-container">
                    <button type="submit">Zaloguj</button>
                    <a <?php echo "href=http://$_SERVER[HTTP_HOST]/register"; ?>>Zarejestruj</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

