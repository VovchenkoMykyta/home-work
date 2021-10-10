<main id="admin">
    <form action="<?= \core\Route::getUrl('sw6', 'saveart')?>" method="post" class="form_article">
        <input type="text" name="title" placeholder="Enter title of the article" required>
        <input type="text" name="description" placeholder="Enter short description of the article" required>
        <input type="text" name="author" placeholder="Enter author name" required>
        <input type="text" name="category" placeholder="Enter category name" required>
        <textarea name="article" cols="10" rows="15" wrap="hard" form="form_article" required></textarea>
        <input type="submit" value="Отправить">
    </form>
</main>

