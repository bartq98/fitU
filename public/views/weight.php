<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo "Waga";?></title>

    <link rel="stylesheet" href="/public/style/normalize.css">
    <link rel="stylesheet" href="/public/style/view_components.css">
    <link rel="stylesheet" href="/public/style/weight.css">
    <script src="https://kit.fontawesome.com/dae4b2440d.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/public/scripts/weight_fetch.js" defer></script>
    <!-- Chart.js for generating beautfilu charts  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
<div class="base-container">
    <?php include("view_components/header.php"); ?>
    <?php include("view_components/nav.php"); ?>
    <main>
        <div class="main-container">
            <canvas id="chart" height="50%" width="75%">
                <p>Something went wrong on canvas, where chart was suppouse to appear</p>
            </canvas>
            <form class="weight" action="weight" method="POST">
                <p>Dodaj wagę:</p>
                <input name="weight" type="number" step="0.1">
                <button type="submit">Dodaj</button>
            </form>
        </div>
    </main>
</div>
</body>

</html>

