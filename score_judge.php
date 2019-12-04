<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>点数判定プログラム</title>
  </head>
  <body>
    <?php
    $score = mt_rand(0,100);
    echo "今回の得点は".$score."となりました。<br>";
    if($score === 100){
      echo "100点満点です。素晴らしい。";
    }elseif($score >= 80 && $score <= 99){
      echo "80点以上です。高得点です。";
    }elseif($score >= 60 && $score <= 79){
      echo "60点以上です。";
    }else{
      echo "60点未満です。もう少し頑張りましょう。";
    }
     ?>
  </body>
</html>
