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

    switch ($wantedgood ) {
        case "specs":
            echo "You have to be 16 to buyspecs";
            break;
        case "mugs":
            echo "You have to be 18 to buy mugs";
            break;
        case "sausage rolls":
            echo "You always can buy sausage rolls";
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



</p>

</body>
</html>