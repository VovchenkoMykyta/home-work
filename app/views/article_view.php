<?php
$name = '';
$coach = '';
$stadium = '';
$pageView = '';
$pageAdd = '';
$players = [];
$team = [];
$game = '';
$win = '';
$draw = '';
$loss = '';
$kicking_goals = '';
$loss_goals = '';
$teams = null;
$teamPlayers = [];
foreach ($this->tasks as $key => $task){
    if($key === 2){
        foreach ($task as $item){
            $name = $item['name'];
            $coach = $item['coach'];
            $stadium = $item['stadium'];
            $players[] = json_decode($item['players_in_team']);
            $game = $item['game_amount'];
            $win = $item['win_amount'];
            $draw = $item['draw_amount'];
            $loss = $item['loss_amount'];
            $kicking_goals = $item['goals_kicking'];
            $loss_goals = $item['goals_missing'];
        }
    }
    if ($key === 1){
        $pageView = $task['table_leader'];
        $pageAdd = $task['table_stat'];
    }
    if ($key === 2){
        $teams[] = $this->tasks[2];
        foreach ($teams as $nub){
            foreach ($nub as $key => $value){
                $score = (+$value['win_amount']*3) + +$value['draw_amount'];
                array_push($value, $score);
                $team[$key] = $value;
                $scores[] = +$score;
            }
        }
        usort($team, function ($a, $b){
           return -($a[0] - $b[0]);
        });
    }
    if($key === 3){
        $teamPlayers = $this->tasks[3];
    }
}
?>


<section class="article">
    <div class="article-ct nw">
        <div class="article-title">
            <div class="article-img">
                <img src="../../img/" alt="" />
            </div>
            <h1><?=$name?></h1>
            <p>Главный тренер: <?=$coach?></p>
            <p>Стадион: <?=$stadium?></p>
            <div class="list-pl">Игроки:
                <ul>
                    <?php
                        foreach ($players as $player){
                            foreach ($player as $item){
                                echo "<li>".$item."</li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="article-items">
            <div class="article-text">
                <div class="text-field">
                    <h4>Ladder EPL</h4>
                    <?php
                    include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $pageView;
                    ?>
                </div>
                <div class="text-field">
                    <h4>Best statistics</h4>
                    <?php
                    include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $pageAdd;
                    ?>
                    <a href="<?= \core\Route::getUrl('index', 'index')?>">Назад</a>
                </div>
            </div>
        </div>
    </div>
</section>
