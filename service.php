<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Money Transfer Service_Page</title>
    <style>
        body {
            background-color: rgba(112, 111, 111, 0.507);
            color: #ffff;
        }

        .service {
            padding: 100px 0;
        }

        .max-width {
            max-width: 1300px;
            padding: 0px 45px;
            margin: auto;
        }

        h1 {
            text-align: center;
            position: relative;
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 60px;
            padding-bottom: 20px;

        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin: 5px;
        }

        .card {
            margin: 10px;
            padding: 50px 25px;
            width: 500px;
            border-radius: 6px;
            background: #2222;
            text-align: center;
            user-select: none;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .card:hover {
            background-color: #dc143c;
        }

        .box {
            transition: all 0.3s ease;
        }

        .card:hover .box {
            transform: scale(1.05);
        }

        .box i{
            font-size: 50px;
            color: #dc143c;
            transition: color 0.3s ease;
        }

        .card:hover {
            color: #fff;
        }

        .box h3 {
            font-size: 25px;
            padding: 100px 0 7px;
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
    <div class="service">
        <div class="max_width">
            <h1>Our Services</h1>
            <div class="content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-handshake"></i>
                        <h3> Mutual Funds </h3>

                        <p>Start your savings investing in Mutual Funds. It'll help you to grow up.Before investing read
                            the documents carefully.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-coins"></i>
                        <h3> Share Market</h3>
                        <p>Start your savings investing in Share Market. It'll help you to grow up. Before investing
                            read the documents carefully. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="far fa-hand-receiving"></i>
                        <h3> Loans </h3>
                        <p>Get Instant Personal Loan Onlne in 3 secs from Bank . Apply for Personal Loans upto ₹ 20
                            lakhs with ✔️quick disbursal, ✔️attractive interest.
                            Explore a wide range of loan types at Bank based on your requirement and apply online at low
                            interest rates.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-hands-heart"></i>
                        <h3> Government Schemes </h3>
                        <p>Pradhan Mantri Jan Dhan Yojana (PMJDY) ...<br>
                            Jan Dhan to Jan Suraksha- ...<br>
                            Pradhan Mantri Jeevan Jyoti Bima Yojana (PMJJBY) ...<br>
                            Pradhan Mantri Suraksha Bima Yojana (PMSBY)- ...<br>
                            Atal Pension Yojana (APY) ...<br>
                            Pradhan Mantri Mudra Yojana: ...<br>
                            Pradhan Mantri Vaya Vandana Yojana.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>