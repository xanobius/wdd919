<form action="/index.php?p=login" method="POST">
    <input type="hidden" name="login_try" value="1">
    <div class="field">
        <label class="label">E-Mail</label>
        <div class="control">
            <input name="email" class="input" type="text" placeholder="Deine E-Mail-Adresse">
        </div>
    </div>

    <div class="field">
        <label class="label">Passwort</label>
        <div class="control">
            <input name="password" class="input" type="password" placeholder="Dein Passwort">
        </div>
    </div>
    <!--
    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
            <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
            <span class="icon is-small is-right">
          <i class="fas fa-exclamation-triangle"></i>
        </span>
        </div>
        <p class="help is-danger"><?php print $errors[0]; ?></p>
    </div>
    -->

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Login</button>
        </div>
    </div>
</form>