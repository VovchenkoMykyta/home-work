<?php
?>

<ul class="admin_main">
    <li>Пользователь
        <ul class="all_actions_user">
            <li class="actions_user"><a href="">Добавить</a></li>
            <li class="actions_user"><a href="">Удалить</a></li>
            <li class="actions_user"><a href="">Редактировать</a></li>
        </ul>
    </li>
    <li>Статья
        <ul class="all_actions_article">
            <li class="actions_article"><a href="<?= \core\Route::getUrl('admin', 'addarticle')?>">Добавить</a></li>
            <li class="actions_article"><a href="">Удалить</a></li>
            <li class="actions_article"><a href="">Редактировать</a></li>
        </ul>
    </li>
</ul>