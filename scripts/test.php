<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://use.typekit.net/eap6cjk.css">
    <link rel="stylesheet" href="/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
  <body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-brand" style="margin-left: 15%;">
                <img src="/imgs/logo.png" width="100px">
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
                        <li><a class="dropdown-item" href="../pages/cobras.php">Cobras</a></li>
                        <li><a class="dropdown-item" href="raptors.html">Raptors</a></li>
                    </ul>        
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="../pages/roster.php">ROSTER</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="../pages/fixtures.php">FIXTURES</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">INFORMATION</a>
                    <ul class="dropdown-menu border-0 text-center">
                        <li><a class="dropdown-item" href="../pages/about_us.html">About Us</a></li>
                        <li><a class="dropdown-item" href="../pages/contact_us.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="../pages/membership.html">Membership</a></li>
                    </ul> 
                </li>
              </ul>
        </div>
    </nav>
    <div class="container-fluid" style="margin-left: 10%;">
        <div class="row" style="display:inline-block">
            <h1 class="mt-5 border-bottom border-5 border-dark" style="font-weight: 1000;">ADMIN PANEL</h1>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="mt-4" style="font-weight: 800; font-size: 28px;">Add Player</h1>
                <form action="../php/database.php" method="post">
                    <div class="col-auto" style="display: inline-block;">
                        <label>Player Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-auto" style="display: inline-block;">
                        <label>Player Number</label>
                        <input type="number" min="0" class="form-control" name="number">
                    </div>
                    <div class="col-auto" style="display: inline-block;">
                        <label>Position</label>
                        <select class="form-select" aria-label="Default select example" name="pos[]">
                            <option name="pos[]" value="Setter" selected>Setter</option>
                            <option name="pos[]" value="Outside Hitter">Outside Hitter</option>
                            <option name="pos[]" value="Middle Hitter">Middle Hitter</option>
                            <option name="pos[]" value="Middle Blocker">Middle Blocker</option>
                        </select>
                    </div>
                    <div class="col-auto" style="display: inline-block;">
                        <label>Team</label>
                        <select class="form-select" aria-label="Default select example" name="team[]">
                            <option name="team[]"value="Cobras">Cobras</option>
                            <option name="team[]"value="Raptors">Raptors</option>
                            <option name="team[]" value="None">None</option>
                        </select>
                    </div>
                    <div class="col-auto" style="display: inline-block;">
                        <button type="submit" value= "submit" name="add_player" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="mt-4" style="font-weight: 800; font-size: 28px;">Remove Player</h1>
                <form action="../php/database.php" method="post">
                    <div class="col-auto" style="display: inline-block;">
                        <label>Player Name</label>
                        <input type="text" name="del_name" class="form-control">
                    </div>
                    <div class="col-auto" style="display: inline-block;">
                        <button type="submit" class="btn btn-success" name="remove_player">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <h1 class="mt-4" style="font-weight: 800; font-size: 28px;">Add Match</h1>
                <form action="../php/database.php" method="post">
                    <div class="col-auto" style="display: inline-block;">
                        <label>Team Name</label>
                        <input type="text" name="team_name" class="form-control">
                    </div>
                    <div class='col-auto' style="display: inline-block">
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                            <input data-format="dd/MM/yyyy hh:mm:ss" type='text' class="form-control" />
                            <span class="add-on">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                                </i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>
                </div>
                    <div class="col-auto" style="display: inline-block;">
                        <button type="submit" class="btn btn-success" name="remove_player">Submit</button>
                    </div>
                </form>
                <?php
                    if ($_POST && isset($_POST['remove_player'])) {

                        $name = $_POST['del_name'];

                        $db = new MyDB();
                        if(!$db) {
                            echo $db->lastErrorMsg();
                        }

                        $sql =<<<EOF
                            DELETE FROM PLAYERS WHERE NAME = '$name';
                        EOF;

                        $ret = $db->query($sql);

                        if(!$ret){
                            echo $db->lastErrorMsg();
                        } else {
                             echo " Player deleted successfully\n";
                        }

                        }
               
                ?>
            </div>
            
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-md-start fixed-bottom">
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
    <script>
        $('.button').click(function() {
        $.ajax({
            type: "POST",
            url: "test.php",
            data: { name: "John" }
        }).done(function( msg ) {
            alert( "Data Saved: " + msg );
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>