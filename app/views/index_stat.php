<?php
$best = $teamPlayers;
$yellow = $teamPlayers;
$red = $teamPlayers;
foreach ($teamPlayers as $team){
    usort($teamPlayers, function ($a, $b){
        return -($a['goals_kicking'] - $b['goals_kicking']);
    });
}

foreach ($best as $item){
    usort($best, function ($a, $b){
        return -($a['assist'] - $b['assist']);
    });
}

foreach ($yellow as $item){
    usort($yellow, function ($a, $b){
        return -($a['yellow_card'] - $b['yellow_card']);
    });
}

foreach ($red as $item) {
    usort($red, function ($a, $b) {
        return -($a['red_card'] - $b['red_card']);
    });
}


?>
<table>
    <caption>Лучшие бомбардиры</caption>
    <thead>
    <tr>
        <th>#</th>
        <th>Имя Фамилия</th>
        <th>Забитые мячи</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($teamPlayers as $i => $player){
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".$player['name'] ." ". $player['lastname']."</td>";
        echo "<td>".$player['goals_kicking']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</br>
<table>
    <caption>Лучший ассистент</caption>
    <thead>
    <tr>
        <th>#</th>
        <th>Имя Фамилия</th>
        <th>Голевые пассы</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($best as $i => $player){
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".$player['name'] ." ". $player['lastname']."</td>";
        echo "<td>".$player['assist']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</br>
<table>
    <caption>Лучший желторотик</caption>
    <thead>
    <tr>
        <th>#</th>
        <th>Имя Фамилия</th>
        <th>Желтые карты</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($yellow as $i => $player){
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".$player['name'] ." ". $player['lastname']."</td>";
        echo "<td>".$player['yellow_card']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</br>
<table>
    <caption>Самый грязный</caption>
    <thead>
    <tr>
        <th>#</th>
        <th>Имя Фамилия</th>
        <th>Красные карты</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($red as $i => $player){
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".$player['name'] ." ". $player['lastname']."</td>";
        echo "<td>".$player['red_card']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</br>