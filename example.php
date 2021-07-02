<!DOCTYPE html>
<html>
<title>Test Program</title>

<head>

</head>

<body>

    <?php

    $phrase = "the quick brown fox jumps over the layz doog";
    echo ($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase);
    echo strtolower($phrase);

    echo ("<h1>hello world</h1>");
    echo "<hr>";

    // Varialbles
    $Name = "John";
    $Age = 35;
    echo "There was once a man named $Name<br>";
    echo "he was $Age years old<br>";
    $Name = "George";
    $Age = "70";
    echo "He really liked the name $Name<br>";
    echo "but didnt like being $Age<br><hr>";


    //convert string to lower case 'variable':
    $phrase = "Giraffe Academy";
    echo strtolower($phrase), "<hr>";
    //convert string to upper case 'variable':
    echo strtoupper($phrase), "<hr>";
    //count how many character in the String
    echo strlen($phrase), "<hr>";
    //String Indexing
    $phrase[0] = "B";
    echo $phrase, "<hr>";

    //String str_ireplace
    echo str_replace("Biraffe", "Panda", $phrase), "<hr>";

    //substring
    echo substr($phrase, 8, 3), "<hr>";


    //Number
    $num = 10;
    $num += 25;
    echo $num++, "<hr>"; //Ascending
    echo $num--, "<hr>"; // Decending

    //Absolute value
    echo abs($num), "<hr>";
    //Power
    echo pow(2, 4), "<hr>";
    //Square root of
    echo sqrt(144), "<hr>";
    //Max Value
    echo max(2, 10), "<hr>";
    //Min value
    echo min(2, 10), "<hr>";
    //round off
    echo round(3.5), "<hr>";
    //ceilcius
    echo ceil(3.2), "<hr>";
    //floor
    echo floor(3.2), "<hr>";


    //User Input


    ?>

    <form action="index.php" method="get">
        Name:<input type="text" name="name">
        <input type="submit">
    </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


</body>

</html>