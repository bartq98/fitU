<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>fitU - panel rejestracji</title>

    <link rel="stylesheet" href="/public/style/normalize.css">
    <link rel="stylesheet" href="/public/style/login.css">
    <link rel="stylesheet" href="/public/style/register.css">

    <script type="text/javascript" src="/public/scripts/loginValidation.js" defer></script>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="/public/img/logo_white.svg">
    </div>
    <div class="login-container">
        <form class="login" action="register" method="POST">
            <div class="form-message">
                <?php if(isset($messages)) {
                    echo "<p>$messages</p>";
                }
                ?>
            </div>
            <input name="name" type="text" placeholder="Podaj swoje imię">
            <input name="surname" type="text" placeholder="Podaj swoje nazwisko">
            <input name="email" type="text" placeholder="Wpisz swój adres e-mail">
            <input name="password" type="password" placeholder="hasło">
            <input name="password-repeat" type="password" placeholder="powtórz hasło">
            <button type="submit">Zarejestruj</button>
        </form>
    </div>
</div>
</body>

</html>

