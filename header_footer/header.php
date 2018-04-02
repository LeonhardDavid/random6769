<!DOCTYPE html>
<html>
  <head>
    <title> Webpage </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="css/colors.css" type="text/css"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Emoji CSS -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-custom" style="z-index: 9999;">

      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"> </a>

    <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
      <ul class="navbar-nav mr-aut">
        <li class="nav-item">
          <a class="nav-link custom-nav-hover" href="#"><b> Informatii e-commerce: 0740 104 194 </b> </a> 
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-hover" href="#"> Categorii </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a></li>
        <li class="nav-item">
          <a class="nav-link custom-nav-hover" href="#"> Produse </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a></li>
        <li class="nav-item">
          <a class="nav-link custom-nav-hover" href="#"> Parteneri</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"> Bine ai venit, Nume cont! </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-hover" href="#"> <i class="fas fa-user"></i> Logout </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item">
          <div class="dropdown">
             <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="em em-flag-ro"></i> RO</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="em em-flag-ro"></i> RO</a>
              <a class="dropdown-item" href="#"><i class="em em-gb"></i> EN</a>
              <a class="dropdown-item" href="#"><i class="em em-de"></i> DE</a>
              <a class="dropdown-item" href="#"><i class="em em-fr"></i> FR</a>
            </div>
          </div>

        </li>
      </ul>
    </div>
  </nav>

<div class="container d-none d-lg-block" style="z-index:9999;position:relative;">

  <div class="row bg form-group">

    <div class="col-md-2 d-flex">
      <img class="mx-auto my-auto" src="images/logo.svg" alt ="Logo123" style="height:4.5rem">
    </div>

    <div class="col-md-8 my-1">
        <form>
          <div class="form-group my-3 mx-4" >
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cauta produsul dorit...">
                  <span class="input-group-btn">
                      <button class="btn btn-primary custom-btn-color" type="button" name="search"><i class="fas fa-search"></i></button>
                  </span>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-2 d-flex justify-content-center align-self-center">
        <div class="d-flex align-self-center padds">
          <a class="nav-top-right" href="#">
            <img class="mx-auto my-auto nav-svg" src="images/my-account.svg" alt="my-account" style="height:2rem">
            <span class="pstyle">
              Contul meu
            </span>
        </a>
        </div>
        <div class="d-flex align-self-center padds">
          <a class="nav-top-right" href="#">
            <img class="mx-auto my-auto nav-svg" src="images/shopping-cart.svg" alt="shopping-cart" style="height:2rem"> 
            <span class="pstyle">        
              Cosul meu
           </span>
          </a>
        </div>
      </div>
    </div>
    <div class="row rounded-bottom">
      <div class="col-sm-3 rounded-bottom">
        <div class="dropdown">
          <div class="dropdown-toggle rounded-bottom custtxt" data-toggle="dropdown">
                Categorii produse
          </div>
          <div class="dropdown-menu" style="width:410%">
            <div class="row">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist" style="width:60%">
                    <a class="list-group-item list-group-item-action active dropdown-item" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">ADIDAS ORIGINALS</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">NIKELAB</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">SPORTS</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">ATHLETES</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-home1-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">MEN'S SHOES</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-profile1-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">MEN'S CLOTHING</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-messages1-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">WOMEN'S SHOES</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-settings2-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">WOMEN'S CLOTHING</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-settings3-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">KID'S SHOES</a>
                    <a class="list-group-item list-group-item-action dropdown-item" id="list-settings4-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">KID'S CLOTHING</a>
                  </div>
                </div>
                <div class="col-8">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home1-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile1-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages1-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings2-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings3-list"> Lorem Ipsum</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings4-list"> Lorem Ipsum</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  <div class="col-sm-9" style="background-color: white;">
    PROMOTII / PRETURI SPECIALE / NOUTATI / BRANDURI
  </div>
  </div>
  </div>
  <script type="text/javascript" src="../js/header.js">
  </script>
