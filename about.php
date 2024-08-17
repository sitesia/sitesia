<?php 
require_once("admin/inc_admin.php"); 
require_once("admin/inc_con_bd_bis.php");  
require_once("admin/requetesql.php");
require_once("admin/inc_lien_modifier.php");  
require_once("bdconnect/con_bd.php");  
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
  <meta name="keywords" content="Agence web, création de site web professionel, Maintenance Informatique, publicité facebook, création de page facebook" />
  <meta name="description" content="SITESIA - Agence de création de site et application web & maintenance Informatique" />
  <meta name="author" content="SITESIA" />

  <title>sitesia</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <?php include_once("admin/inc_fancybox.php"); ?>

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>
              SITESIA
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.php"> Qui suis-je?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactLink">Contactez-moi</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="">
                <img src="images/call.png" alt="">
                <span>
                  Call : +229 43026177
                </span>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container">
    <?php
   $limite = 1;
    $emplacement = "about";
    $reqa->execute();

                
       $resultats = array();        
      $resultats = $reqa->fetchall();
		if(sizeof($resultats)>0)
		{   
			foreach($resultats as $rowcamp)
			{ $file = $rowcamp['file'];
			  $titre = $rowcamp['titre'];
			  $id = $rowcamp['id'];
                          $texte = $rowcamp['texte'];
              }}            
                         
                          
?>
	

      <div class="row" id="9">
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?php if(isset($file)) echo $file; ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">

          <div class="detail-box">
            <div class="heading_container">
              <h2>
              <?php if(isset($titre)) echo $titre; ?>
              </h2>
            </div>
            <p>
            <?php if(isset($texte)) echo $texte; ?> <br><br><br>
            </p>
          </div>

        </div>
      </div>
    </div>

<div class="textecentre"><?php 
$type ="image,titre,texte";$sel="9";$tailImg="";include("admin/inc_appel_lien_modifier.php");
?></div>



  </section>

  <!-- end about section -->


  <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contactLink">
      <div class="container">
        <div class="heading_container">
          <h2>
           Contactez-moi
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">

          <div id="nom_campagne">
                
                <div class="en_cours"></div>
                 <div id="e1" class="erreur"> </div>
                  <div class="form-group">
                                  <input type="text" class="form-control" id="nom" name="name"  placeholder="Nom et prénoms" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="emails" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="telephone" name="mobile" placeholder="Téléphone" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="objet" name="subject" placeholder="Sujet" required>
        </div>
                  <div class="form-group">
                  <textarea class="form-control" type="textarea" id="message" placeholder="Message"  rows="7"></textarea>
                                         
                  </div>
          
      <button type="button"  class="btn btn-danger pull-right" name="submit" id="submit" value="Envoyer" onclick="envoyer();">Envoyer</button>
       </div>



          </div>
        </div>
      </div>
    </section>


    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">

        <?php
   $limite = 1;
    $emplacement = "desc0";
    $reqa->execute();

                
       $resultats = array();        
      $resultats = $reqa->fetchall();
		if(sizeof($resultats)>0)
		{   
			foreach($resultats as $rowcamp)
			{ $file = $rowcamp['file'];
			  $titre = $rowcamp['titre'];
			  $id = $rowcamp['id'];
                          $texte = $rowcamp['texte'];
              }}            
                         
                          
?>
	

          <div class="col-md-3" id="10">
            <div class="info_logo">
              <h3>
              <?php if(isset($titre)) echo $titre; ?>
              </h3>
              <p>
              <?php if(isset($texte)) echo $texte; ?>
              </p>
            </div>
            <div class="textecentre"><?php 
$type ="titre,texte";$sel="10";$tailImg="";include("admin/inc_appel_lien_modifier.php");
?></div>
          </div>
         



          <div class="col-md-3">
            <div class="info_links">
              <h4>
                LIENS RAPIDES
              </h4>
              <ul class="  ">
                <li class=" ">
                  <a class="" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="active">
                  <a class="" href="about.php">Qui suis-je?</a>
                </li>
                <li class="">
                  <a class="" href="service.php"> Services </a>
                </li>
                <li class="">
                  <a class="" href="#contactLink">Contactez-moi</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                DETAIL CONTACT
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +229 51135763 <br> +229 43026177
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  contact.sitesia@gmail.com
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h4>
                NEWSLETTER
              </h4>
              <form action="">
                <input type="email" placeholder="Entrez votre email">
                <button>
                  S'abonnez
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Tout droit reservé
          
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>

  
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>