<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <?php
        echo "Hello World ! " ;
        echo "Hello, " . " " . " world" . "!";

        echo 5 * 7;
        $myname = "Frodo Baggins";
        $myage = 111;
        echo "My name is " . $myname . " and I am " . $myage;

        echo " I get printed! ";
        // I don't! I'm a comment.

        /* I don’t get printed either
       and neither do I */
    $wantedgood  = "mugs";
    $mugs = "mugs" ;
    $sausage = "sausage rolls" ;
    $specs= "specs" ;
    echo  $mugs;
    switch ($wantedgood ) {
        case "specs":
            echo "You have to be 16 to buy". $specs;
            break;
        case "mugs":
            $mugs = "hugs";
            echo "You have to be 18 to buy ". $mugs;
            break;
        case "sausage rolls":
            unset ($sausage);
            echo "You always can buy ". $sausage;
            break;
        default:
            echo "All the hobbits have gone home";
    }



    ?>

    <?php
    $name = "Edgar";

    if ($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }
    ?>

<br><br>

    <?php
    $myArray = array("do", "re", "mi");
    echo $myage[0];
    ?>

</p>

</body>
</html>