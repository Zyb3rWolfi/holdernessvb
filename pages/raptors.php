<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Holderness Raptors</title>
    <link rel="stylesheet" href="https://use.typekit.net/eap6cjk.css">
    <link rel="stylesheet" href="../styles.css">
      <link rel="icon" href="../imgs/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-brand" style="margin-left: 15%;">
                <img src="../imgs/logo.png" width="100px">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlinks" aria-controls="navlinks" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>      
        <div class="collapse navbar-collapse" style="margin-right: 10%; text-align: center;" id="navlinks">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                  <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle active border-bottom border-5 border-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">TEAMS</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="cobras.php">Cobras</a></li>
                        <li><a class="dropdown-item" href="raptors.html">Raptors</a></li>
                    </ul>        
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="roster.php">ROSTER</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="fixtures.php">FIXTURES</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">INFORMATION</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="about_us.html">About Us</a></li>
                        <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="membership.html">Membership</a></li>
                    </ul> 
                </li>
              </ul>
        </div>
    </nav>

    <section style="margin-left: 10%;">

        <h1 class="mt-5 border-bottom border-5 border-dark" style="font-weight: 1000; display: inline-block;">RAPTORS</h1>

        <div class="container-fluid" id="raptors">
            <div class="row">
                <?php
                class MyDB extends SQLite3 {
                    function __construct() {
                    $this->open('../php/players.db');
                    }
                    }

                    $db = new MyDB();
                    if(!$db) {
                        echo $db->lastErrorMsg();
                    }

                    $sql =<<<EOF
                        SELECT * from PLAYERS;
                    EOF;

                    $ret = $db->query($sql);
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        if ($row['TEAM'] == "Raptors") {
                        $name = $row['NAME'];
                        $position = $row['POSITION'];
                        $number = $row['NUMBER'];
                        $team = $row['TEAM'];

                        echo "<div class='col-md-4 mt-4'>";
                        echo "<h3>" . $row['POSITION'] . "</h3>";
                        echo "<img src='../imgs/pfp.webp' width='200px'>";
                        echo "<p class='mt-2'>" . $row['NUMBER'] . "</p>";
                        echo "<p style='margin-top: -15px;'>" . $row['NAME'] . "</p>";
                        echo "</div>";
                        }
                    }

                ?>
            </div>
        </div>

    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-md-start">
        <!-- Grid container -->
        <div class="container-fluid p-4">
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