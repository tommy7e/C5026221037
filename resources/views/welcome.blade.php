<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0.1 flaws and all available now</title>
    <link rel="icon" type="image/x-icon" href="src_ETS/image/icon.ico">
    <link rel="stylesheet" href="src_ETS/mp.css">
    <script src="src_ETS/mp.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Nunito', sans-serif;
        }
        nav{
            border-radius: 0px 0px 30px 30px;
            opacity: 95%;
        }
        .navbar-brand{
            width: 6%;
        }
        .navbar-brand>img{
            width: 100%;
        }
        .carousel-item{
            margin-top: 80px;
        }
        .carousel-item>img{
            width: 100%;
        }
        .card-body{
            text-align: center;
        }
        .card-body > div {
            backface-visibility: hidden;
            transition: transform 300ms;
            transition-timing-function: linear;
        }
        h3{
            font-weight: bold;
        }
        .card-front {
            transform: rotateY(0deg);
        }

        .card-back {
            transform: rotateY(180deg);
            position: absolute;
            width: 55%;
            height: 85%;
            border-radius: 10%;
            background-color: #CCCEDB;
        }

        .isiBack{
            margin: auto;
        }

        .card-body:hover .card-front {
            transform: rotateY(-180deg);
        }

        .card-body:hover .card-back {
            transform: rotateY(0deg);
        }
        .card-front>img{
            border-radius: 100%;
            margin: auto;
        }

        .namaPersonil{
            text-align: center;
        }

        .album{
            width: 100%;
        }
        /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }

        label{
            margin-top: 10px;
        }
    </style>
    <script>
        function validateForm() {
            //let x = document.forms["myForm"]["fname"].value;
            var nama = document.getElementById("fname");
            var namab = document.getElementById("lname");
            var num = document.getElementById("num");
            var mail = document.getElementById("mail");
            var numStr = "" + num.value;
            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            console.log(nama.value);
            console.log(namab.value);
            console.log(num.value);
            console.log(mail.value);
            console.log(numStr.substring(3,).length);

            if (nama.value == "" || namab.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("Nama tidak boleh kosong.");
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (!isNaN(nama.value)){
                alert("Nama diisi huruf.");
                return false;
            }
            if (num.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("Nomor telepon tidak boleh kosong.");
                num.focus();
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (isNaN(num.value)) { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("Nomor telepon harus berupa angka.");
                num.focus();
                num.value="";
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (numStr.substring(0,3) != "+62") { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("Nomor telepon harus region Indonesia.");
                num.focus();
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (!(numStr.substring(3,).length >9 && numStr.substring(3,).length <12)) { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("Nomor telepon harus 10-11 digit.");
                num.focus();
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (mail.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
                alert("email tidak boleh kosong.");
                mail.focus();
                return false; //function bukan void, ada return value
                //stop, ga dikirim ke server
            }
            if (!mail.value.match(validRegex)) {

                alert("Invalid email address!");

                mail.focus();

                return false;
            }
            return true; //boleh diberi boleh tidak, karena default function adalah true. Pencegahan ilai false berfungsi supaya tidak jadi dikirimkan
        }

    </script>
</head>
<body>
    <nav class="navbar navbar-expand bg-light navbar-light fixed-top" id="navbar">
        <a class="navbar-brand" target="_blank" href="https://open.spotify.com/intl-id/artist/5069JTmv5ZDyPeZaCCXiCg"> <img src="src_ETS/image/nav.png" alt="nav-logo"> </a>
        <ul class="navbar-nav" style="font-weight: bold;">
            <li class="nav-item" >
                <a class="nav-link" href="#01"> Personnel </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#02"> Latest Album </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#03"> Subscribe </a>
            </li>
            <li class="nav-item" style="text-decoration: none">
                <a class="nav-link" href="http://127.0.0.1:8000/hyperlink" target="_blank"> Explore More </a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div id="caro" class="carousel slide mx-2" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#caro" data-slide-to="0" class="active"></li>
              <li data-target="#caro" data-slide-to="1"></li>
              <li data-target="#caro" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block" src="src_ETS/image/caro1.jpg" alt="First slide">
                  <div class="carousel-caption d-block" id="capt">
                      <h5>0.1 flaws tour</h5>
                      <p>Bangkok 07.00 PM GMT+7</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="src_ETS/image/caro2.jpg" alt="Second slide">
                  <div class="carousel-caption d-block" id="capt">
                      <h5>Wave to Earth</h5>
                      <p>Essentially, be the one who waves.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="src_ETS/image/caro3.jpg" alt="Third slide">
                  <div class="carousel-caption d-block" id="capt">
                      <h5>Thank You!</h5>
                      <p>Such an amazing support throughout the years.</p>
                  </div>
                </div>
            </div>
        </div>
        <h2 class="mt-3" id="01">Meet The Personnel</h2>
        <div id="kartu">
            <card class="row item">
                <div class="col-4 card-body d-flex justify-content-around">
                    <div class="card-front">
                        <img style="width: 60%" src="src_ETS/image/p1.jpg" alt="personel1">
                    </div>
                    <div class="card-back border">
                        <div class="isiBack p-1">
                            <p>
                                <br>
                                Name: Kim Daniel (김다니엘) <br>
                                Birth Date: 03/18/1997 <br>
                                Zodiac: Pisces <br>
                                Height: 175 cm (5'7”) <br>
                                Blood Type: AB <br>
                                MBTI: INFJ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-body d-flex justify-content-around border-left border-right">
                    <div class="card-front">
                        <img style="width: 60%" src="src_ETS/image/p2.jpg" alt="personel2">
                    </div>
                    <div class="card-back border">
                        <div class="isiBack p-1">
                            <p>
                                <br>
                                Name: Cha Soonjong (차순종) <br>
                                Birth Date: 08/13/1997 <br>
                                Zodiac: Leo <br>
                                Height: 17 cm (5'7”) <br>
                                Blood Type: AB <br>
                                MBTI: ENFJ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-body d-flex justify-content-around">
                    <div class="card-front">
                        <img style="width: 60%" src="src_ETS/image/p3.jpg" alt="personel3">
                    </div>
                    <div class="card-back border">
                        <div class="isiBack p-1">
                            <p>
                                <br>
                                Name: Shin Donggyu (신동규) <br>
                                Birth Date: 01/23/1998 <br>
                                Zodiac: Aquarius <br>
                                Height: 170 cm (5'7”) <br>
                                Blood Type: N/A <br>
                                MBTI: ENFJ
                            </p>
                        </div>
                    </div>
                </div>
            </card>
            <div class="row namaPersonil">
                <div class="col-4">
                    <h3>Daniel Kim</h3>
                    <p> as Vocalist</p>
                </div>
                <div class="col-4">
                    <h3>John Cha</h3>
                    <p> as Bassist</p>
                </div>
                <div class="col-4">
                    <h3>Dong Q</h3>
                    <p> as Drummer</p>
                </div>
            </div>
        </div>
        <h2 class="mt-3" id="02"> 0.1 flaws and all </h2>
        <div class="row alb">
            <div class="col-3 border border-right-0">
                <img class="album" style="padding-top: 5px;" src="src_ETS/image/album.jpg" alt="0.1 flaws and all - wave to earth" id="myImg">
                <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                </div>
                <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");
                    var navbar = document.getElementById("navbar");

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById("myImg");
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                        navbar.style.display = "none";
                    }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                        navbar.style.display = "flex";
                    }
                </script>
            </div>
            <div class="col-9 border pt-2" style="background-color: #cccccc42">
                <h5><b>The Latest Album of Wave to Earth</b></h5>
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify;">
                            A perfect experience of flawless exploration, 0.1 flaws and all packed with 2 discs. Disc 1 really cements mellow and heavy melodic music into one long song. While Disc 2, more weight and depth comes within as if the bright visions of the beach and singing in the moonlight.
                        </p>
                    </div>
                </div>
                <h5> Titles:</h5>
                <div class="row">
                    <div class="col-3">
                        <ul>
                            <li>
                                bad
                            </li>
                            <li>
                                sunny days
                            </li>
                            <li>
                                peach eyes
                            </li>
                            <li>
                                evening glow
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul>
                            <li>
                                pink horizon
                            </li>
                            <li>
                            pink
                            </li>
                            <li>
                                calla
                            </li>
                            <li>
                                love.
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul>
                            <li>
                                homesick
                            </li>
                            <li>
                                driedflower
                            </li>
                            <li>
                                sunburn
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul>
                            <li>
                                akira
                            </li>
                            <li>
                                nouvelle vague
                            </li>
                            <li>
                                so real
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2 border border-top-0 d-block">
            <h5 class="pl-4">Ready to wave?</h5>
            <div class="player">
                <div class="wrapper">
                    <div class="details">
                        <div class="now-playing"></div>
                        <div class="track-art"></div>
                        <div class="track-name"></div>
                        <div class="track-artist"></div>
                    </div>

                    <div class="slider_container">
                        <div class="current-time">00:00</div>
                         <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                         <div class="total-duration">00:00</div>
                    </div>

                    <div class="slider_container">
                        <i class="fa fa-volume-down"></i>
                         <input type="range" min="1" max="100" value="100" class="volume_slider" onchange="setVolume()">
                         <i class="fa fa-volume-up"></i>
                    </div>

                    <div class="buttons">
                        <div class="random-track" onclick="randomTrack()">
                            <i class="fas fa-random fa-2x" title="random"></i>
                        </div>
                        <div class="prev-track" onclick="prevTrack()">
                             <i class="fa fa-step-backward fa-2x"></i>
                         </div>
                         <div class="playpause-track" onclick="playpauseTrack()">
                             <i class="fa fa-play-circle fa-5x"></i>
                         </div>
                         <div class="next-track" onclick="nextTrack()">
                             <i class="fa fa-step-forward fa-2x"></i>
                         </div>
                         <div class="repeat-track" onclick="repeatTrack()">
                             <i class="fa fa-repeat fa-2x" title="repeat"></i>
                         </div>
                    </div>

                     <div id="wave">
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                         <span class="stroke"></span>
                     </div>
                </div>
            </div>
    </div>
    <div class="row">
        <h2 class="mt-3" id="03"> Get The Latest News </h2>
    </div>
    <div id="my_form">
        <form class="container-fluid" name="myForm" action="https://open.spotify.com/intl-id/artist/5069JTmv5ZDyPeZaCCXiCg"  onsubmit="return validateForm()" method="post" target="_blank">
            <label>Name:</label>
            <div class="row">
                <div class="col-6">
                    <input placeholder="first" type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-6">
                    <input placeholder="last" type="text" id="lname" name="lname" class="form-control">
                </div>
            </div>
            <label>Phone Number:</label>
            <input value="+62" type="text" id="num" name="num" class="form-control">
            <label for="mail">E-Mail:</label>
            <input placeholder="email" type="text" id="mail" name="mail" class="form-control">
            <br>
            <input type="reset" value="reset" class="border-0 bg-white float-left">
            <input id="nextStep" type="submit" value="Submit" class="btn btn-success d-block mx-auto my-3">
        </form>
    </div>
</body>
