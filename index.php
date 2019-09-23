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

if (!isset($_SESSION['pcchoice']))
    $_SESSION['pcchoice'] = array_rand($options);

echo $options[$_SESSION['pcchoice']]; 

if (isset($_POST["rock"])) {
  if ($options[$_SESSION['pcchoice']] == $options[0])
    {
        echo "You lost";
    }
elseif ($options[$_SESSION['pcchoice']] == $options[1])
    {
        echo "Tie!";
    }
elseif ($options[$_SESSION['pcchoice']] == $options[2])
    {
        echo "You won!";
    }
};

if (isset($_POST["paper"])) {
    if ($options[$_SESSION['pcchoice']] == $options[0])
      {
          echo "Tie!";
      }
  elseif ($options[$_SESSION['pcchoice']] == $options[1])
      {
          echo "You won!";
      }
  elseif ($options[$_SESSION['pcchoice']] == $options[2])
      {
          echo "You lost!";
      }
  };

  if (isset($_POST["scissors"])) {
    if ($options[$_SESSION['pcchoice']] == $options[0])
      {
          echo "You won";
      }
  elseif ($options[$_SESSION['pcchoice']] == $options[1])
      {
          echo "You lost!";
      }
  elseif ($options[$_SESSION['pcchoice']] == $options[2])
      {
          echo "Tie!";
      }
  };