<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php';?>
<?php include 'nav.php';?>
<h2>Home</h2>
<p id="intro">Welcome! If you aren't a part of the CITPT-275-60 Class, I don't exactly know how you got here, unless this was put online for some reason... but Welcome all the same!<br>
<br>This Website was made as an assignment to test our abilites in PHP. If you would like to learn more about what was assigned, and how this fits the description, You can Click <a href="about.php">Here</a><br>
<br>I also made a bit of a playground where I can mess with loops; You can find that <a href ="playground.php">Here</a></p>
<?php
    //New Created Function
    function productsShow(array $x){
        echo "<div id='animals'>";
        foreach($x as $animal){
            echo "<div>";
            echo "<p>". $animal["name"] . "</p>";
            echo '<img src = ' . $animal["picture"] . ">";
            echo "<p>Price: $". $animal["total price"] . "</p>";
            echo "<p>" . $animal["area"] . "</p>";
            echo "<p>" . $animal["description"] . "</p>";
            echo "</div>";
        };
        echo "</div>";
    }
    $products = array(
        array("name" => "Ferret","price" => 250.00,"picture" => "ferret.png","description" => "Long Furry Noodle","total price" => 250.00 + (250.00 * .1), "area" =>"Lewiston"),
        array("name" =>"Pangolin","price" => "Not for Sale","picture" => "pangolin.jpg","description" => "Only for Looking","total price" => "Not for Sale","area" => "Africa"),
        array("name" =>"Owl","price" => 1000.00,"picture" => "owl.jpg","description" => "Birb of Prey, Very sharp","total price" => 1000.00 + (1000.00 * .1),"area" => "Lewiston"),
        array("name" =>"Young Me","price" => "Not for Sale","picture" => "young_me.jpg","description" => "How'd this get here?","total price" => "Not for Sale","area" => "Lewiston")
    );
    //Use of created Function
    productsShow($products);
    
    ?>
</body>
<?php include 'footer.php';?>
</html>