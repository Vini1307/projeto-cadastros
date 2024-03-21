<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"/>
        <link rel="stylesheet" href="CSS/style.css">

        <title>CADASTRO DOS CLIENTES</title>

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Cadastro clientes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col -4">
                    
                </div>
                <div class="col -8">
                    <form method="get" action="Controller/salvar.php">
                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="nome" name="nome" >
                            <label for="nome" class="form-label">Nome</label>
                        </div>
                        <div class="mt-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email" >
                            <label for="email" class="form-label">E-mail</label>
                        </div>
                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="empresa" name="empresa" >
                            <label for="empresa" class="form-label">Empresa</label>
                        </div>
                        <div class="mt-3 form-floating">
                            <input type="text" class="form-control" id="cnpj" name="cnpj" >
                            <label for="cnpj" class="form-label">cnpj</label>
                        </div>
                        <div class="mt-3 form-floating">
                            <div class="row">
                             <div class="col"><button type="button" class="btn btn-primary form-control botaonovo">Novo</div>
                                <div class="col"><button type="submit" class="btn btn-primary form-control botaosalvar">Salvar</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  
</html>
