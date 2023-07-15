<?php

    class MyDB extends SQLite3 {
        function __construct() {
        $this->open('players.db');
        }
    }
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    }

    $sql = <<<EOF
        CREATE TABLE IF NOT EXISTS PLAYERS
        (
        NAME           TEXT    NOT NULL,
        NUMBER         INT     NOT NULL,
        POSITION       TEXT    NOT NULL,
        TEAM           TEXT    NOT NULL);
    EOF;
    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    }
    $sql = <<<EOF
    CREATE TABLE IF NOT EXISTS MATCHES
    (
    TIME        DATETIME   NOT NULL,
    TEAM1       STRING     NOT NULL,
    TEAM2       STRING     NOT NULL);
    EOF;
    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    }
    $db->close();


    if ($_POST && isset($_POST['add_player'])) {

            $name = $_POST['name'];
            $number = $_POST['number'];
            $pos = $_POST['pos'];
            $team = $_POST['team'];

            $db = new MyDB();
            if(!$db) {
                echo $db->lastErrorMsg();
            }

            $sql =<<<EOF
                INSERT INTO PLAYERS (NAME, NUMBER, POSITION, TEAM)
                VALUES ('$name', '$number', '$pos[0]', '$team[0]');
            EOF;

            $ret = $db->exec($sql);
            if(!$ret) {
                echo $db->lastErrorMsg();
            }
    }
    else if ($_POST && isset($_POST['remove_player'])) {

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
        }

        }
        $dir = dirname(__DIR__);
        header("Location: " . $dir . "/test.php");
        die();
?>