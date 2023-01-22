<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class NegativeException extends Exception 
        {
            function __construct($str) 
            {
                parent::__construct($str);
            }
        }

        try {
            $x = 10;
            $y = 1;
            $a = -10;
            $b = 5;

            if ($y == 0) 
            {
                throw new NegativeException("Ok new Exception accours");
            }
            $z = $x / $y;

            try
            {
                if ($a < 0) 
                {
                    throw new NegativeException("Negative");
                }
                $c = $a / $b;
            } 
            catch (NegativeException $e)
            {
                echo $e->getMessage();
            }
        } 
        finally 
        {
            print "<br> <br> X=$x, Y=$y <br>";
            print "<br> <br> A=$a, B=$b <br>";
        }
        ?>
    </body>
</html>
