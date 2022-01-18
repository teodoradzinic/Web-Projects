<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-kc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#mArr">Multidimensional Array</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#aArr">Associative Array</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#orderArr">Order arrays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#strings">PHP Strings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#file">PHP File Handling</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>


    </header>

    <main>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/af60794194deda7ace4542a9c03052b4.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/thumb_15386_detail169_large.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php
        $people = array(
            array("Fritz", "Phantom", 70),
            array("Lilo",  "Knickerbocker", 37),
            array("Thomas", "Breziner", 58),
            array("Tom", "Turbo", 27)
        );
        ?>

        <div class="container mt-5">
            <h2 id="mArr">Multidimensional Arrays</h2>
            <div class="row row-cols-4 align-items-center fs-5">

                <div class="col card m-3 pt-2 bg-dark text-light" style="width: 18rem;">
                    <img src="img/Fritz_Fantom.jpg" class="card-img-top img-fluid " alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $people[0][0] . " " .  $people[0][1]; ?></p>
                        <p> <?php echo "Age: " . $people[0][2]; ?></p>
                    </div>
                </div>
                <div class="col card m-3 pt-2  bg-dark text-light" style="width: 18rem;">
                    <img src="img/MV5BYTk5MzI1ZWYtODViYS00MjExLTljMTYtN2M0YTdmOTBmOGIwXkEyXkFqcGdeQXVyODczNTA3OTI@._V1_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $people[1][0] . " " .  $people[1][1]; ?></p>
                        <p> <?php echo "Age: " . $people[1][2]; ?></p>
                    </div>
                </div>
                <div class="col card m-3 pt-2  bg-dark text-light" style="width: 18rem;">
                    <img src="img/Thomas-Brezina-51851.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $people[2][0] . " " .  $people[2][1]; ?></p>
                        <p> <?php echo "Age: " . $people[2][2]; ?></p>
                    </div>
                </div>
                <div class="col card m-3 pt-2  bg-dark text-light" style="width: 18rem;">
                    <img src="img/22039_Tom_Turbo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $people[3][0] . " " .  $people[3][1]; ?></p>
                        <p> <?php echo "Age: " . $people[3][2]; ?></p>
                    </div>

                </div>
            </div>
            <div class="container mt-5 mb-5">
                <div class="row row-cols-4 align-items-center fs-4">
                    <?php
                    for ($row = 0; $row < 4; $row++) {
                        echo "<div class='col'><p><b>Person Number " . ($row + 1) . "</b></p>";
                        echo "<ul>";
                        for ($col = 0; $col < 3; $col++) {
                            echo "<li>" . $people[$row][$col] . "</li>";
                        }
                        echo "</ul></div>";
                    } ?>
                </div>
            </div>

            <?php
            $colors = array();
            $colors['Fritz'] = "Lila";
            $colors['Lilo'] = "Pink";
            $colors['Thomas'] = "Gelb";
            $colors['Tom'] = "Rot"; ?>

            <h2 id="aArr">Associative arrays</h2>
            <div class="container m-5">
                <div class="row row-cols-4 align-items-center">
                    <?php
                    foreach ($colors as $i => $entry) {
                        print "<div class='col fs-5'><p>" . $i . "'s favourite color is " . $entry . "</p></div>";
                    }
                    ?>
                </div>
            </div>
            <hr>
            <?php

            $tom_mag = array("Schmieröl", "DeBreziner", "Essiggurkerl");
            $tricks = array(6, 89, 23, 1, 7, 8, 19);
            ?>

            <div>
                <h2 class="mb-3" id="orderArr">Order arrays & output the result</h2>



                <p class="fs-5">*Array (Strings) at the beggining:
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo $tom_mag[$i] . " ";
                    }
                    ?></p>
                <p class="fs-5">*Array (Integers) at the beggining: <?php
                                                                    for ($i = 0; $i < 7; $i++) {
                                                                        echo $tricks[$i] . " ";
                                                                    }
                                                                    ?></p>
                <p class="fs-3 mt-5">Alphabetical order: <?php
                                                            sort($tom_mag);
                                                            for ($i = 0; $i < 3; $i++) {
                                                                echo $tom_mag[$i] . " ";
                                                            } ?> </p>

                <p class="fs-3 ">Descending order: <?php
                                                    rsort($tricks);
                                                    for ($i = 0; $i < 7; $i++) {
                                                        echo $tricks[$i] . " ";
                                                    }
                                                    ?></p>
                <p class="fs-3">Ascending order by key: <?php
                                                        ksort($colors);
                                                        print_r($colors);
                                                        ?></p>

                <p class="fs-3">Descending order by value: <?php
                                                            arsort($colors);
                                                            print_r($colors);
                                                            ?></p>

            </div>
            <div class="fs-4">
                <h2 class="mt-5 mb-3" id="strings">PHP Strings</h2>
                <?php
                $text1 = "Die Knickerbockerbande, das sind wir!";
                echo "The length of the string: '$text1' is: " . strlen($text1);
                echo "<br>";
                $text2 = "Tom Turbo mag Schmieröl";
                echo "The word 'Schmieröl' in on the " . strpos($text2, 'Schmieröl') . "-th place in the string '$text2'";
                echo "<br>";
                $text3 = "Turbo Durchblick";
                echo "Reverse string of '$text3' is '" . strrev($text3) . "'";
                ?>
            </div>
            <div id="file">
                <h2 class="mt-5 mb-3">PHP File Handling</h2>
                <p>open tricks.txt file</p>
                <?php
                $myfile = fopen("tricks.txt", "w");
                $txt = "Turbo Kleber\n";
                fwrite($myfile, $txt);
                $txt = "Turbo Bratpfannentrick\n";
                fwrite($myfile, $txt);
                $txt = "Knoblauch Stinkbombe\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                ?>
            </div>
    </main>

    <footer class="bg-dark text-center text-lg-start text-light ">

        <div class="container p-4">

            <div class="row">

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>

            </div>

        </div>


        <div class="text-center p-3text-light " style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Teodora
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>