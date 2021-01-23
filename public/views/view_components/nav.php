<nav>
    <a class="navbutton" id="id-meal" <?php echo "href=http://$_SERVER[HTTP_HOST]/meal"; ?>>
        <i class="fas fa-utensils fa-2x"></i>
        <?php echo "Dodaj posiłek"; ?>
    </a>

    <a class="navbutton"  <?php echo "href=http://$_SERVER[HTTP_HOST]/mealshistory"; ?>>
        <i class="fas fa-cookie-bite fa-2x"></i>
        <?php echo "Historia posiłków"; ?>
    </a>

    <a class="navbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/training"; ?>>
         <i class="fas fa-dumbbell fa-2x" id="id-training"></i>
         <?php echo "Dodaj trening"; ?>
    </a>

    <a class="navbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/traininghistory"; ?>>
        <i class="fas fa-running fa-2x" id="id-traininghistory"></i>
        <?php echo "Historia treningów"; ?>
    </a>

    <a class="navbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/weight"; ?>>
         <i class="fas fa-weight fa-2x" id="id-weight"></i>
         <?php echo "Waga"; ?>
    </a>

</nav>