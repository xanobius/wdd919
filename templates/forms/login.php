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

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Login</button>
        </div>
    </div>
</form>