!<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>Home</title>
</head>

<body>
  <?php
  function inverse($x) {
      if (!$x) {
          throw new Exception('');
      }
      return 1/$x;
  }

  try {
      echo inverse(5) . "\n";
      echo inverse(0) . "\n";
  } catch (Exception $e) {
      echo 'er is iets fout gegaan';
  }
   ?>
</body>

<main>

</main>

<footer>

</footer>
