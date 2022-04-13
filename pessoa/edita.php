<html>
    <body>
        <center><h3>CRUD PHP</h3></center>
        <hr/>
            
        <?php
            include 'conecta.php';  
            $id = $_GET['id'];
            $sql = "SELECT * FROM humano WHERE id=$id"; //somente os dados daquele id
            $query = $conn->query($sql);
            while($dados = $query->fetch_assoc()){ //laço transformando num array associativo
                $id = $dados['id'];
                $nome = $dados['nome'];
                $idade = $dados['idade'];
            }
        ?>
        <form action="editar.php?id=<?php echo $id; ?>" method="POST"> 
            <label>Nome</label><br/>
            <input type="text" name="nome" value="<?php echo $nome; ?>"/><br/>
            <label>Idade</label><br/>
            <input type="number" name= "idade" value="<?php echo $idade; ?>"/><br/><br/> 
            <input type="submit" value ="Atualizar" name="btinserir"/>
        </form>
    </body>
</html>