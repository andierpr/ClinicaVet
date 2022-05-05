<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Vet</title>
    <!--Css-->
    <link rel="stylesheet" href="Css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


    <!--Bootstrap css-->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.css">

    <script type="text/javascript">
        <?php echo file_get_contents('Bootstrap/js/bootstrap.bundle.js') ?>
        <?php echo file_get_contents('Bootstrap/js/bootstrap.bundle.min.js') ?>
        <?php echo file_get_contents('Bootstrap/js/bootstrap.bundle.min.js.map') ?>

        <?php echo file_get_contents('Bootstrap/js/bootstrap.js') ?>
        <?php echo file_get_contents('Bootstrap/js/bootstrap.min.js') ?>
        <?php echo file_get_contents('Bootstrap/js/bootstrap.min.js.map') ?>

        <?php echo file_get_contents('Scripts/jquery-3.2.1.slim.min.js') ?>
        <?php echo file_get_contents('Scripts/jquery-2.1.1.min.js') ?>
        <?php echo file_get_contents('Scripts/jquery-2.1.1.min.js') ?>
        <?php echo file_get_contents('Scripts/jquery.mask.min.js') ?>
        // Script para mascara

        //  Scripts genérico carregar por último 
        <?php echo file_get_contents('Scripts/usuario.js') ?>
        <?php echo file_get_contents('Scripts/paciente.js') ?>
        <?php echo file_get_contents('Scripts/tutor.js') ?>
        <?php echo file_get_contents('Scripts/padrao.js') ?>
    </script>

</head>

<body>

    <footer class="rodape">
        <!-- Copyright -->
        <div class="text-center text-dark p-3">
            <div class="text-rodape">
                Copyright © <?php echo date("Y") ?>
                <a class="text-dark text-rodape" href="https://clinicavet.com/"></a> Clínica Vet - Todos os direitos reservados
            </div>
            <!-- Copyright -->
        </div>
    </footer>
</body>

</html>