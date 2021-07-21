<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Money Transfer Contact Us</title>
    <style>
        body {
            background: linear-gradient(30deg,rgb(243, 243, 204), lightgreen, rgb(63, 57, 57));
            z-index: -1;
        }

        .contact {
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
        }

        .content {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 5px;
        }

        .content h1 {
            padding: 5px;
            text-align: center;
            font-family: Impact, Haettenschweiler, sans-serif;
        }

        .box {
            display: flex;
            padding: 20px;
            margin: 10px 15px;
            justify-content: center;
            align-items: center;
            border-top: 1px solid black;
        }

        .icon {
            display: flex;
            padding: 5px;
            justify-content: center;
            align-items: center;
        }

        .text {
            display: flex;
            flex-direction: column;
            padding: 10px;
            margin: 5px;
        }

        .contactform {
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin: 10px 15px;
            justify-content: center;
            align-items: center;
            border-top: 1px solid black;
        }

        form {
            margin: 20px;
        }

        .inputbox {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        input {
            padding: 5px;
            margin: 5px;
        }

        button {
            cursor: pointer;
            margin-left: 50px;
            padding: 8px 20px;
            margin: 7px 0;
            border: 2px solid rgb(92, 27, 27);
            border-radius: 80px;
            color: blue;
            cursor: pointer;

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
                <li> <a href="contact.php">Contact</a></li>
            </div>
        </ul>
    </nav>
    <!-- <div class="pic"><img src="Image/Back.jpg" alt="pic"></div> -->
    <section class="contact">
        <div class="content">
            <h1>Welcome here..</h1>
            <p>If there any query regarding banking system or to improve the system you can contact us. So that in
                future it'll be more reliable to use.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fal fa-address-card"></i>
                        <div class="text">
                            <h3>Address</h3>
                            <p>321 Kalpataru Residency,<br>Sion Laxmi Baugh<br>Mumbai:400022</p>
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>480-321-6999</p>
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                        <div class="text">
                            <h3>Email</h3>
                            <p>shivamgupta22296@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <h2> <i class="far fa-paper-plane"></i> Send Message</h2>
                    <form>
                        <div class="inputbox">
                            <span>Full Name</span>
                            <input type="text" name="" required="required">
                        </div>
                        <div class="inputbox">
                            <span>Email</span>
                            <input type="text" name="" required="required">
                        </div>
                        <div class="inputbox">
                            <span>Type Your Message here...</span>
                            <textarea required="required"></textarea>
                        </div>
                        <div class="inputbox">
                            <button>Send</button>
                        </div>
                    </form>
                </div>

    </section>
</body>

</html>