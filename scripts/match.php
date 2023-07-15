<?php
function generateHTML($team1, $team2, $time, $date) {
    ?>
    <div class="col-md-2 w-auto mt-4">
    <div class="container">
    <div class="row" style="color: white">
    <div class="col-xs-2 bg-dark m-3 w-auto " style="border-radius: 5%;" id="match_card">
        <div class="row">
            <div class="col-md text-center">
                <p><?php
                    echo $team2;

                    ?></p>
                <img src="../imgs/hullthunder.png" class="img-fluid" width="100px" height="100px">
            </div>
            <div class="col-md" style="text-align: center;">
                <p style="font-weight: 500;"><?php echo $date?></p>
                <p style="font-weight: 700; font-size: 20px;">Versus</p>
                <p style="font-weight: 500;"><?php echo $time?></p>
            </div>
            <div class="col-md text-center">
                <p><?php
                    echo $team1;

                    ?></p>
                <img src="../imgs/cobras.png" class="img-fluid" width="100px" height="100px">
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php
}
class DB extends SQLite3
{
    function __construct( $file )
    {
        $this->open( $file );
    }
}

$db = new DB( 'php/players.db' );
$sql =<<<EOF
      SELECT * FROM MATCHES;
EOF;
$ret = $db->query($sql);
$counter = 1;
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $team1 = $row["TEAM1"];
    $team2 = $row["TEAM2"];
    $date = $row["DATE"];
    $time = $row["TIME"];
    $counter += 1;
    generateHTML($team1, $team2, $time, $date);
}
?>
