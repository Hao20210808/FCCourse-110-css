<?php
  $n1 = 10;
  $n2 = 20;
  $n3 = $n1 + $n2;
?>
/* http://localhost/test2.php */
<?php
  $n1 = $_GET['v1'];
  $n2 = $_GET['v2'];
  $n3 = $n1 + $n2;

  if ($n1 > $n2) {
    $tmp = $n1;
    $n1 = $n2;
    $n2 = $tmp;
  }
?>
<?php
  $n1 = $_GET['v1'];
  $n2 = $_GET['v2'];
  $n = $_GET['n'];
  if ($n1 > $n2) {
    $tmp = $n1;
    $n1 = $n2;
    $n2 = $tmp;
  }
  $n2 = $n1 + $n2;
?>
/* http://localhost!v1=10&v2=20 */

/* HTTP GET(R) 
          POST(C)
          PUT(V)
          DELETE(D) 
*/

<form method="POST" action="URL to the target script/page">
  <input type="text" name="v1" value="100">
  <textarea name="..."> ... </textarea>
  <input type="submit" value="ClickIt!">
</form>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=""UTF-8"/>
        <title>TEST02</title>
    </head>
    <body>
        <h1>TEST PAGE</h1>
        <p>The first PHP file.</p>
        <?php
          echo "<p>the output string from PHP.</p>";
          echo "n1=" . $n1 . "<br/>";
          echo "n2=$n2<br/>";
        ?>
        <p>n1 + n2 = <?=$n3?></p>
        <?php
          for ($i=0; $i<$n; $i++) {
            echo '<br/>HELLO WORLD!';
          }
        ?>
        /* a mechanism for storing data in the remote browser and thus tracking or identifying return users.
          setcookie()
          setrawcookie()
          $_COOKIE['x'];
          $_COOKIE['any_prop']['key']
        */

        /* a way to preserve  certain data across subsequent accsesses.
          session_start()
          $_SESSION['xxx']
          $_SESSION['ary_prop']['key']
        */

        /* Session Cleanup / logout
          session_start()
          session_unset()
          session_destroy()
        */

        /*
          function_construct() {...}
          function_construct(...) {...}

          function_destruct() {...}
        */
    </body>
</html>