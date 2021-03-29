<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <title>Rocks Paper Scissors by Keqingcu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h5>Make your choice :</h5>
    <form method="post">
    <button type="submit" value="Gunting" name="user">&#9996;&#127995;</button>
    <button type="submit" value="Batu" name="user">&#9994;&#127995;</button>
    <button type="submit" value="Kertas" name="user">&#9995;&#127995;</button>
    </form>
    
    <?php 

    //Declare bot
    $bot = array("Gunting", "Batu", "Kertas");
    $rand_bot = array_rand($bot);
    $bot_input  = $bot[$rand_bot];

    //Process Output
    if(isset($_POST["user"])){

        //Process user 
        $user_input = $_POST["user"];
        if($user_input=="Gunting"){
            $user_output = "&#9996;&#127995;";
        }else if($user_input=="Batu"){
            $user_output = "&#9994;&#127995;";
        }else if($user_input=="Kertas"){
            $user_output = "&#9995;&#127995;";
        }

        //Process bot 
        if($bot_input=="Gunting"){
            $bot_output = "&#9996;&#127995;";
        }else if($bot_input=="Batu"){
            $bot_output = "&#9994;&#127995;";
        }else if($bot_input=="Kertas"){
            $bot_output = "&#9995;&#127995;";
        }
        echo "<div class='all_output'>";
        echo "<div class='user_output'>" . $user_output . "</div>";
        echo "<span class='vs'> <b>&#9747;</b> </span>";
        echo "<div class='bot_output'>" . $bot_output . "</div></div>";

        $output = $user_input . " " . $bot_input;
        echo "<div class='result'>";
        if($output == "Gunting Gunting" || $output == "Batu Batu" || $output == "Kertas Kertas"){
            echo "Draw";
        } else if($output == "Gunting Batu" || $output == "Batu Kertas" || $output == "Kertas Gunting"){
            echo "You Lose";
        } else if($output == "Gunting Kertas" || $output == "Batu Gunting" || $output == "Kertas Batu"){
            echo "You Win";
        }
        echo "</div>";


    } else {
        ?> 
        <form method="post">
        <button class="howto" value="how" name="howto">How to play</button>
        </form>
        <?php
        if(isset($_POST["howto"])){
            echo "<div class='vs'>Really? Just choose</br>&#9996;&#127995; or &#9994;&#127995; or &#9995;&#127995;</div>";
        }
    }
    echo "<p class='credit'><a href='mailto:keqingcu@gmail.com'>keqingcu@gmail.com</a></br>";
    echo "<a href='https://twitter.com/keqingcu'>@keqingcu (twitter)</a></p>";
    ?>
</body>
</html>