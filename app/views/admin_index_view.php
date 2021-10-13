<?php
?>
<form action="<?= \core\Route::getUrl('index', 'addnote')?>" method="post">
    <input type="text" name="command" placeholder="Введите название команды">
    <input type="text" name="game" placeholder="Введите кол-во игр">
    <input type="text" name="win" placeholder="Введите кол-во побед">
    <input type="text" name="draw" placeholder="Введите кол-во нечьих">
    <input type="text" name="loss" placeholder="Введите кол-во поражений">
    <input type="text" name="kicking_goals" placeholder="Введите кол-во забитых голов">
    <input type="text" name="loss_goals" placeholder="Введите кол-во пропущенных">
    <input type="text" name="city" placeholder="Введите город">
    <input type="text" name="stadium" placeholder="Введите название стадиона">
    <input type="text" name="coach" placeholder="Введите имя тренера">
    <textarea name="players" rows="10" placeholder="Введите имена игроков команды"></textarea>
    <input type="submit" value="Отправить">
</form>