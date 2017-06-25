<?php
// オブジェクト指向
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

// オブジェクト指向でない書き方
// $nums = []; // num[i] => 15 * i + 1 ~ 15 * i + 15
//
// for ($i=0; $i < 5; $i++) {
//   $col = range($i * 15 + 1, $i * 15 + 15);
//   shuffle($col);
//   $nums[$i] = array_slice($col,0,5);
// }
//
// $nums[2][2] = "FREE";
//
// function h($s){
//   return htmlspecialchars($s,ENT_QUOTES,'UTF-8');
// }
 ?>

<!DOCTYPE html>
<html lang='ja'>
  <head>
    <meta charset="utf-8">
    <title>BiNGO</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div id="container">
      <table>
        <tr>
          <th>B</th><th>i</th><th>N</th><th>G</th><th>O</th>
        </tr>
        <?php for ($i=0; $i < 5; $i++) { ?>
          <tr>
            <?php for ($j=0; $j < 5; $j++) { ?>
              <td> <?php h(print $nums[$j][$i]); ?></td>
            <?php } ?>
          </tr>
        <?php } ?>
      </table>
    </div>
  </body>
</html>
