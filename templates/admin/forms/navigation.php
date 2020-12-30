<form action="<?php print $pageElement['action'] ?>" method="POST">
    <?php if(array_key_exists('id', $pageElement['values'])) { ?>
    <input type="hidden" name="id" value="<?php print $pageElement['values']['id'] ?>">
    <?php } ?>

    <div class="columns is-multiline">
        <div class="field column ">
            <label class="label">Navigationstitel</label>
            <div class="control is-4 has-icons-right">
                <input
                        name="nav_title"
                        class="input <?php if(array_key_exists('nav_title', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                        type="text"
                        placeholder="Titel im Menü"
                        value="<?php print $pageElement['values']['nav_title'] ?? '' ?>">
                <?php if(array_key_exists('nav_title', $pageElement['errors'])){ ?>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                <?php } ?>
            </div>

            <?php
            if(array_key_exists('nav_title', $pageElement['errors'])){
                foreach($pageElement['errors']['nav_title'] as $err){
                    ?>
                    <p class="help is-danger"><?php print $err; ?></p>
                    <?php
                }
            }
            ?>
        </div>

        <div class="field column is-4">
            <label class="label">Steitentitel</label>
            <div class="control has-icons-right">
                <input name="title"
                       class="input <?php if(array_key_exists('title', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                       type="text"
                       placeholder="Titel auf der Seite"
                       value="<?php print $pageElement['values']['title'] ?? '' ?>">
                <?php if(array_key_exists('title', $pageElement['errors'])){ ?>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                <?php } ?>
            </div>

            <?php
            if(array_key_exists('title', $pageElement['errors'])){
                foreach($pageElement['errors']['title'] as $err){
            ?>
                    <p class="help is-danger"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>

        <div class="field column is-4">
            <label class="label">Priorität</label>
            <div class="control has-icons-right">
                <input
                        name="priority"
                        class="input <?php if(array_key_exists('priority', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                        type="number"
                        placeholder="Priorität"
                        value="<?php print $pageElement['values']['priority'] ?? '' ?>">
                <?php if(array_key_exists('priority', $pageElement['errors'])){ ?>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                <?php } ?>
            </div>
            <?php
            if(array_key_exists('priority', $pageElement['errors'])){
                foreach($pageElement['errors']['priority'] as $err){
                    ?>
                    <p class="help is-danger"><?php print $err; ?></p>
                    <?php
                }
            }
            ?>
        </div>
        <div class="field column is-12">
            <label class="checkbox">
                <input type="checkbox" name="starred" class="checkbox" value="1">
                Als spezial-Eintrag markieren
            </label>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Speichern</button>
        </div>
    </div>
</form>