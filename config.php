<?php 

//todo config php precisará de criar 4 var's uma para o host, outra para o username do DB, outra para a senha caso exista, e outra para chamar o DB.

// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbPassword = 'Mor190916.';
// $dbName = 'formpi';

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'Mor190916.');
define('BASE', 'formpi'); //antes eu tinha feito esse código seguindo aquele exemplo acima criando variáveis. Não deu certo. Então eu fiz desse outro jeito com define e o nome em maiúsculas de cada coisa dentro do parêntesis aí sim deu certo

$conexao = new mysqli(HOST, USER, PASS, BASE);
//até aqui eu sei que minha conexão já está feita mas para eu ter certeza coloquei este if aqui em baixo para se ela estiver feita de forma errada meu php disparará o echo com uma mensagem de erro
// if($conexao->connect_errno){
//     echo 'erro';
// } else{
//     echo 'conexão efetuada';
// }
?>