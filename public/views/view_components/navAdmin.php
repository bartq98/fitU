<nav>
    <a class="navbutton" id="id-meal" <?php echo "href=http://$_SERVER[HTTP_HOST]/users"; ?>>
        <i class="fas fa-users fa-2x"></i>
        <?php echo "Spis użytkowników"; ?>
    </a>

    <a class="navbutton"  <?php echo "href=http://$_SERVER[HTTP_HOST]/mealshistory"; ?>>
        <i class="fas fa-chart-line fa-2x"></i>
        <?php echo "Podgląd tabeli wag użytkowników"; ?>
    </a>

    <a class="navbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/training"; ?>>
        <i class="fas fa-user-times fa-2x"></i>
         <?php echo "Usuń użytkownika"; ?>
    </a>

</nav>