
<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>
<?php 
include 'Validacao/verifica_login.php';
include 'master.php'; 
$cadastroUsuario = '#'; 
$cadastroTutor = '#';
$cadastroPaciente = '#';
if($_SESSION['permissao'] == 1){  
    $cadastroPaciente = 'cadastroPaciente.php';
}
if($_SESSION['permissao'] == 1){  
    $cadastroUsuario = 'cadastroUsuario.php';
}
if($_SESSION['permissao'] == 1){  
    $cadastroTutor = 'cadastroTutor.php';
}
?>
    <head>
        <nav id="cabecalho" class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="rounded-circle logo"> <img src="Resources\Logo\logo.png" alt=""></div>
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $cadastroUsuario?>">Cadastro do Usuário</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $cadastroPaciente?>">Cadastro do Paciente</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $cadastroTutor?>">Cadastro do Tutor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Usuário logado">
                            <a class="nav-link "><?php echo "{$_SESSION['usuario']}" ?></a>
                        </li>
                    </ul>
                 
                </div>
            </div>
        </nav>
    </head>
</body>

</html>