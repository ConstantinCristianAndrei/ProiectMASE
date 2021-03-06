<?php
  if(isset($_POST['name']) && isset($_POST['comment']) && $_POST['name'] != "" && $_POST['comment'] != ""){
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $handle = fopen("comments.php", "a");
    fwrite($handle, "<b><i>" . $name . "</b><i> spune:<br />" . $comment . "<br /><br />");
    fclose($handle);

  }
  if(isset($_POST['name2']) && isset($_POST['comment2']) && $_POST['name2'] != "" && $_POST['comment2'] != ""){
    $name2 = $_POST['name2'];
    $comment2 = $_POST['comment2'];
    $handle2 = fopen("comments2.php", "a");
    fwrite($handle2, "<b><i>" . $name2 . "</b><i> spune:<br />" . $comment2 . "<br /><br />");
    fclose($handle2);
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

  <title>ProiectAdministration</title>


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
                <li><a href="despre2.php">Proiecte</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cetateni</a>
              <ul>
                <li><a href="sesizari.html">Sesiz??ri</a></li>
                <li><a href="sesizari.html">Reclama??ii</a></li>
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
        <!--<div class=" col-md-6">-->
        <div class="col-md-6">

          <h2>
            Proiecte propuse
          </h2> <br></br>
          <h3><dt>
            100 tramvaie</dt>
          </h3>
          <br></br>
          <p>
            Achizi??ionare tramvaie ??i echipamente necesare ??mbun??t????irii transportului public de c??l??tori pe liniile 1, 10, 21, 25, 32,40, 41 ??i 55.
          </p>
          <p>
            Prin Hot??r??rea Consiliului General al Municipiului Bucure??ti nr.395/21.12.2016, modificat?? prin HCGMB nr.225/19.04.2018 ??i HCGMB nr.277/17.05.2018 s-a aprobat achizioionarea de c??tre Municipiul Bucure??ti a unui num??r de 100 de tramvaie, ??n cadrul unui program multianual pe o durata de 4 ani, ??ncep??nd cu anul 2018, precum ??i studiul de oportunitate ???Achizi??ionare tramvaie ??i echipamente necesare ??mbun??t????irii transportului public de c??l??tori pe liniile 1, 10, 21, 25, 32,40, 41 ??i 55".
          </p>



        </div>
        <div class="col-md-6">

          <img class="img-fluid" src="images/autobuze.jpg" alt="" />

      </div>
      </div>
   <br>
   <div class="row">
     <div class="col-md-6">
       <form action="" method="POST">
         Nume: <br /><input type="text" name="name"> <br />
         Comentariu: <br /><textarea rows="5" cols="40" name="comment"></textarea> <br />
         <input type="submit" value="Posteaza comentariu">
       </form>
       <hr>
       <h3>Alte comentarii: </h3>
       <?php
           include "comments.php"
        ?>
     </div>
   </div>
   <div class="row">
     <div class="col-md-6">

  <h3><dt>
    Primaria Capitalei atrage fonduri europene pentru dotarea spitalelor ??i centrelor sociale ??n lupta contra Covid-19</dt>
  </h3>
<br></br>
  <p>
    La ini??iativa Primarului General, Gabriela Firea, 6 proiecte de hot??r??re pentru atragerea de fonduri europene nerambursabile disponibile prin POIM, pentru lupta ??mpotriva Covid-19 ??i a consecin??elor sale ??n r??ndul popula??iei au fost aprobate ??n ??edin??a CGMB de luni.Proiectele vor fi derulate de institu??ii administrate de Prim??ria Capitalei ??n domeniile s??n??tate (5 proiecte STOP-Covid) ??i social (Proiectul ???Protejati impotriva Covid???)
  </p>
  <p>
    Proiectele nu presupun contribu??ie financiar?? de la bugetul local (cot?? de cofinan??are 0%), ??ntruc??t prin POIM sunt finan??ate integral toate cheltuielile eligibile aferente.
  </p>
  <p>
    Primarul General, Gabriela Firea: ???ASSMB ??i 5 spitale s-au preg??tit sa depuna proiecte pentru accesarea de fonduri europene nerambursabile - direc??ionate ??n contextul epidemiei Covid pentru a proteja s??n??tatea popula??iei, prin POIM (Programul Opera??ional Infrastructur?? Mare) 2014-2020 ??? Axa 4.???
  </p>
  <hr>

  </div>
    <div class="col-md-6">

      <img class="img-fluid" src="images/spital.jpg" alt="" />

    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="POST">
          Nume: <br /><input type="text" name="name2"> <br />
          Comentariu: <br /><textarea rows="5" cols="40" name="comment2"></textarea> <br />
          <input type="submit" value="Posteaza comentariu">
      </form>
    <h3>Alte comentarii: </h3>
    <?php
        include "comments2.php"
     ?>
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
              <span> Adres??: B-dul Regina Elisabeta, Nr. 47, Sector 5, cod postal 050013, Bucuresti
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
    Prim??ria municipiului Bucure??ti ?? 2022. Toate drepturile rezervate.
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
