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

  <title>Royal</title>

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
              <a class="nav-link" href="about.html">Despre noi </a>
              <ul>
                <li><a href="#">Executivul</a></li>
                <li><a href="#">Proiecte</a></li>
                <li><a href="#">Buget</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Cetateni</a>
              <ul>
                <li><a href="#">Sesiz??ri</a></li>
                <li><a href="#">Reclama??ii</a></li>
                <li><a href="#">Sugestii</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control nav_search-input mr-sm-2 d-none" type="search" placeholder="Search"
              aria-label="Search" value="" />
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </nav>
    </div>
  </header>
<section class="welcome_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class=" col-md-6">
  <form class="contact_form"action= "sesizariform.php" method="post">
    <label for="name">Numele:</label>
    <input type="text" name="nume" placeholder="Introduceti numele"><br><br>
    <label for="name">E-mailul:</label>
    <input type="text" name="email" placeholder="Introduceti adresa e-mail"><br><br>
    <label for="name">Genul:</label>
    Masculin: <input type="radio" name="gen" value="Masculin">
    Feminin: <input type="radio" name="gen" value="Feminin"><br><br>
    <label for="select">Tipul formularului:</label>
    <select name="select">
      <option value="none">Neselectat</option>
      <option value="sesizare">Sesizare</option>
      <option value="reclamatie">Reclamatie</option>
    </select>
    <br><br>
    <textarea name="mesaj" rows="8" cols="80" placeholder="Introduceti mesajul"></textarea>
    <input type="submit" name="submit">
  </form>
  </div>
  </div>
  </div>
</section>
<!-- end welcome section -->



<!-- info section -->
<section class="info_section layout_padding">
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
