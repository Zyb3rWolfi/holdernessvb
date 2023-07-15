<body>

    <form action="forms.php" method = "post">
    Apples: <input type="checkbox" name = "fruits[]" value = "apples"> <br>
    Oranges: <input type="checkbox" name = "fruits[]" value = "oranges"> <br>
    Pears: <input type="checkbox" name = "fruits[]" value = "pears"> <br>
    <input type="submit" value="submit">
    </form>
    <br> 

    <?php

    $fruit = $_POST['fruits'];
    echo $fruit[0];

    ?>
</body>