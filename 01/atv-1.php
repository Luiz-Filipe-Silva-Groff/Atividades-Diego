<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    
    <title>atv-1</title>

    <script>


    </script>

</head>
<body>

    <div class="container mt-5" id="caixa">

    <div>
        
        <div id="cab">
            <h1>Atividade de PHP <img src="php1.png" alt=""></h1> 
        </div>

        <form id="formWork" method="POST">

        <label for="">Nome:</label>
        <div class="input-control"><input class="form-control" type="text" name="nome" id="nome" placeholder="Informe o seu nome"></div>
        <label for="">E-mail:</label>
        <div class="input-control"><input class="form-control" type="text" name="usu" id="usuario" placeholder="Informe o seu e-mail"></div>
        <div id="btn-control"><input type="submit" name="saveDados" id="saveEmail" value="Gravar" class="btn-1 submit"></div>
        
        </form>

    </div>

    </div> 

   

    <script>

$('.submit').on('click', event => {
            event.preventDefault();
            const data = {
                nome: $('#nome').val(),
                usuario: $('#usuario').val(),
                action: $(event.target).prop('name')
            };
            $.ajax('/atvApi-1.php', {
                method: 'POST',
                data: JSON.stringify(data),
                success: resp => {
                    console.log(resp);
                }
            });
        });

        

    </script>
    
</body>
</html>

