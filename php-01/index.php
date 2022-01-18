<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
    <?php
    $userName = "Teodora";
    print "<h2>Hello $userName</h2>";

    $string = "8";
    echo "<p>This is number written as a string: $string</p>";
    $integer = 8;
    echo "<p>This is number written as an integer: $integer</p>";
    $double = 8.0;
    echo "<p>This is number written as a double: $double</p>";

    $var1 = 10;
    echo "$var1 <br>";
    $var2 = 20;
    echo "$var2 <br>";
    $multi = $var1 * $var2;
    echo "$var1 + $var2 = $multi <br>";
    echo "<hr>";

    $song1 = "„Die Donau ist ins Wasser g’falln,";
    $song2 = "der Rheinstrom ist verbrannt,der Rheinstrom ist verbrannt,";
    $song3 = "In Frankfurt ist ein Spaß passiert,";
    $song4 = "der Geisbock hats erzählt“";

    echo "$song1 <br> $song2 <br> $song3 <br> $song4 <br>";

    echo "<hr>";
    $customers = array();
    $customers[0]['Number'] = 1;
    $customers[0]['FirstName'] = "Ed";
    $customers[0]['LastName'] = "Sheeran";
    $customers[1]['Number'] = 2;
    $customers[1]['FirstName'] = "Sam";
    $customers[1]['LastName'] = "Smith";
    $customers[2]['Number'] = 3;
    $customers[2]['FirstName'] = "Demi";
    $customers[2]['LastName'] = "Lovato";

    foreach($customers as $array) {
        foreach($array as $i => $entry) {
          print " " . $entry ;
        }
        print "<br>";
      }

    ?>
    
</body>
</html>