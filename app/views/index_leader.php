<?php
?>

<table class="main-tournament-table">
    <thead>
    <tr>
        <th class="num" title="Место команды">#</th>
        <th>Название</th>
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
        foreach($team as $key => $value){
            $points = (+$value['win_amount'] * 3) + (+$value['draw_amount'] * 1);
            $kick = +$value['goals_kicking'];
            $miss = +$value['goals_missing'];
            $dif = $kick - $miss;
            echo "<tr>";
            echo "<td class='num'>".($key+1)."</td>";
            echo "<td><a href=".\core\Route::getUrl('index', 'commandview')."/".$value['name'].">".$value['name']."</a></td>";
            echo "<td class='games'>".$value['game_amount']."</td>";
            echo "<td class='win'>".$value['win_amount']."</td>";
            echo "<td class='draw'>".$value['draw_amount']."</td>";
            echo "<td class='lose'>".$value['loss_amount']."</td>";
            echo "<td class='miss'>".$value['goals_kicking']."</td>";
            echo "<td class='goal'>".$value['goals_missing']."</td>";
            echo "<td class='diff'>".$dif."</td>";
            echo "<td class='score'>".$points."</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>