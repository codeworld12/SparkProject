<?php
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include 'config.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bankName = $_POST['bank_name'];
            $AccNo = $_POST['Accountno'];
            $amt = $_POST['Amount'];
            // $T_Id = 0;
            // $T_Id += 1;


            $sql = "INSERT INTO `transaction_detail`(`Cust_Name`, `Bank_Name`, `Cust_Email`, `Account_no`, `Amount`) VALUES ('$name','$bankName','$email','$AccNo','$amt')";

            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Money Transferred Successfully')</script>";
            }
            else {
                echo mysqli_error($conn);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Money Transfer Form</title>
    <style>
        body {
            background: radial-gradient(lightblue,white);
            height: 100%;
        }

        .info h1 {
            width: 800px;
            margin: auto;
            padding: 10px opx 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0 px;
        }

        .main {
            width: 800px;
            margin: auto;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 600px;
            margin: auto;
            padding: 10px 15px;
        }

        .inputfields{
            display: flex;
            padding: 10px 5px;
            margin: 5px 3px;
        }

        .name{
            margin: 5px 10px;
        }

        input{
            margin: 5px;
            padding: 5px 10px;
            border-radius: 2px;
        }

        .submit{
            width: 100px;
            background: black;
            color: #ffffff;
            margin: auto;
            font-size: larger;
            cursor: pointer;
            border-radius: 5px;
        }
        
    </style>
</head>

<body>
    <nav class="navbar background">
        <div class="logo"><img src="icon.jpg" alt="logo"></div>
        <ul class="nav_list">
            <div id="nav-contain">
                <li> <a href="index.php">Home</a></li>
                <li> <a href="about.php">About Us</a></li>
                <li> <a href="service.php">Services</a></li>
                <li> <a href="contact.php">Contact Us</a></li>
            </div>
        </ul>

    </nav>
    <div class="info">
        <div>
            <h1>Money tranfer Form</h1>
        </div>
        <form method="POST" action="">
            <div class="inputfields">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="name" placeholder="Joe Doe"><br>
            </div>
            <div class="inputfields">
                <h2 class="name">Bank Name</h2>
                <input class="Bankname" type="text" name="bank_name" placeholder="Ex: ICICI Bank">
            </div>
            <div class="inputfields">
                <h2 class="name">Email</h2>
                <input class="email" type="text" name="email" placeholder="joe@email.com">
            </div>
            <div class="inputfields">
                <h2 class="name">Account No</h2>
                <input class="Accountno" type="text" name="Accountno" placeholder="1020XXX">
            </div>
            <div class="inputfields">
                <h2 class="name">Amount</h2>
                <input class="Amount" type="text" name="Amount" placeholder="RS.XXXXX">
            </div>

            <input class="submit" type="submit" name="submit" value="Submit">

        </form>
    </div>
</body>

</html>