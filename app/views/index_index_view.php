<main id="welcome">
    <div class="category">
        <div class="category-name">
            <h2>Shopware 6
                <div class="line"></div>
            </h2>
            <div>
                <a href="<?= \core\Route::getUrl('index', 'check')?>"><i class='fas fa-plus' style='font-size:24px'>Add article</i></a>
            </div>
        </div>
        <div class='category-content'>
            <table>
                <thead>
                <tr>
                    <th class="num" title="Место команды">#</th>
                    <th> Герб</th>
<!--                    <th class="date" title="Положение команд на 10 октября 2021">-->
<!--                        Дата-->
<!--                    </th>-->
                    <th>Команда</th>
                    <th class="games" title="Игры">и</th>
                    <th class="win" title="Выигрыши">в</th>
                    <th class="draw" title="Ничьи">н</th>
                    <th class="lose" title="Поражения">п</th>
                    <th class="goal" title="Забитые голы">заб</th>
                    <th class="miss" title="Пропущенные голы">про</th>
                    <th class="diff" title="Разница забитых и пропущенных голов">разн</th>
                    <th class="score" title="Очки">о</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($this->tasks as $task){
                    $points = (+$task['win_amount'] * 3) + (+$task['draw_amount'] * 1);
                    $kick = +$task['goals_kicking'];
                    $miss = +$task['goals_missing'];
                    $dif = $kick - $miss;
                    echo "<tr>";
                    echo "<td>".$task['id']."</td>";
                    echo "<td><a href='#'>".$task['gerb_path']."</a></td>";
                    echo "<td><a href='#'>".$task['name']."</a></td>";
                    echo "<td>".$task['game_amount']."</td>";
                    echo "<td>".$task['win_amount']."</td>";
                    echo "<td>".$task['draw_amount']."</td>";
                    echo "<td>".$task['loss_amount']."</td>";
                    echo "<td>".$task['goals_kicking']."</td>";
                    echo "<td>".$task['goals_missing']."</td>";
                    echo "<td>".$dif."</td>";
                    echo "<td>".$points."</td>";
                }
                ?>
                </tbody>
            </table>
    </div>
</main>