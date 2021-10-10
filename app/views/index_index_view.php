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
            <?php
            $c = 0;
            for ($i = 0; $i < count($this->tasks); $i++) {
                if($i === $c){
                    echo "<div class='case' onclick='window.location = \"/sw6/article/" . $this->tasks[$i]['id'] . "\"'>";
                    foreach ($this->tasks as $key => $task) {
                        if ($i === $key){
                            echo "<h3 class='case-name'>" . $task['title'] . "</h3>";
                            echo "<p class='description'>" . $task['description'] . "</p>";
                            $c++;
                        }
                    }
                    echo "</div>";
                }
            }
            ?>
    </div>
</main>