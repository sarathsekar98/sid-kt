<?php
    include 'config.php';
    session_start();
    if(isset($_POST['booking'])){
        $fname = mysqli_real_escape_string($con,$_POST['first_name']);
        $lname = mysqli_real_escape_string($con,$_POST['last_name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phno = mysqli_real_escape_string($con,$_POST['phone_number']);
        $sql = "INSERT INTO book_data (fname, lname, email, phno) VALUES ('$fname','$lname','$email','$phno')";
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Records inserted successfully')</script>";
        } else{
            echo "<script>alert('Records Not inserted')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booking Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet'>
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/booking.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">FOKA Tech</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <h1 class="text-uppercase font-weight-bold" style="text-align: center; margin-top: 10%; margin-bottom: 5%;" >BOOK NOW</h1>
            <div class="master-div">
              <form action="" id="survey-form" method="POST">
                <div class="form-rows">
                  <div class="labels">
                    <label for="name">First Name</label>
                  </div>
                  <div class="fields">
                    <input type="text" name="first_name" id="name" class="input-fields" placeholder="Enter your first name" required />
                  </div>
                </div>
                <br>
                <div class="form-rows">
                  <div class="labels">
                    <label for="name">Last Name</label>
                  </div>
                  <div class="fields">
                    <input type="text" name="last_name" id="name" class="input-fields" placeholder="Enter your last name" required />
                  </div>
                </div>
                <br>
                <div class="form-rows">
                  <div class="labels">
                    <label for="email">Email</label>
                  </div>
                  <div class="fields">
                    <input type="email" name="email" id="email" class="input-fields" placeholder="Enter your email" required />
                  </div>
                </div>
                <br>
                <div class="form-rows">
                  <div class="labels">
                    <label for="name">Phone Number</label>
                  </div>
                  <div class="fields">
                    <input type="number" name="phone_number" id="phone" class="input-fields" placeholder="Enter your phone number" required />
                  </div>
                </div>
                <div class="form-rows">
                  <div class="labels">
                    <label for="product">Products<br />
                      (Select all that apply)</label>
                  </div>
                  <div class="fields">
                    <ul>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option1" value="option1" />
                        <label for="option1">Option 1</label>
                      </li>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option2" value="optio2" />
                        <label for="option2">Option 2</label>
                      </li>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option3" value="option3"  />
                        <label for="exc">Option 3</label>
                      </li>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option4" value="option4"  />
                        <label for="exc">Option 4</label>
                      </li>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option5" value="option5"  />
                        <label for="exc">Option 5</label>
                      </li>
                      <li class="radio">
                        <input type="checkbox" name="product" id="option6" value="option6"  />
                        <label for="exc">Option 6</label>
                      </li>
                    </ul>
                  </div>
                </div> -->
                <br>
                <input type="submit" class="button btn-prim" type="sumbit" name="booking" value="Submit">
              </form>
            </div>         
          </main>
<!-- Modal -->
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="formModalLabel">Registration Form</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="formAwesome" action="" method="POST" >
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-6 col-form-label">
                                            Name
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emailid" class="col-sm-6 col-form-label">
                                            Email ID
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="emailid" placeholder="Enter your email ID" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-sm-6 col-form-label">
                                            Mobile Number
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="tel" class="form-control" id="phonenumber" placeholder="Enter your mobile number" 
                                            name="phone"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="city" class="col-sm-6 col-form-label">
                                            City
                                        </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="city"
                                            name="city"required>
                                            <option value="Alesund" title="Alesund">Alesund</option>
                                            <option value="Arendal" title="Arendal">Arendal</option>
                                            <option value="Bergen" title="Bergen">Bergen</option>
                                            <option value="Bodo" title="Bodo">Bodo</option>
                                            <option value="Drammen" title="Drammen">Drammen</option>
                                            <option value="Egersund" title="Egersund">Egersund</option>
                                            <option value="Farsund" title="Farsund">Farsund</option>
                                            <option value="Flekkefjord" title="Flekkefjord">Flekkefjord</option>
                                            <option value="Floro" title="Floro">Floro</option>
                                            <option value="Fredrikstad" title="Fredrikstad">Fredrikstad</option>
                                            <option value="Gjovik" title="Gjovik">Gjovik</option>
                                            <option value="Grimstad" title="Grimstad">Grimstad</option>
                                            <option value="Halden" title="Halden">Halden</option>
                                            <option value="Hamar" title="Hamar">Hamar</option>
                                            <option value="Hammerfest" title="Hammerfest">Hammerfest</option>
                                            <option value="Harstad" title="Harstad">Harstad</option>
                                            <option value="Haugesund" title="Haugesund">Haugesund</option>
                                            <option value="Holmestrand" title="Holmestrand">Holmestrand</option>
                                            <option value="Honefoss" title="Honefoss">Honefoss</option>
                                            <option value="Horten" title="Horten">Horten</option>
                                            <option value="Kongsberg" title="Kongsberg">Kongsberg</option>
                                            <option value="Kongsvinger" title="Kongsvinger">Kongsvinger</option>
                                            <option value="Kristiansand" title="Kristiansand">Kristiansand</option>
                                            <option value="Kristiansund" title="Kristiansund">Kristiansund</option>
                                            <option value="Larvik" title="Larvik">Larvik</option>
                                            <option value="Lillehammer" title="Lillehammer">Lillehammer</option>
                                            <option value="Mandal" title="Mandal">Mandal</option>
                                            <option value="Molde" title="Molde">Molde</option>
                                            <option value="Moss" title="Moss">Moss</option>
                                            <option value="Namsos" title="Namsos">Namsos</option>
                                            <option value="Narvik" title="Narvik">Narvik</option>
                                            <option value="Notodden" title="Notodden">Notodden</option>
                                            <option value="Oslo" title="Oslo">Oslo</option>
                                            <option value="Porsgrunn" title="Porsgrunn">Porsgrunn</option>
                                            <option value="Risor" title="Risor">Risor</option>
                                            <option value="Sandefjord" title="Sandefjord">Sandefjord</option>
                                            <option value="Sandnes" title="Sandnes">Sandnes</option>
                                            <option value="Sarpsborg" title="Sarpsborg">Sarpsborg</option>
                                            <option value="Skien" title="Skien">Skien</option>
                                            <option value="Sogne" title="Sogne">Sogne</option>
                                            <option value="Stavanger" title="Stavanger">Stavanger</option>
                                            <option value="Steinkjer" title="Steinkjer">Steinkjer</option>
                                            <option value="Tonsberg" title="Tonsberg">Tonsberg</option>
                                            <option value="Tromso" title="Tromso">Tromso</option>
                                            <option value="Trondheim" title="Trondheim">Trondheim</option>
                                            <option value="Vadso" title="Vadso">Vadso</option>
                                            <option value="Vardo" title="Vardo">Vardo</option>
                                            <option value="Vennesla" title="Vennesla">Vennesla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="state" class="col-sm-6 col-form-label">
                                            State
                                        </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="state" 
                                            name="state" required>
                                            <option value="More og Romsdal" title="More og Romsdal">More og Romsdal</option>
                                            <option value="Aust-Agder" title="Aust-Agder">Aust-Agder</option>
                                            <option value="Hordaland" title="Hordaland">Hordaland</option>
                                            <option value="Nordland" title="Nordland">Nordland</option>
                                            <option value="Buskerud" title="Buskerud">Buskerud</option>
                                            <option value="Rogaland" title="Rogaland">Rogaland</option>
                                            <option value="Vest-Agder" title="Vest-Agder">Vest-Agder</option>
                                            <option value="Sogn og Fjordane" title="Sogn og Fjordane">Sogn og Fjordane</option>
                                            <option value="Ostfold" title="Ostfold">Ostfold</option>
                                            <option value="Oppland" title="Oppland">Oppland</option>
                                            <option value="Hedmark" title="Hedmark">Hedmark</option>
                                            <option value="Finnmark" title="Finnmark">Finnmark</option>
                                            <option value="Troms" title="Troms">Troms</option>
                                            <option value="Vestfold" title="Vestfold">Vestfold</option>
                                            <option value="Nord-Trondelag" title="Nord-Trondelag">Nord-Trondelag</option>
                                            <option value="Telemark" title="Telemark">Telemark</option>
                                            <option value="Oslo" title="Oslo">Oslo</option>
                                            <option value="Sor-Trondelag" title="Sor-Trondelag">Sor-Trondelag</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input value="Call Back" type="submit" class="btn btn-primary" name="call_req">
                                    <!-- Callback</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- Footer-->
        <footer class=" py-5" >
            <div class="container">
                <div class="small text-center" style="color: white ;">
                    Copyright &copy;
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    - Company Name
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
