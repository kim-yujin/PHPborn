<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>
  PHP를 공부하자
</h1>
  <?php
    $x = 5;

    function test(){
        global $x;
        echo " 변수 x는 출력$x";
        echo "<br>";

    }

    test()







  ?>

</body>
</html>