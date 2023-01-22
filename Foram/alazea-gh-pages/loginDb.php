<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Entry Page</title>
</head>

<body>





    <?php
    session_start();

    $servername = "localhost"; 
    $username = "root"; 
    $passwordDB = "";
  
    $database = "greenlife";


    $email = $_POST['email'];
    $password = $_POST['password'];

    echo
        "Email address : " . $email ."<br>";
    
        

    // Create a connection 
    $conn = mysqli_connect($servername, $username, $passwordDB, $database);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // if (isset($category)) {
    //     $sql = "insert into login (email, password) values ('$email', '$password')";
    // } else {
       
    // }

    $emailCheck="select * from registeruser where (email='$email');";

    $res=mysqli_query($conn,$emailCheck);
    
    if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
              if($row['password'] == $password){
                    echo "Logged In";
              }  else{
                    echo "Incorrect Password";
              }
        }
    }

    else{

        echo "Please Register An Account";

    }
    


    $conn->close();

    ?>
</body>

</html>