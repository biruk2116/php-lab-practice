<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Validate.php" method="post">
        <pre>
            <label for="username">username</label> 
        <input type="text" name="username"> <br>
        <label for="Email">Email</label> 
        <input type="Email" name="Email"><br>
        <label for="Age">Age</label>
        <input type="number" name="Age"><br>
         <label for="Age">Password</label>
        <input type="password" name="password">
        <input type="submit" name="Login" value="Log in">
        </pre>
        
    </form>
</body>
</html>

<?php 
     
     if(isset($_POST["Login"])){
        $username = filter_input(INPUT_POST,"username",
                                  FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST,"age",
                             FILTER_SANITIZE_NUMBER_INT ); 
         $Email = filter_input(INPUT_POST,"Email",
                             FILTER_SANITIZE_EMAIL );                        
       

             echo"your username is {$password}";
        if(empty($username)){
            echo"Enter the correct user name";
        }
        else{
            echo"your username is {$username}";
        }
         if(empty($age)){
            echo"Enter the correct age";
        }
        else{
            echo"your age is {$age}";
        }
         if(empty($Email)){
            echo"Enter the correct email ";
        }
        else{
            echo"your email is {$Email}";
        }
     }
        $password=$_POST["password"];
      
      $hash=password_hash($password,PASSWORD_DEFAULT);
    //   echo"your username is {$hash}";

      if(password_verify($password,$hash)){

          echo"you are logged in";
      }
      else{
        echo"please enter the correct code";
      }
?>    