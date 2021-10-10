<main id="validate">
    <form action="<?= \core\Route::getUrl('index', 'validate')?>" method="post" class="form_article">
        <label>Login:
            <input type="text" name="login" placeholder="Enter login">
        </label>
        <label>Pass:
            <input type="password" name="password" placeholder="Enter password">
        </label>
        <input type="submit">
    </form>
</main>

