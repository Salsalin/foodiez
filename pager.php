
                <ul class="pager">
                    <?php
                        for($i = 1; $i <= $count_restaurant_number; $i++){
                            if($i == $page){
                                echo "<li class='pager_button'><a class='active_link' href='all_restaurants.php?page=$i'>{$i}</a></li>";
                            }
                            else{
                                echo "<li class='pager_button'><a href='all_restaurants.php?page=$i'>{$i}</a></li>";
                            }
                        }
                    ?>
                  
                </ul>