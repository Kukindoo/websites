<?php
session_start();
?>
 <html>
  <head>
    <meta charset="utf-8">
    <title>CSS3 Fancy Buttons | Code 30 Things in 30 Days with CSS3</title>

    <!-- NORMALIZE CSS -->
    <link rel="stylesheet" href="../_theme-styles/normalize.css">

    <!-- SANDBOX CSS (this is your file!) -->
    <link rel="stylesheet" href="css/main.css">

<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Nova+Mono|Roboto+Condensed" rel="stylesheet">
  </head>
  <body>
  <section id="one">
  <form action="calc.php" id="ut1" method="post">
    <fieldset>
    <legend>Souradnice prvni vesnice:</legend>
    
     <label for="ves1x">
     
      <input type="text" placeholder="X" id="ut1ves1x" name="ut1ves1x">
      
      </label>
      
      <label for="ves1y">
      <input type="text" placeholder="Y" id="ut1ves1y" name="ut1ves1y">
      </label>
    </fieldset>
      <fieldset>
    <legend>Souradnice druhe vesnice:</legend>
     <label for="ves2x">
      <input type="text" placeholder="X" id="ut1ves2x" name="ut1ves2x">
      </label>
      <label for="ves2y">
      <input type="text" placeholder="Y" id="ut1ves2y" name="ut1ves2y">
      </label>
      </fieldset>
      <input type="submit">
  </form>
  <div id="result">
     
      <?php
      if(isset($_GET['timeut1'])){
          echo "<p>From village: ".$_GET['ut1ves1x']."|".$_GET['ut1ves1y']."</p>";
          echo "<p>To village: ".$_GET['ut1ves2x']."|".$_GET['ut1ves2y']."</p>";
          echo '<p>';
          echo $_GET['timeut1'];
          echo "</p>";
      };
      ?>
  </div>
  </section>
  </body>
</html>