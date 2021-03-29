<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <title>Rock Paper Scissors by Keqingcu</title>
    <style>
        body, button {
            
            background-color: white;
            font-family: sans-serif;
            text-align: center;
            font-size:50px;
        }
        h5 {
            margin-top: 3%;
            margin-bottom:40px;
        }
        button{
            padding: 2%;
            background-color: #7584cc;
            border: 4px solid #5d6799;
            transition: padding 0.3s, margin 1s;
        }
        button:hover{
            padding-right: 2.5%;
            padding-left: 2.5%;
            margin: 0px 2.5%;
            background-color: #636ea3;
            border: 4px solid #3f445e;
            cursor:pointer ;
        }
        button:focus{
            transition: padding 0.3s, margin 1s;
            margin: 0px 0px;
            padding: 2%;
        }

        .bot_output{
            text-shadow: 10px 10px #cc7575;
        }
        .user_output{
            text-shadow: 10px 10px #7584cc;
        }
        form{
            margin-bottom: 3%;
        }
        .user_output, .bot_output{
            margin: 1% 0 1%;
        }
        .all_output{
            margin-bottom: 3%;
        }
        .vs, .howto{
            font-size: 40px;
        }
        .howto{
            color: white;
        }
        
        .user_output{
            animation: toleft 1.4s;
            margin-right: 100px;
        }
            @keyframes toleft{
                from{margin-right: 0px;transform: rotateY(90deg);}
                to{margin-right: 100px;}
            }

        .bot_output{
            animation: toright 1.4s;
            margin-left: 100px;
        }
            @keyframes toright{
                from{margin-left: 0px;transform: rotateY(90deg);}
                to{margin-left: 100px;}
            }

        .result, .vs{
            margin-bottom: 1%;
            animation:fade 1.4s
        }
            @keyframes fade{
                from{opacity:0} 
                to{opacity:1}
            }
        .credit{
            font-size: 20px;
            opacity: 0.8;
            animation:fade 1.4s;
        }
        .credit a:hover{
            color:#3f445e;
        }
        .credit a{
            text-decoration: none;
            color:black;
        }
        @media only screen and (max-width:480px) {
            h5{
                margin-top: 17%;
            }
            body {
                font-size: 40px;
            }
            .vs, .howto{
            font-size: 30px;
            }
            form{
                margin-bottom: 40px;
            }
            .user_output, .bot_output{
                font-size: 50px;
            }
            .result{
                margin-top: 10%;
            }
            button {
                font-size:35px;
                padding: 25px 15px 25px;
            }
            button:hover{
                transition: opacity 0.3s;
                opacity: 0.0;
                padding: 25px 15px 25px;
                margin: 0px 0px;
            }
        }

    </style>
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