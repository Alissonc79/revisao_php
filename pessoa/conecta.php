<?php
    $conn = mysqli_connect("localhost", "root", "", "pessoa"); //chamei os métodos, 
                                                                //precisa de informaçoes, //
                                                                //conecta ao banco de dados,nao é uma biblilicoteca.
    mysqli_set_charset($conn, "utf8"); //conectando os carcteres brasileiros.
    if(!$conn){       //if serve para afirmar uma sentença lógica (nao conectado)
        echo "Erro: Falha de conexão!".mysqli_connect_error(); //vai falar pq deu errada a conexão
    }
?>