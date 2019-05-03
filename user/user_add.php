<?php
    
    require '../classes/userDAO.php';
    $userdao = new UserAccessObject;
    if(isset($_POST['add'])){

        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_register_date = $_POST['user_register_date'];
        $user_password = $_POST['user_password'];

        $userdao->addUser($user_name, $usre_email, $user_register_date, $user_password);
        header('Location: user_tbl.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>User Add</title>
    <style type="text/css">
        
        .jumbotron{

            background-color: #565656;
        }

        .display-4{

            font-family: 'Damion', cursive;

        }
        
        .btn{
            position: absolute;
            left: 80%;
        }

        
    </style>
</head>
<body class="body bg-light">
    <div class="jumbotron text-white">
        <h1 class = "display-4">Add User</h1>
    </div>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="user_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">User E-amil</label>
                <input type="email" name="user_email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Register Date</label>
                <input type="date" name="user_register_date" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="user_password" id="" class="form-control">
            </div>
            <input type="submit" value="Add User" name="add" class="btn  btn-primary">
        </form>
    </div>
</body>
</html>