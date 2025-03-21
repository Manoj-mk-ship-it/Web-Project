<?php
$string = "string1";
$pattern = "/Func/";

preg_match($pattern, $string, $matches);

//print_r($matches);

echo "<br>";
$str = "string1";
$ptr = "/FuncTion/i";

if (preg_match($ptr, $str)) {
    //echo "function Match found!";
} else {
    //echo "Match not found!";
}
echo "<br>";
$email = "shinswe@gmail.com";
$mailpattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($mailpattern, $email)) {
    //echo "Valid email address!";
} else {
    //echo "Invalid email address!";
}
echo "<br>";
if (preg_match($pattern, $string)) {
    //echo "Pattern matched!";
} else {
    //echo "Pattern not matched!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Patterns and Validations</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
    }
    p {
      color: #666;
      font-size: 16px;
      line-height: 1.5;
    }
    .matches {
      color: green;
      font-weight: bold;
    }
    .not-found {
      color: red;
      font-weight: bold;
    }
    .valid-email {
      color: green;
      font-weight: bold;
    }
    .invalid-email {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>PHP Patterns and Validations</h1>
    <p>
      <?php
        preg_match($pattern, $string, $matches);
        if (!empty($matches)) {
          echo "<span class='matches'>Pattern matched!</span>";
        } else {
          echo "<span class='not-found'>Pattern not matched!</span>";
        }

        echo "<br>";

        if (preg_match($ptr, $str)) {
          echo "<span class='matches'>Function match found!</span>";
        } else {
          echo "<span class='not-found'>Function match not found!</span>";
        }

        echo "<br>";

        if (preg_match($mailpattern, $email)) {
          echo "<span class='valid-email'>Valid email address!</span>";
        } else {
          echo "<span class='invalid-email'>Invalid email address!</span>";
        }
      ?>
    </p>
  </div>
</body>
</html>