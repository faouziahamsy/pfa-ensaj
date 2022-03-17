<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./componnents/header.php"?>
</head>
<body>
    <?php include "./componnents/navbar.php"?>
    <h1> login page </h1>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form  method="POST">
                    <div class="form-group ">
                        <label for="user" >user</label>
                        <input type="text" class="form-control" id="user" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="password" >mot de passe</label>
                        <input type="password" class="form-control" id="password" name ="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="login" name="log">
                </form>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST["log"])){
           include "./backend/User.php";
           $user=new User();
           $email=$_POST["email"];
           $pwd=$_POST["password"];
           $result=$user->login($email,$pwd);
        }
    ?>

    <?php include "./componnents/scripts.php"?>

               
              
               
 

</body>
</html>