<link rel="stylesheet" href="style.css">
<?php

// inicia sessão da página
session_start();

// Lê o valor atual de $num da variável sessão, ou define como 0 se não existir
$num = $_SESSION['num'] ?? 0;

// Incrementa o valor de $num
$num++;

// Armazena o novo valor de $num na variável de sessão
$_SESSION['num'] = $num;


// estabelece a conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lotofacil";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}


// cria um array vazio
$array = array();

// preenche o array com valores aleatórios únicos
while(count($array) < 15) {
  // gera um valor aleatório entre 1 e 25
  $valor = rand(1, 50);
  // verifica se o valor já está no array
  if (!in_array($valor, $array)) {
    // adiciona o valor no array
    $array[] = $valor;
  }
}


// Usa o valor de $num para nomear a nova coluna
$sorteio = "Sorteio_$num";


  $sql = mysqli_query($conn,"INSERT INTO loteria (sorteio, num1, num2, num3, num4, num5, num6, num7, num8, num9, num10, num11, num12, num13, num14, num15) VALUES ('$sorteio','$array[0]', '$array[1]', '$array[2]', '$array[3]', '$array[4]', '$array[5]', '$array[6]', '$array[7]', '$array[8]', '$array[9]', '$array[10]', '$array[11]', '$array[12]', '$array[13]', '$array[14]')");


// fecha a conexão com o banco de dados
mysqli_close($conn);

// Função para comparar duas arrays
function comparar_arrays($arr1, $arr2) {
  $diff = array_diff($arr1, $arr2);
  if (count($diff) == 0) {
      return true;
  } else {
      return false;
  }
}

// Verifica se o formulário foi submetido e se os valores foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["valores"])) {
  // Array com os valores selecionados pelo usuário
  $valores = $_GET["valores"];
  // Verifica se as arrays têm os mesmos valores
  
  $result = comparar_arrays($valores, $array)? 'Você acertou!' : 'Não foi dessa vez!';

  echo "<div class='resultado'>";
  echo $result;
  echo "</div>";
      echo "<div class='wrapper'>";

      echo "<div class='meuJogo'>";
      echo "Seu jogo: <br>" . implode(" - ",$valores);
      echo "</div>";
      echo "<div class='sorteio'>"; 
      echo "Resultado: <br>" . implode(" - ",$array);
echo "</div>";
      echo "</div>";
      echo "<a href='index.php'> <div class='buttonWrapper'>
      <input type='submit' value='Tentar Novamente' class='button'>
            </div> </a>";
}

$array = null;
?>