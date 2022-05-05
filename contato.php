<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>

<body>
    <?php include('menu.php'); ?>

    <!--Formulário -->

    <div class="container">
        <form method="POST" action="" id="formulario" class="formulario">
            <div class="bd-bordas">
                <!-- Status -->
                <h4 style="text-align: center;">Contato</h4>
                <div class="row">
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Nome</span>
                        <input  autocomplete="off"  type="text" id="nome" name="nome" class="form-control" placeholder="Informe seu nome" required>

                    </div>
                </div>
                <div class="row">
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">E-mail</span>
                        <input autocomplete="off"  type="email" class="form-control" id="email" name="email" placeholder="Informe seu E-mail" required>
                    </div>

                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Asssunto</span>
                        <input autocomplete="off"  type="text" class="form-control" id="assunto" name="assunto" placeholder="Informe o Assunto" required>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Mensagem</span>
                        <textarea class="form-control" id="texto" name="texto" rows="3" autocomplete="off"  required></textarea>
                    </div>
                </div>
                  
                        <div id="msn" class=""></div>
                    
               
                <div class="footer">
                    <div class="col mb-3">
                        <button type="submit" name="enviar" class="btn btn-success">Gravar</button>
                        <button type="button" id="btnLimpar" name="limpar" class="btn btn-secondary">Limpar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#btnLimpar").click(function() {
                limpar();
            });
            $('#formulario').submit(function() {
                var dados = $('#formulario').serialize();
                debugger  
                $.ajax({
                    type: 'POST',
                    url: 'envia_email.php',
                    data: dados,
                    dataType: 'json',
                    success: function(response) {  
                        debugger                     
                        $('#msn').css('display', 'block')
                            .removeClass()
                            .addClass(response.tipo)
                            .html('')
                            .html( response.texto );                                                   
                    }
                });

                return false;
            });
        });

        function limpar() {
            $('#nome').val("");
            $('#email').val("");
            $('#assunto').val("");
            $('#texto').val("");
        }
    </script>
</body>

</html>