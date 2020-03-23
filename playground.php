<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php';?>
<?php include 'nav.php';?>
<h2>Playground</h2>
<p id="intro">By the way, this is going to make *NO* sense if you are just looking at this... sorry... <br><br>Within many Programming languages, loops are used as a way to cut corners, and each has its specific use case. Let's start with the "For Each" Loop</p>
<?php
    $count = 0;
    $products = array(
        array("name" => "Ferret","price" => 250.00,"picture" => "ferret.png","description" => "Long Furry Noodle","total price" => 250.00 + (250.00 * .1), "area" =>"Lewiston"),
        array("name" =>"Pangolin","price" => "Not for Sale","picture" => "pangolin.jpg","description" => "Only for Looking","total price" => "Not for Sale","area" => "Africa"),
        array("name" =>"Owl","price" => 1000.00,"picture" => "owl.jpg","description" => "Birb of Prey, Very sharp","total price" => 1000.00 + (1000.00 * .1),"area" => "Lewiston"),
        array("name" =>"Young Me","price" => "Not for Sale","picture" => "young_me.jpg","description" => "How'd this get here?","total price" => "Not for Sale","area" => "Lewiston")
    );
    
    echo "<div id='animals'>";
    //foreach Loop Example
    foreach($products as $animal){
        echo "<div>";
        echo "<p>". $animal["name"] . "</p>";
        echo '<img src = ' . $animal["picture"] . ">";
        echo "<p>Price: $". $animal["total price"] . "</p>";
        echo "<p>" . $animal["area"] . "</p>";
        echo "<p>" . $animal["description"] . "</p>";
        echo "</div>";
    };
    echo "</div>";
    echo "<p id='intro'>The 'For Each' loop takes each item in the array, & itterates through the array using the commands given. This Loop is quite popular when used with arrays, but are not the only loop that can loop through arrays; It's just the easiest one to set up. (This is also the Loop I used for the Home Page)</p>";
    echo "<div id='animals'>";
    //for Loop Example
    for($i = 0; $i < count($products); $i++){
        $animal = $products[$i];
        echo "<div>";
        echo "<p>". $animal["name"] . "</p>";
        echo '<img src = ' . $animal["picture"] . ">";
        echo "<p>Price: $". $animal["total price"] . "</p>";
        echo "<p>" . $animal["area"] . "</p>";
        echo "<p>" . $animal["description"] . "</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "<p id='intro'>The 'For' Loop excells at looping a specific number of times. Because our array number is static, we can use that to our advantage and use this, but admittedly, for this project, it did take more effort than a For Each Loop</p>";
    echo "<div id='animals'>";
    //While Loop Example
    while($count < count($products)){
        $animal = $products[$count];
        echo "<div>";
        echo "<p>". $animal["name"] . "</p>";
        echo '<img src = ' . $animal["picture"] . ">";
        echo "<p>Price: $". $animal["total price"] . "</p>";
        echo "<p>" . $animal["area"] . "</p>";
        echo "<p>" . $animal["description"] . "</p>";
        echo "</div>";
        $count++;
    }
    echo "</div>";
    $count = 0;
    echo "<p id='intro'>The 'While' Loop is probably one of the most used loops in Computer Science. While loops continue to loop until a defined boolean is true, then they stop the loop. This specific loop is set so that when 'count' is equal to the number of items in 'products', then the loop stops.</p>";
    echo "<div id='animals'>";
    //Do While Loop Example
    do {
        $animal = $products[$count];
        echo "<div>";
        echo "<p>". $animal["name"] . "</p>";
        echo '<img src = ' . $animal["picture"] . ">";
        echo "<p>Price: $". $animal["total price"] . "</p>";
        echo "<p>" . $animal["area"] . "</p>";
        echo "<p>" . $animal["description"] . "</p>";
        echo "</div>";
        $count++;
    }while($count < count($products));
    echo "</div>";
    echo "<p id='intro'> 'Do While' Loops are extremly similar to 'While' Loops save for one very important Detail: While Loops check the Boolean before the loop begins, while Do While's check afterward. This can be useful if you want a minimum of 1 loop.</p>";
    ?>
</body>
<?php include 'footer.php';?>
</html>