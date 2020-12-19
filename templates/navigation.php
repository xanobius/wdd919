<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <?php if($_SESSION['role'] == 'admin'){ ?>
                <a class="navbar-item">
                    Top Secret
                </a>
            <?php } ?>

            <?php if($_SESSION['role'] == 'moderator' || $_SESSION['role'] == 'admin'){ ?>
                <a class="navbar-item">
                    A little bit Secret
                </a>
            <?php } ?>

            <a class="navbar-item">
                ???
            </a>

            <a class="navbar-item">
                ???
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php if($_SESSION['logged_in'] != 1) { ?>
                        <a class="button is-light" href="/index.php?p=login">
                            Log in
                        </a>
                    <?php }else{ ?>
                        <a class="button" href="/index.php?p=login&action=logout">
                            Log out
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</nav>