<?php
   if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
       //shoudl do validation on passwords before submitting form
    $sql = "INSERT INTO members (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($dbCon, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbCon);
    }

       mysqli_close($dbCon);
   }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register for Membership</title>
    </head>
    <body>
        <h1>Register for Membership</h1>
        <form method="post" action="register.php">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="text" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Join Member" />
        
        </form>
    
    </body>

</html>