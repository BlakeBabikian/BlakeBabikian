<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blake Babikian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
    <style>
        body,h1,h2,h3,h4,h6 {
            font-family: "Karma", sans-serif;
            color: rgb(3, 29, 68);
        }
        p,h5 {
            font-family: "Karma", sans-serif;
            color: rgb(18, 22, 25);
        }
        .w3-bar-block .w3-bar-item {padding:20px}
        html {
            scroll-behavior: smooth;
        }
        h3 {
            font-weight: bolder;
        }
        li {
            font-size: 16px;
            text-align: right;
        }
        hr {
            border: none;
            height: 2px;
            background-color: rgb(255, 149, 5);
        }
    </style>
</head>
<body style="background-color: rgb(230, 240, 255)">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Close Menu</a>
    <a href="#PersonalProject" onclick="w3_close()" class="w3-bar-item w3-button">Projects</a>
</nav>

<!-- Top menu -->
<div class="w3-top" style="background-color: rgb(255, 149, 5)" id="navbar">
    <div class="w3-xlarge" style="max-width:1200px;margin:auto; ">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()" style="margin-left: 10px">&#9776; Menu</div>
        <div class="w3-right w3-padding-16" style="margin-right: 30px">Blake Babikian</div>
        <div class="w3-center w3-padding-16">My Code</div>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-center" style="max-width:1200px;margin-top:80px">
    <div class="w3-image">
        <img src="images/homePage/homePicture.jpeg" alt="Picture of rice patty Bali Indonesia" style="width:100%">
        <p class="w3-left">This is a picture I took of rice fields in Bali Indonesia, May 2023.</p>
    </div>
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">About</h3>
        <hr>
        <div class="w3-third">
            <a href="files/Resume.pdf" target="_blank">
                <img src="images/homePage/headshot.JPG" alt="Headshot" style="width:100%"></a>
            <h3>Attached Document</h3>
            <h5>Resume</h5>
            <a href="https://www.linkedin.com/in/blake-babikian-730961207"
               target="_blank">LinkedIn</a>
        </div>
        <p>
            I'm Blake Babikian — an electrical and controls professional with 5+ years in commercial construction, and a full-stack software developer on the side. I estimate and manage commercial electrical projects, work as a controls electrician on HVAC and building automation systems, and build iOS and web apps independently. B.S. Computer Information Systems, Bentley University 2024.
        </p>
    </div>
    <div id="PersonalProject"></div>
    <br>
    <br>
    <br>
    <!-- Hash Wallet -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Hash Wallet</h3>
        <hr>
        <p>The project involves the development of an ATM/banking app, akin to Venmo, with four Python files: wsgi.py
            for session management, backEnd.py for the Flask app, encrypt.py for encryption and database.py for database
            functions. It utilizes a Postgres database through SQLAlchemy, featuring four main chains: AccountChain for
            accounts and balances, TransactionChain to record all transactions, DepositChain to track deposits, and
            SessionChain to log logins. The data security strategy involves hashing transaction data (sender_id,
            receiver_id, amount, date, time, old_hash, new_hash) to ensure data integrity. An audit process validates
            data by comparing it to the hash and verifying that new hashes match the next chain link's old hash. This
            design ensures data integrity and security within the banking app.</p>
        <div class="w3-third">
            <a href="https://www.hashwallet.digital" target="_blank">
                <img src="images/homePage/computer.png" alt="Image of computer" style="width:100%"></a>
            <h3>Web Application</h3>
            <h5>Hash-Wallet</h5>
            <p>See the app</p>
        </div>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian/Hash_Wallet" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%"></a>
            <h3>Git Repository</h3>
            <h5>Hash-Wallet</h5>
            <p>See the code</p>
        </div>
        <div class="w3-third">
            <a href="files/Hash-Wallet.pdf" target="_blank">
                <img src="images/homePage/gears.png" alt="Image of gear" style="width:100%"></a>
            <h3>App Mechanics</h3>
            <h5>Hash-Wallet</h5>
            <p>See how the app works</p>
        </div>
    </div>
    <!-- The Oak Company -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">The Oak Company</h3>
        <hr>
        <p>iOS app for product discovery and reviews. SwiftUI frontend, Python Flask REST API, MySQL on Oracle Cloud
            behind Nginx/Gunicorn with SSL. Imported and normalized 24,000+ products and 87,000+ reviews from multiple
            data sources.</p>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%"></a>
            <h3>Git Repository</h3>
            <h5>The Oak Company</h5>
            <p>See the code</p>
        </div>
    </div>
    <!-- Book Up -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Book Up</h3>
        <hr>
        <p>Platform connecting musicians with venues for booking and payments. Node.js/React web app, Swift iOS app,
            Flask backend, Stripe payment integration, self-hosted MariaDB on a personal NAS via Tailscale.</p>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%"></a>
            <h3>Git Repository</h3>
            <h5>Book Up</h5>
            <p>See the code</p>
        </div>
    </div>
    <!-- Home Lab -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Home Lab</h3>
        <hr>
        <p>Self-hosted infrastructure on a Synology NAS — Plex media server, MariaDB for app backends, remote access
            via Tailscale.</p>
        <div class="w3-third">
            <img src="images/homePage/gears.png" alt="Image of gear" style="width:100%">
            <h3>Infrastructure</h3>
            <h5>Home Lab</h5>
            <p>Self-hosted setup</p>
        </div>
    </div>
    <hr>
    <!-- Footer -->
    <footer>
        <div class="w3-left w3-serif">
            <h3 style="text-align: left">Contact:</h3>
            <h4>Blake Babikian  -  BlakeBabikian@gmail.com  -  +1 (978) 460 7731  -  <a href="https://www.linkedin.com/in/blake-babikian-730961207"
                                                                                  target="_blank">LinkedIn</a></h4>
        </div>
    </footer>

    <!-- End page content -->
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    let prevScrollPos = window.scrollY;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        const currentScrollPos = window.scrollY;
        if (prevScrollPos > currentScrollPos) {
            navbar.style.top = "0";
        } else {
            navbar.style.top = `-${navbar.offsetHeight}px`;
        }
        prevScrollPos = currentScrollPos;
    });
</script>

</body>
</html>
