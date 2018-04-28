<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/colors.css" type="text/css"/>
    <link rel="stylesheet" href="css/login.css" type="text/css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>


  <body>
    <div class="container container1">
      <div class="row d-flex justify-content-center align-self-center">
        <img src="images/login-images/logo_blue_ex.svg" alt="Logo" class="image-cust">
      </div>
      <br><br>

      <div class="row d-flex align-self-center justify-content-center color">
        <div class="col-md-12 color padd">
            <h6>
            <a href="#" class="nav-link-cust"> < Inapoi </a>
            </h6>
            <br>
            <div class="center-text" >
              <h3>Bine ai venit!</h3>
              <br>
              Se pare ca nu ai un cont NEXST.
              <br>
              Hai sa cream un cont nou!
              <br>
              <p class="user-style">user@nexst.ro</p>
            </div>

            <form class="form-group" action="index.html" method="post">
              <div class="center-text">
                  Numele si prenumele tau:
                  <br>
                  <input type="text" name="Nume_prenume" value="" placeholder="Nume si prenume" class="form-control">
                  <br>
                  Alege o parola sigura:
                  <br>
                  <input type="text" name="Nume_prenume" value="" placeholder="Parola" class="form-control">
                  <br>
                  Confirma parola:
                  <br>
                  <input type="text" name="Nume_prenume" value="" placeholder="Rescrie parola" class="form-control">
                </div>
                <div>
                  <div class="form-check padding-top-cust">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Am citit si sunt de acord cu <a href="#" class="nav-link-cust highlight">termenii si conditiile.</a>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                    <label class="form-check-label" for="defaultCheck2">
                       Vreau sa fiu la curent cu cele mai bune oferte.
                    </label>
                    <br><br>
                  <button class="btn btn-primary btn-block move" type="submit">Continua</button>
                  </div>
              </div>
            </form>
            <br>
            <div class="center-text">
              <a href="#" class="nav-link-cust">Ai nevoie de ajutor?</a>
            </div>
        </div>
    </div>
  </div>

<div class="container container_bottom">
  <div class="row">
    <div class="col-md-3">
      Cont client NEXST
    </div>

    <div class="col-md-3">
      Date cu caracter personal
    </div>

    <div class="col-md-3">
      ANPC
    </div>

    <div class="col-md-3">
      NEXST foloseste cookie–uri
    </div>
  </div>
</div>
  </body>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
