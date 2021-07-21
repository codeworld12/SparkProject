<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png" type="image/x-icon">
    <title>Money Transfer</title>
    <style>
        .Section {
            display: flex;
            padding: 30px;
            justify-content: center;
            background: linear-gradient(30deg,rgb(243, 243, 204), lightblue, rgb(63, 57, 57));
            z-index: -1;
        }

        body{
            background: linear-gradient(30deg,rgb(243, 243, 204), lightblue, rgb(63, 57, 57));
        }
       .box-main th {
            padding: 10px 45px 15px 0px;
            word-spacing:10px;
        }
        </style>
</head>

<body>
    <nav class="navbar">
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
    <section class="Section">
        <div class="box-main">
            <table>
                <thead>
                    <tr>
                    <th>Cust_Name</th>
                    <th>Cust_Email</th>
                    <th>Account No</th>
                    <th>Amount</th>
                    <th>Last Transaction Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * From `customer`";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                        <td>
                            ".$row['Cust_Name']."
                        </td>
                        <td>
                        ".$row['Cust_Email']."
                        </td>
                        <td>
                        ".$row['Account_no']."
                        </td>
                        <td>
                        ".$row['Cust_Amt']."
                        </td>
                        <td>
                        ".$row['Last_TrsnDate']."
                        </td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>
</body>

</html>