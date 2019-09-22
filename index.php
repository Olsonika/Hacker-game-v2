<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock, paper</title>
</head>
<body>
<form method="POST">
<input type="submit" name="rock" value="Rock">
<input type="submit" name="paper" value="Paper">
<input type="submit" name="scissors" value="Scissors">
    
</body>
</html>

<?php
session_start();

$options = [ 
    "paper",
    "rock",
    "scissors",
];

$_SESSION['pcchoice'] = $key = array_rand($options);
echo $options[$key]; 

if (isset($_POST["rock"]) && ($_SESSION['pcchoice'] = $options[$key][0]))
    {
        echo "You lost";
    }
elseif (isset($_POST["rock"]) && ($_SESSION['pcchoice'] = $options[$key][1]))
    {
        echo "Tie!";
    }
 elseif (isset($_POST["rock"]) && ($_SESSION['pcchoice'] = $options[$key][2]))
    {
        echo "You won!";
    };