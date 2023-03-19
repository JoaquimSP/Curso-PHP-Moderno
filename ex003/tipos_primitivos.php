<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
    <?php 
      // 0x = hexadecimal 0b = binário 0 = Octal
      // $num = 010;
      // echo "O valor da variável é $num"

      // $num = 3e2; // 3 x 10(2)
      // echo "O valor é $num;

      // $num = (int) "950"; // forçando o php a mostrar a variável num como (int)
      // var_dump($num);

      // $casado = true;
      // var_dump($num);
      // print "O valor para casado é "$casado";

      // $vetor = [6, 2, "Maria", 3, false];
      // var_dump($vetor);

      $variavel1 = 300;
      $variavel2 = "Joaquim";

      var_dump($variavel1);
      echo "<br>";
      var_dump($variavel2);

    ?>  
</body>
</html>