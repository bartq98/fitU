<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo "Panel administracyjny";?></title>

    <link rel="stylesheet" href="/public/style/normalize.css">
    <link rel="stylesheet" href="/public/style/view_components.css">
    <link rel="stylesheet" href="/public/style/admin.css">
    <script src="https://kit.fontawesome.com/dae4b2440d.js" crossorigin="anonymous"></script>

    <!-- Chart.js for generating beautfilu charts  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
<div class="base-container">
    <?php include("view_components/header.php"); ?>
    <?php include("view_components/navAdmin.php"); ?>
    <main>
        <div class="main-container">
            <table>
            <?php if(isset($messages)) {
                echo "<tr><th>Imię</th> <th>Nazwisko</th> <th>E-mail</th></tr>";
                foreach ($messages as $message) {
                    echo "<tr>";
                    echo "<td>{$message['name']}</td>";
                    echo "<td>{$message['surname']}</td>";
                    echo "<td>{$message['email']}</td>";
                    echo "</tr>";
                }
            }
            ?>
            </table>
        </div>
    </main>
</div>
</body>

</html>

