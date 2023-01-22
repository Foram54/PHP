<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        try{
        $conn = mysqli_connect($hostname, $username, $password);
        if (!$conn) 
        {
            die("error in connection" . mysqli_connect_error());
        } 
        else 
        {
            echo 'connection successful';
        }
        
        $sql = "create database myclg";
        $sqlquery = mysqli_query($conn, $sql);
        
        if ($sqlquery) 
        {
            echo "database created successfully";
        }
        else
        {
            echo"Error".mysqli_error($conn);
        }

        }
        catch(Exception $e)
        {
            echo "datbase is already exits.";
        }
        ?>
    </body>
</html>
