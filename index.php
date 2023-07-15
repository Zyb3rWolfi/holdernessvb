<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Holderness Volleyball Club</title>
      <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="https://use.typekit.net/eap6cjk.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="overflow-x: hidden">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-brand" style="margin-left: 15%;">
                <img src="imgs/logo.png" width="100px">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlinks" aria-controls="navlinks" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>      
        <div class="collapse navbar-collapse" style="margin-right: 10%; text-align: center;" id="navlinks">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-3 border-bottom border-5 border-dark">
                  <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">TEAMS</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="pages/cobras.php">Cobras</a></li>
                        <li><a class="dropdown-item" href="pages/raptors.php">Raptors</a></li>
                    </ul>        
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="pages/roster.php">ROSTER</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="pages/fixtures.php">FIXTURES</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">INFORMATION</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="pages/about_us.html">About Us</a></li>
                        <li><a class="dropdown-item" href="pages/contact_us.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="pages/membership.html">Membership</a></li>
                    </ul> 
                </li>
              </ul>
        </div>
    </nav>
    <section>
        <div>
            <img src="imgs/banner.png" style="position:absolute; z-index: -1;" height="355px">
            <div class="container my-5" style="position:relative; color: white; margin-left: 10%; z-index: 1; display: inline-block">
                <div class="row" id="wc">
                    <h1 style="font-size: 30px; font-weight: 1000;">Welcome to</h1>
                </div>
                <div class="row">
                    <h1 style="font-weight: 1000; font-size: 45px; margin-top: -10px;">Our Holderness Volleyball Club</h1>
                </div>
                <div class="row">
                    <h1 style="font-weight: 1000; font-size: 20px; margin-top: 9px;">The club has been running for around 20 years now and that time 
                        has<br> seen some faces come and go, some have retired, some have
                        moved<br> away from this city whilst others have come here from other 
                        cities <br>or in several cases, from other countries.</h1>
                </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid " style="margin-top: 7%; margin-left: 10%;">
        <div class="row" style="display: inline;">
            <h2 style="font-weight: 800; font-size: 36px;color: black; display: inline;" class="border-bottom border-5 border-dark ">Upcoming Matches</h2>
        </div>
        <div class="row w-auto">
            <?php
            include "scripts/match.php";
            ?>
        </div>
    </div>

    <section id="matches" style="margin-left: 10%; margin-top: 2%; position: relative;">
        <div class="row" style="display: inline;">
            <h2 style="font-weight: 800; font-size: 36px;color: black; display: inline;" class="border-bottom border-5 border-dark ">FIXTURES FOR 2023</h2>
        </div>
        <div class="container-fluid">
            <div class="row my-5 w-auto" style="font-size: 20px;"  id="matches">
                <div class="col-md w-auto">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Pos</th>
                            <th scope="col">Team</th>
                            <th scope="col">Pts</th>
                            <th scope="col">P</th>
                            <th scope="col">W</th>
                            <th scope="col">L</th>
                            <th scope="col">SW</th>
                            <th scope="col">SL</th>
                            <th scope="col">Ratio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        class MyDB extends SQLite3 {
                            function __construct() {
                            $this->open('php/players.db');
                            }
                            }

                            $db = new MyDB();
                            if(!$db) {
                                echo $db->lastErrorMsg();
                            }

                            $sql =<<<EOF
                                SELECT * from teams;
                            EOF;

                            $ret = $db->query($sql);
                            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            $counter = 1;

                            if ($row['year'] == 2023){
                                echo "<tr>";
                                echo "<th scope='row'>" . $row['pos'];
                                echo "<td>" . $row['name'];
                                echo "<td>" . $row['pts'];
                                echo "<td>" . $row['p'];
                                echo "<td>" . $row['w'];
                                echo "<td>" . $row['l'];
                                echo "<td>" . $row['sw'];
                                echo "<td>" . $row['sl'];
                                echo "<td>" . $row['ratio'];
                                echo "</tr>";
                            }
                        
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-md-start">
        <!-- Grid container -->
        <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">INFORMATION</h5>
            <p>
                IF YOU ARE NEW TO THIS THEN GIVE US A CALL, YOU CAN CALL SIMON ON 07577 854062 IF YOU HAVE ANY QUESTIONS.
            </p>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled mb-0">
                <li>
                <a href="#!" class="text-white">Home</a>
                </li>
                <li>
                <a href="#!" class="text-white">Cobras</a>
                </li>
                <li>
                <a href="#!" class="text-white">Raptors</a>
                </li>
                <li>
                <a href="#!" class="text-white">Roster</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Links</h5>
    
            <ul class="list-unstyled">
                <li>
                <a href="#!" class="text-white">Fixtures</a>
                </li>
                <li>
                <a href="#!" class="text-white">About Us</a>
                </li>
                <li>
                <a href="#!" class="text-white">Membership</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Holderness Volleyball Club</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>