<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Fixtures</title>
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
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">TEAMS</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="cobras.php">Cobras</a></li>
                        <li><a class="dropdown-item" href="raptors.php">Raptors</a></li>
                    </ul>        
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="roster.php">ROSTER</a>
                </li>
                <li class="nav-item px-3 border-bottom border-5 border-dark">
                    <a class="nav-link active" href="fixtures.php">FIXTURES</a>
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

        <h1 class="mt-5 border-bottom border-5 border-dark" style="font-weight: 1000; display: inline-block;">FIXTURES</h1>
        <p>
            All the fixtures of the past seasons
        </p>
        <h3 class="mt-2 border-bottom border-5 border-dark" style="font-weight: 800; font-size: 25px;display: inline-block;">2022/2023</h3>
        <div class="row my-3" style="font-size: 20px; margin-right: 10%;"  id="matches">
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
                    $this->open('../php/players.db');
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
        <h3 class="mt-2 border-bottom border-5 border-dark" style="font-weight: 800; font-size: 25px;display: inline-block;">2021/2022</h3>
        <div class="row my-3" style="font-size: 20px; margin-right: 10%;"  id="matches">
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Hull Cobras</td>
                    <td>16</td>
                    <td>10</td>
                    <td>8</td>
                    <td>2</td>
                    <td>24</td>
                    <td>6</td>
                    <td>5.00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>West Riding Juniors</td>
                    <td>14</td>
                    <td>9</td>
                    <td>7</td>
                    <td>2</td>
                    <td>21</td>
                    <td>9</td>
                    <td>5.00</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Hull Thunder GLB's</td>
                    <td>14</td>
                    <td>8</td>
                    <td>7</td>
                    <td>7</td>
                    <td>19</td>
                    <td>5</td>
                    <td>1.25</td>

                  </tr>
                </tbody>
              </table>
              
              
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