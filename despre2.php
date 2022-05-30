<?php
  if($_POST){
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $handle = fopen("comments.php", "a");
    fwrite($handle, "<b><i>" . $name . "</b><i> spune:<br />" . $comment . "<br /><br />");
    fclose($handle);
  }

?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Comment Box</title>


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    ul li:hover {background: #555; color: #fff !important;}
    ul li:hover ul {display: block; color: #fff !important;}
    ul li ul {
      position: relative;
      width: 83.5px;
      display: none;
      color: #fff !important;
    }
    ul li ul li {
      background: #555;
      display: block;
      margin-left: -30px;
      color: #fff !important;
    }
    ul li ul li a {display:block !important; color: #fff !important;}
    ul li ul li:hover {background: #666; color: #fff !important;}
  </style>
</head>

<body>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <div class="logo_box">
            <img src="images/logo.png" alt="" />
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Acasa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Despre noi </a>
              <ul>
                <li><a href="despre.html">Executivul</a></li>
                <li><a href="despre2.html">Proiecte</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cetateni</a>
              <ul>
                <li><a href="sesizari.html">Sesizări</a></li>
                <li><a href="sesizari.html">Reclamații</a></li>
                <li><a href="sugestii.html">Sugestii</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#home_section">Contact</a>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </header>

  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
        <div>
  <h2>
    Proiecte propuse
  </h2> <br></br>
  <h3><dt>
    100 tramvaie</dt>
  </h3>
<br></br>
  <p>
    Achiziționare tramvaie și echipamente necesare îmbunătățirii transportului public de călători pe liniile 1, 10, 21, 25, 32,40, 41 și 55.
  </p>
  <p>
    Prin Hotărârea Consiliului General al Municipiului Bucureşti nr.395/21.12.2016, modificată prin HCGMB nr.225/19.04.2018 și HCGMB nr.277/17.05.2018 s-a aprobat achizioionarea de către Municipiul Bucureşti a unui număr de 100 de tramvaie, în cadrul unui program multianual pe o durata de 4 ani, începând cu anul 2018, precum și studiul de oportunitate “Achiziționare tramvaie și echipamente necesare îmbunătățirii transportului public de călători pe liniile 1, 10, 21, 25, 32,40, 41 și 55".
  </p>
   <h1>Post a comment:</h1>
   <form action="" method="POST">
       Nume: <br /><input type="text" name="name"> <br />
       Comentariu: <br /><textarea rows="10" cols="30" name="comment"></textarea> <br />
       <input type="submit" value="Post comment">
   </form>
   <hr>
   <h1>Alte comentarii: </h1>
   <?php
       include "comments.php"
    ?>
   <br>
  <h3><dt>
    Primaria Capitalei atrage fonduri europene pentru dotarea spitalelor și centrelor sociale în lupta contra Covid-19</dt>
  </h3>
<br></br>
  <p>
    La inițiativa Primarului General, Gabriela Firea, 6 proiecte de hotărâre pentru atragerea de fonduri europene nerambursabile disponibile prin POIM, pentru lupta împotriva Covid-19 și a consecințelor sale în rândul populației au fost aprobate în ședința CGMB de luni.Proiectele vor fi derulate de instituții administrate de Primăria Capitalei în domeniile sănătate (5 proiecte STOP-Covid) și social (Proiectul ”Protejati impotriva Covid”)
  </p>
  <p>
    Proiectele nu presupun contribuție financiară de la bugetul local (cotă de cofinanțare 0%), întrucât prin POIM sunt finanțate integral toate cheltuielile eligibile aferente.
  </p>
  <p>
    Primarul General, Gabriela Firea: „ASSMB și 5 spitale s-au pregătit sa depuna proiecte pentru accesarea de fonduri europene nerambursabile - direcționate în contextul epidemiei Covid pentru a proteja sănătatea populației, prin POIM (Programul Operațional Infrastructură Mare) 2014-2020 – Axa 4.”
  </p>
  <input type="text" id="comment-box2" size="65" placeholder="Enter comment">
    <button id="post2">Post</button>
    <ul id="unordered2">

   </ul>
   <script src="codetest2.js"></script>

    </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail">

              <img class="img-fluid" src="images/autobuze.jpg" alt="" />
              <div>
                <br>
                <br> <br> <br>
              </div>
              <img class="img-fluid" src="images/spital.jpg" alt="" />
              </div>
              </div>
</div>
</div>
  </section>

<!-- info section -->
<section class="info_section layout_padding" id="home_section">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 address_container">
        <div>
          <h3>
            Contact:
          </h3>
          <div class="address_link-container">
            <a href="">
              <img src="images/location.png" alt="">
              <span> Adresă: B-dul Regina Elisabeta, Nr. 47, Sector 5, cod postal 050013, Bucuresti
              </span>
            </a>
            <a href="">
              <img src="images/phone.png" alt="">
              <span> Tel: (+4) 021 305.55.55
              </span>
            </a>
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                Email: relatiipublice@pmb.ro
              </span>
            </a>
          </div>
          <div class=" col-md-12 news_container">
              <div class="social_container">
                <div>
                  <img src="images/fb.png" alt="">
                </div>
                <div>
                  <img src="images/twitter.png" alt="">
                </div>
                <div>
                  <img src="images/linkedin.png" alt="">
                </div>
                <div>
                  <img src="images/youtube.png" alt="">
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->


<!-- footer section -->
<section class="container-fluid footer_section">
  <p>
    Primăria municipiului București © 2022. Toate drepturile rezervate.
  </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
</script>
<script type="text/javascript">
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
</script>

<script>
  $(".nav_search-btn").click(function () {
    if ($(".nav_search-input").hasClass("d-none")) {
      event.preventDefault();
      $(".nav_search-input")
        .animate({
            left: "-1000px"
          },
          "1000000"
        )
        .removeClass("d-none");
    } else {
      $(".nav_search-input")
        .animate({
            left: "0px"
          },
          "1000000"
        )
        .addClass("d-none");
    }
  });
</script>

</body>