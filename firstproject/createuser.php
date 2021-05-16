<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    
</head>
<body style="background-color : #82E0AA;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>
                   alert('User created successfully');
                   window.location = 'transfermoney.php';
                   </script>";
        }
    }
?>

<?php
    include 'navbar.php';
?>

    <h2 class="text-center pt-4" style="color : black;">Create a User</h2>
    <br>

    <div class="backgroud">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipse"></div>
                        <div class="screen-header-ellipse"></div>
                        <div class="screen-header-ellipse"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <img src="img/profile.png" alt="" class="img-fluid" style="border: none">
                    </div>
                    <div class="screen-body-item">
                        <form method="post" action="" class="app-form">
                            <div class="app-form-group">
                                <input placeholder="Name" name="name" type="text" class="app-form-control" required>
                            </div>
                            <div class="app-form-group">
                                <input placeholder="Email" name="email" type="email" class="app-form-control" required>
                            </div>
                            <div class="app-form-group">
                                <input placeholder="Balance" name="balance" type="number" class="app-form-control" required>
                            </div>
                            <br>
                            <div class="app-form-button">
                                <input type="submit" class="app-form-button" value="CREATE" name="submit"></input>
                                <input type="reset"  class="app-form-button" value="CLEAR" name="clear"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>Created By Chirag Bhatia</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>