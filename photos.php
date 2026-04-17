<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blake Babikian - Photos</title>
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
        hr {
            border: none;
            height: 2px;
            background-color: rgb(255, 149, 5);
        }
        #navbar {
            transition: top 0.3s ease;
        }
        .photo-grid img {
            cursor: pointer;
            transition: opacity 0.2s ease;
        }
        .photo-grid img:hover {
            opacity: 0.85;
        }
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            cursor: pointer;
            justify-content: center;
            align-items: center;
        }
        .lightbox.active {
            display: flex;
        }
        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }
    </style>
</head>
<body style="background-color: rgb(230, 240, 255); padding-top:60px;">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Close Menu</a>
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="photos.php" onclick="w3_close()" class="w3-bar-item w3-button">Photos</a>
    <a href="files/Resume.pdf" onclick="w3_close()" class="w3-bar-item w3-button" target="_blank">Resume</a>
    <a href="mailto:BlakeBabikian@gmail.com" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
</nav>

<!-- Top menu -->
<div class="w3-top" style="background-color: rgb(255, 149, 5); z-index:999;" id="navbar">
    <div class="w3-xlarge" style="max-width:1200px;margin:auto;">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()" style="margin-left: 10px">&#9776; Menu</div>
        <div class="w3-right w3-padding-16" style="margin-right: 30px">Blake Babikian</div>
        <div class="w3-center w3-padding-16">Photos</div>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-center" style="max-width:1200px;margin-top:80px">
    <h3>Photos</h3>
    <hr>
    <p style="font-size:18px;">A few shots from travels, skiing, and life in general.</p>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="">
    </div>

    <div class="w3-row-padding photo-grid">
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo1.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo2.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo3.jpg" alt="" style="width:100%">
        </div>
    </div>
    <div class="w3-row-padding photo-grid">
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo4.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo5.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo6.jpg" alt="" style="width:100%">
        </div>
    </div>
    <div class="w3-row-padding photo-grid">
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo7.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo8.jpg" alt="" style="width:100%">
        </div>
        <div class="w3-third w3-padding-16">
            <img src="images/photos/photo9.jpg" alt="" style="width:100%">
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-padding-32">
        <p style="font-size:18px;">
            <a href="index.php">← Back to Portfolio</a>
        </p>
    </footer>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    // Lightbox
    function openLightbox(src) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox').classList.add('active');
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('active');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeLightbox();
    });

    document.querySelectorAll('.photo-grid img').forEach(function(img) {
        img.addEventListener('click', function() {
            openLightbox(this.src);
        });
    });

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