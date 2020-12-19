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

            <?php foreach(getAllMainCategories() as $category) { ?>
                <a class="navbar-item">
                    <?php print $category['name'] . ' ('.$category['id'] . ')'; ?>
                </a>
            <?php } ?>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Asien
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        China
                    </a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Europa
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Schweiz
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