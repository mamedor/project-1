<!DOCTYPE html> 
 <?php include 'function.php'; ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
    <?php printQuote($myquotes); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>