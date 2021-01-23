<header>
            <img src="/public/img/logo_white.svg">
            <div>
                <a class="headerbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/logout"; ?>>
                    <i class="fas fa-sign-out-alt"></i>
                    <?php echo "Wyloguj"; ?>
                </a>
                <a class="headerbutton" <?php echo "href=http://$_SERVER[HTTP_HOST]/userinfo"; ?>>
                    <i class="fas fa-user-alt"></i>
                    <?php echo "Info."; ?>
                </a>
            </div>
</header>