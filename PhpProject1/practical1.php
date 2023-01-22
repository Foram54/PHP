<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $match1 = array("Rohit Sharma" => 54, "K L Rahul" => 25, "Surya Kumar" => 36, "Virat Kohli" => 62);
        $match2 = array("Rohit Sharma" => 26, "K L Rahul" => 62, "Surya Kumar" => 78, "Virat Kohli" => 35);
        $match3 = array("Rohit Sharma" => 78, "K L Rahul" => 65, "Surya Kumar" => 26, "Virat Kohli" => 37);
        $match4 = array("Rohit Sharma" => 12, "K L Rahul" => 62, "Surya Kumar" => 56, "Virat Kohli" => 78);

        $matches = array($match1, $match2, $match3, $match4);

        $max = 0;
        $man_of_match = "";
        $man_of_series = "";
        $max_series = 0;
        $total_score_rohit = 0;
        $players_62 = array();

        foreach ($matches as $match)
        {
            foreach ($match as $player => $score) 
            {
                if ($score > $max)
                {
                    $max = $score;
                    $man_of_match = $player;
                }
                if ($score > $max_series) 
                {
                    $max_series = $score;
                    $man_of_series = $player;
                }
                if ($score == 62)
                {
                    array_push($players_62, $player);
                }
                if ($player == "Rohit Sharma") 
                {
                    $total_score_rohit += $score;
                }
            }
            
            echo "Man of the match is $man_of_match<br>";
            $max = 0;
        }
        
        echo "Man of the series is $man_of_series<br>";
        echo "Total score of Rohit Sharma is $total_score_rohit<br>";
        echo "Players who scored 62 runs are ";
        
        foreach ($players_62 as $player) 
        {
            echo "$player ";
        }
        echo "<br>";

        $ascending_order = array();
        $descending_order = array();

        foreach ($match1 as $player => $score) 
        {
            array_push($ascending_order, $score);
            array_push($descending_order, $score);
        }

        foreach ($match2 as $player => $score) 
        {
            array_push($ascending_order, $score);
            array_push($descending_order, $score);
        }

        foreach ($match3 as $player => $score)
        {
            array_push($ascending_order, $score);
            array_push($descending_order, $score);
        }

        foreach ($match4 as $player => $score)
        {
            array_push($ascending_order, $score);
            array_push($descending_order, $score);
        }

        sort($ascending_order);
        rsort($descending_order);

        echo "Ascending order of scores is ";
        foreach ($ascending_order as $score) 
        {
            echo "$score ";
        }
        echo "<br>";

        echo "Descending order of scores is ";
        foreach ($descending_order as $score) 
        {
            echo "$score ";
        }
        echo "<br>";

        $ascending_order_names = array();
        $descending_order_names = array();

        foreach ($match1 as $player => $score) 
        {
            array_push($ascending_order_names, $player);
            array_push($descending_order_names, $player);
        }

        foreach ($match2 as $player => $score) 
        {
            array_push($ascending_order_names, $player);
            array_push($descending_order_names, $player);
        }

        foreach ($match3 as $player => $score)
        {
            array_push($ascending_order_names, $player);
            array_push($descending_order_names, $player);
        }

        foreach ($match4 as $player => $score) 
        {
            array_push($ascending_order_names, $player);
            array_push($descending_order_names, $player);
        }

        sort($ascending_order_names);
        rsort($descending_order_names);

        echo "Ascending order of names is ";
        foreach ($ascending_order_names as $player)
        {
            echo "$player ";
        }
        echo "<br>";

        echo "Descending order of names is ";
        foreach ($descending_order_names as $player) 
        {
            echo "$player ";
        }
        echo "<br>";
        ?>
        
    </body>
</html>
