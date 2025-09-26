<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Projeto S.W - I </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
         <link rel="stylesheet" href="style.css">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" class='listar'>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"> Biblioteca </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Início </a></li>
                        <li class="nav-item"><a class="nav-link" href="form.cadastro.php">Cadastrar livros</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Lista de Livros disponíveis</h2>
                <hr class="divider" />

                <?php
                    require 'conexao.php';
                ?>

                <div class="container ">
                    <table class="table  ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Título</th>
                                <th scope="col">Gênero</th>
                                <th scope="col">Autor</th>  
                                <th scope="col">Ano</th>
                                <th scope="col">Páginas</th>
                                <th scope="col">Opções</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php
                                $sql = "SELECT * FROM livro";
                                $stmt = $pdo->query($sql);

                                while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                        echo "<tr>";
                                        echo "<th scope='row'>" .$livro['id']."</th>";
                                        echo "<td>" . $livro['titulo'] ." </td>";
                                        echo "<td>". $livro['genero'] ."</td>";
                                        echo "<td>" . $livro['autor'] ."</td>";
                                        echo "<td>". $livro['ano'] ."</td>";
                                        echo "<td>". $livro['paginas'] ."</td>";
                                        echo "
                                        <td>
                                            <div class=' text-center' role='group' aria-label='Basic example'>
                                                <a href='form_atualizar.php?id=". $livro['id']."' type='button' class='btn botaot'>Atualizar</a>
                                                <a href='excluir.php?id=" . $livro['id']. "' type='button' class='btn botaol'>Apagar</a>
                                            </div>
                                        </td>
                                        ";

                                        echo "</tr>";
                                }
                            ?>

                                
                        </tbody>
                    </table>
                </div>


                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="index.php" type="button" class="btn btn-outline-secondary" >Voltar</a>
                    </div>


            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5 listar">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Etec mcm - Letícia Vasoncelos - Informática para Internet | 2°C</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
