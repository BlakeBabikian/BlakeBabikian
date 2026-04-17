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
        #navbar {
            transition: top 0.3s ease;
        }
    </style>
</head>
<body style="background-color: rgb(230, 240, 255); padding-top:60px;">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Close Menu</a>
    <a href="#PersonalProject" onclick="w3_close()" class="w3-bar-item w3-button">Projects</a>
    <a href="photos.php" onclick="w3_close()" class="w3-bar-item w3-button">Photos</a>
    <a href="files/Resume.pdf" onclick="w3_close()" class="w3-bar-item w3-button" target="_blank">Resume</a>
    <a href="mailto:BlakeBabikian@gmail.com" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
</nav>

<!-- Top menu -->
<div class="w3-top" style="background-color: rgb(255, 149, 5); z-index:999;" id="navbar">
    <div class="w3-xlarge" style="max-width:1200px;margin:auto; ">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()" style="margin-left: 10px">&#9776; Menu</div>
        <div class="w3-right w3-padding-16" style="margin-right: 30px">Blake Babikian</div>
        <div class="w3-center w3-padding-16">My Portfolio</div>
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
            <img src="images/homePage/headshot.JPG" alt="Headshot" style="width:100%">
        </div>
        <div class="w3-twothird" style="text-align:left; font-size:18px;">
            <p style="margin-top:0;">
                I'm Blake Babikian — an electrical and controls professional with 5+ years in commercial construction, and a full-stack software developer building for iOS and web.
            </p>
            <p>
                At New Age Electrical Services, I estimate and manage commercial electrical projects from bid to close-out — tenant fit-outs, service upgrades, fire alarm, and distribution work for retail, life sciences, and institutional clients. I also work hands-on as a controls electrician on HVAC and building automation systems, partnering with firms on BAS installations and commissioning.
            </p>
            <p>
                On the software side, I'm a developer of Highbrid, an iOS app built in SwiftUI with a Python/Flask backend. I design, build, and deploy the full stack — from the API and database layer to the frontend UI — and manage my own production infrastructure. I've also co-founded and built products from scratch using Node.js, React, and Swift.
            </p>
            <p>
                Outside of work, I'm a skier who spends most weekends in the winter chasing snow at Loon, Sunday River, and wherever else in northern New England has the best conditions. In the summer, I'm usually outside — hiking, grilling, or just finding an excuse to be near water or in the woods. I follow the Bruins and Patriots religiously, watch way too many movies — mostly slow-burn period pieces and heavy documentaries — and spend a probably unhealthy amount of time tracking geopolitics and military affairs. I'm always reading, always building something, and always looking for the next thing to get obsessed with.
            </p>
            <p>B.S. Computer Information Systems, Bentley University 2024.</p>

        </div>
        <div class="w3-center">
            <p>
                <a href="files/Resume.pdf" target="_blank">Resume</a> ·
                <a href="https://www.linkedin.com/in/blake-babikian-730961207" target="_blank">LinkedIn</a> ·
                <a href="https://boxd.it/gVzpJ" target="_blank">Letterboxd</a>
            </p>
        </div>
    </div>
    <div id="PersonalProject"></div>
    <div class="w3-padding-32 w3-center">
        <h3>Selected Projects</h3>
        <p style="font-size:18px;">Systems I've designed, built, and deployed across iOS, web, and infrastructure.</p>
        <hr>
    </div>
    <!-- The Oak Company -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">The Oak Company</h3>
        <hr>
        <div class="w3-third">
            <img src="images/homePage/OakLogo.png" alt="The Oak Company Logo" style="width:100%">
        </div>
        <div class="w3-twothird" style="text-align:left; font-size:18px;">
            <p style="margin-top:0;">
                The Oak Company is an iOS app for product discovery and reviews — currently a work in progress. Users can browse products, leave reviews, earn achievements, and build out a profile. The app is built in SwiftUI with a Python/Flask REST API on the backend, MySQL for data, and deployed on Oracle Cloud behind Nginx/Gunicorn with SSL.
            </p>
            <p>
                So far I've imported and normalized 24,000+ products and 87,000+ reviews from multiple data sources, built out a full achievements and badges system, forum milestones, and a trophy shelf on user profiles. Currently working on social features and refining the UI.
            </p>

        </div>
    </div>
    <!-- Book Up -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Book Up</h3>
        <hr>
        <div class="w3-twothird" style="text-align:left; font-size:18px;">
            <p style="margin-top:0;">
                Book Up was a platform connecting musicians with venues for booking and payments. The project included a Node.js/React web app, a Swift iOS app, a Flask backend with Stripe payment integration, and a self-hosted MariaDB database on a personal NAS accessed via Tailscale.
            </p>
            <p>
                The app is no longer in production, but the iOS app is still viewable on the App Store as a reference. This was a co-founded project where I served as Chief Product Officer and lead developer.
            </p>
            <p>
                <a href="https://apps.apple.com/us/app/book-up/id6744000565" target="_blank">App Store</a>
            </p>
        </div>
        <div class="w3-third">
            <img src="images/homePage/BookUpLogo.png" alt="Book Up Logo" style="width:100%">
        </div>
    </div>
    <!-- Home Lab -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Home Lab</h3>
        <hr>
        <div class="w3-third">
            <img src="images/homePage/ServerPic.png" alt="Home Lab" style="width:100%">
        </div>
        <div class="w3-twothird" style="text-align:left; font-size:18px;">
            <p style="margin-top:0;">
                I run a self-hosted home lab built around a Synology NAS. It handles a few different roles — Plex media server for my personal library, MariaDB and MySQL databases that serve as backends for my app projects, and general file storage and backups.
            </p>
            <p>
                Everything is accessible remotely through Tailscale, so I can manage services and connect to my databases from anywhere without exposing anything to the public internet. It's also where I host the production database for The Oak Company's API.
            </p>
            <p>
                It's a constant work in progress — I'm always tweaking the setup, adding services, or troubleshooting something that broke at 2am.
            </p>
        </div>

    </div>
    <!-- Hash Wallet -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Hash Wallet</h3>
        <hr>
        <div class="w3-twothird" style="text-align:left; font-size:18px;">
            <p style="margin-top:0;">
                A banking-style web app built as a university project, modeled after Venmo. Users can create accounts, send money, and make deposits — with every transaction hashed into a linked chain to ensure data integrity. The system uses four chain structures to track accounts, transactions, deposits, and sessions, with an audit process that validates data by comparing hashes across the chain, similar to blockchain-style verification.
            </p>
            <p>
                Built with Flask, PostgreSQL, and SQLAlchemy, with separate modules handling routing, encryption, and database logic. Originally deployed on Heroku.
            </p>
        </div>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian/Hash_Wallet" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%">
            </a>
        </div>
    </div>
    <!-- Footer -->
    <footer class="w3-center w3-padding-32">
        <h3>Contact</h3>
        <hr>
        <p style="font-size:18px;">
            Always happy to connect — whether it's about work, a project idea, or just talking Bruins, skiing, or what to watch next.
        </p>
        <p style="font-size:18px;">
            <a href="mailto:BlakeBabikian@gmail.com">BlakeBabikian@gmail.com</a> •
            <a href="https://www.linkedin.com/in/blake-babikian-730961207" target="_blank">LinkedIn</a> •
            <a href="https://github.com/BlakeBabikian" target="_blank">GitHub</a>
        </p>
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
        if (currentScrollPos < 50 || prevScrollPos > currentScrollPos) {
            navbar.style.top = "0";
        } else {
            navbar.style.top = `-${navbar.offsetHeight}px`;
        }
        prevScrollPos = currentScrollPos;
    });
</script>

</body>
</html>