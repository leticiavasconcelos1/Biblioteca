<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Biblioteca</title>
</head>
<body>
    <?php
        include_once 'pedaco.php';

        $id_livro = $_GET['id_livro'];
        //echo "Valor do ID" . $id_livro;

        include_once 'conexao.php';


    ?>

    <h2 style = "text-align: center">Formulário para Cadastro de Livros</h2>

    <div class="container">
        <h2>Preencha os dados do Livro</h2>
        <form action="#" method="POST">

            <?php                
                $sql = "SELECT * FROM livros WHERE id_livro = $id_livro";
                $stmt = $pdo->query($sql);
                while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {                    
                    echo "Título: " . $livro['titulo'] . "<br>";
                    echo "Gênero: " . $livro['genero'] . "<br>";
                    echo "Autor:" . $livro['autor'] . "<br>";
                    echo "Ano:" . $livro['ano'] . "<br>";
                    echo "Páginas: " . $livro['paginas'] . "<br><br>";
                }
            ?>

            <div class="mb-3">
                <input type="text" name="titulo" value = 
                "
                    <?php 
                        echo $livro['titulo'];
                    ?>
                "
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input  type="text" name="genero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input  type="text" name="autor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input  name="ano"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input  type="text" name="pag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>            
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="index.php" type="button" class="btn btn-danger">Voltar</a>       
        </form>        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>