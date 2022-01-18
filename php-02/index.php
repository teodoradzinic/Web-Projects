<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 2</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Navbar</span>
            </div>
        </nav>
        <h1>Second exercise</h1>
    </header>
    <main>
        <div class="first">
            <p>product:</p>
            <p>price:</p>
            <p>available:</p>
            <p></p>
            <p></p>
            <?php
            $assortiment = array();
            $assortiment[0]['number'] = 1;
            $assortiment[0]['name'] = "Doll";
            $assortiment[0]['price'] = 22;
            $assortiment[0]['available'] = 5;
            $assortiment[1]['number'] = 2;
            $assortiment[1]['name'] = "Book";
            $assortiment[1]['price'] = 10;
            $assortiment[1]['available'] = 0;
            $assortiment[2]['number'] = 3;
            $assortiment[2]['name'] = "Picture";
            $assortiment[2]['price'] = 50;
            $assortiment[2]['available'] = 2;
            $assortiment[3]['number'] = 4;
            $assortiment[3]['name'] = "Pencil";
            $assortiment[3]['price'] = 2;
            $assortiment[3]['available'] = 10;


            $i = 0;
            while ($i < 4) {

                if ($assortiment[$i]['available'] == 0) {
                    print "<p>" . $assortiment[$i]['name'] . "</p>";
                    print "<p>" . $assortiment[$i]['price'] . "€" . "</p>";
                    print "<p>" . $assortiment[$i]['available'] . "</p>";
                    print "<p> Not Available for Purchase </p>";
                    print "<p></p>";
                    $i++;
                } else if ($assortiment[$i]['available'] > 0 && $assortiment[$i]['price'] >= 20) {
                    print "<p>" . $assortiment[$i]['name'] . "</p>";
                    print "<p>" . $assortiment[$i]['price'] . "€" . "</p>";
                    print "<p>" . $assortiment[$i]['available'] . "</p>";
                    print "<p> Available </p>";
                    print "<p> Free Shipping </p>";
                    $i++;
                } else if ($assortiment[$i]['available'] > 0 && $assortiment[$i]['price'] < 20) {
                    print "<p>" . $assortiment[$i]['name'] . "</p>";
                    print "<p>" . $assortiment[$i]['price'] . "€" . "</p>";
                    print "<p>" . $assortiment[$i]['available'] . "</p>";
                    print "<p> Available </p>";
                    print "<p> Shipping fee 5€</p>";
                    $i++;
                }
            }
            ?>
        </div>
        <div class="second">
            <?php

            $i = 1;
            while ($i <= 10) {
                print "<p>" . $i . "</p>";
                $i++;
            }
            $y = 1;
            do {
                print "<p>" . $y . "</p>";
                $y++;
            } while ($y < 11);

            for ($i = 1; $i <= 10; $i++) {
                print "<p>" . $i . "</p>";
            }

            ?>
        </div>

        <div class="third">
            <?php

            $assortiment = array();
            $assortiment[0]['name'] = "Apple";
            $assortiment[0]['price'] = 7;
            $assortiment[0]['specialOffer'] = true;

            $assortiment[1]['name'] = "Pear";
            $assortiment[1]['price'] = 5;
            $assortiment[1]['specialOffer'] = false;

            $assortiment[2]['name'] = "Tomatoes";
            $assortiment[2]['price'] = 5;
            $assortiment[2]['specialOffer'] = false;

            $assortiment[3]['name'] = "Zucchini";
            $assortiment[3]['price'] = 12;
            $assortiment[3]['specialOffer'] = true;

            foreach ($assortiment as $var) {
                print "<p>" . $var['name'] . "</p>";
                print "<p>" . $var['price'] . "</p>";
                if ($var['specialOffer'] == true) {
                    print "<p>Attention special offer!</p>";
                }
            }

            ?>
        </div>

        <div class="fifth">
            <?php

            $numbers = array();

            function exponent()
            {
                for ($i = 0; $i <= 9; $i++) {
                    $a = 10;
                    $c = $a ** $i;
                    $numbers[$i] = $c;
                }
                return $numbers;
            }

            function reading()
            {
                $exponent = exponent();
                for ($i = 0; $i <= 9; $i++) {
                    print "<p>" . $exponent[$i] . "</p>";
                }
            }
            exponent();
            reading();
            $randomNumber = 0;
            

            function squareRoot()
            {
                $randomNumber = rand(1,100);
                print "random number: " . $randomNumber. "<br>";
                $sqr = sqrt($randomNumber);
                print "square root: " . $sqr. "<br>";
                return $sqr;
            }
            squareRoot();
            
            ?>
        </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>