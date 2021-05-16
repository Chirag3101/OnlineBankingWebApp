<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" class="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css" class="stylesheet">
    
    <title>Online Banking System</title>
</head>


<body>
    <?php
        include "navbar.php";
    ?>

    <div class="container-fluid">
        <div class="row intro py-1 style">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome To</h3>
                    <h1>Some Bank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/card.png" alt="banking services" class="img-fluid pt-2">
            </div>
        </div>

        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/capital.png" alt="user image" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
            </div>
            <div class="col-md act">
                <img src="img/money-transfer.png" alt="transfer money" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color : #2785C4;">Send or Receive Money</button></a>
            </div>
            <div class="col-md act">
                <img src="img/documents.png" alt="statement" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color : #2785C4;">View Transaction History</button></a>
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