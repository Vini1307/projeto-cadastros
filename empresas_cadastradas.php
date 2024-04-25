<?php
    include_once "Controller/conexao.php";  
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"/>
        <link rel="stylesheet" href="CSS/style.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
        <title>CLIENTES JÁ CADASTRADOS</title>
    </head>
    <body>
    <div class="container">
            <div class="login">
            <div class="row">
                <div class="col">
                    <h2>Cadastro clientes</h2>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col -4"> -->
                    
                </div>
                <div class="col -8">
                    <form method="get" action="Controller/salvar.php">
                    <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="id" name="id" 
                            value="<?php echo filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                            <label for="id" class="form-label">ID</label>
                        </div>

                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="nome" name="nome" 
                            value="<?php echo filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                            <label for="nome" class="form-label">Nome</label>
                        </div>

                        <div class="mt-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email" 
                            value="<?php echo filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                            <label for="email" class="form-label">E-mail</label>
                        </div>

                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="empresa" name="empresa" 
                            value="<?php echo filter_input(INPUT_GET, "empresa", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                            <label for="empresa" class="form-label">Empresa</label>
                        </div>

                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="cnpj" name="cnpj" 
                            value="<?php echo filter_input(INPUT_GET, "cnpj", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                            <label for="cnpj" class="form-label">Cnpj</label>
                        </div>

                        <div class="mt-3 form-floating">
                            <div class="row">
                                <div class="col"><button type="button" class="btn btn-primary form-control botaonovo">Novo</div>
                                <div class="col"><button type="submit" class="btn btn-primary form-control botaosalvar">Salvar</div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger form-control botaoexcluir" onclick="window.location.href='empresas_cadastradas.php'">Empresa Cadastradas</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        </div>


    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <button onclick="window.location.href = 'index.php';" class="home">Home</button>
        <div class="container2">
            <div class="row">
                <div class="col">
                    <h2> Empresas cadastradas </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Empresa</th>
                                <th>Cnpj</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "Select * from clientes";
                                $pesquisar = mysqli_query ($link, $sql);
                                while ($linha = $pesquisar->fetch_assoc()) {
                                    echo "  <tr>
                                                <td>".$linha['id']."</td>
                                                <td>".$linha['nome']."</td>
                                                <td>".$linha['email']."</td>
                                                <td>".$linha['empresa']."</td>
                                                <td>".$linha['cnpj']."</td>
                                                <td>
                                                    <a href='?
                                                        nome=".$linha['nome']."&
                                                        email=".$linha['email']."&
                                                        empresa=".$linha['empresa']."&
                                                        cnpj=".$linha['cnpj']."&
                                                        '>
                                                        <img src='imagens/lapis.png' class='lapis'>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href='Controller/excluir.php?id=".$linha['id']."' onclick='return confirm(\"Tem certeza que deseja excluir este cliente?\")'>
                                                        <img src='imagens/lata-de-lixo.png' class='lixo'>
                                                    </a>
                                                </td>
                                            </tr>";
                                }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  
</html>