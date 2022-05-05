<!DOCTYPE html>
<html lang="pt-br">

<head>
</head>

<body>
    <?php include('menu.php'); ?>
   
    <!--PESQUISA -->
    <div class="container">
        <div class="bd-borda-pesquisar">
            <!-- <div class="row pesquisar"> -->
            <div class="row ">
                <h6 style="text-align: center;">Cadastro de Usuário </h6>
                <div class="col sm-12 mb-3">
                    <div class="dv-mensagemBusca">
                        <span id="spMensagemBusca"></span>
                    </div>
                    <div class="dv-pesquisa">
                        <input type="hidden" id="txtUsuario_id" name="usuario_id" value="<?php echo (isset($_POST['usuario_id']) ? $_POST['usuario_id'] : ""); ?>">
                        <input autocomplete="off" type="text" id="txtBuscar" name="busca" class="form-control me-2" placeholder="Busca por nome......" />
                    </div>
                    <div id="caixaDeSugestao">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FORMULÁRIO GERAL -->
    <div class="container">
        <form method="POST" action="" class="formulario">
            <div class="bd-bordas">
                <!-- Dados, Ações e Permissões -->
                <div class="row">
                <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Nome</span>
                        <input  autocomplete="off" type="text" id="txtNome" name="nome" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>"   class="letraUpperLower form-control" placeholder="Nome Completo" required="required">
                    </div>
                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Apelido</span>
                        <input autocomplete="off" type="text" id="txtApelido" name="apelido" value="<?php echo (isset($_POST['apelido']) ? $_POST['apelido'] : ""); ?>" class="letraUpperLower form-control" placeholder="Apelido" required="required" />
                    </div>
                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Sexo</span>
                        <select class="form-select" id="txtSexo" name="sexo" value="<?php echo (isset($_POST['sexo']) ? $_POST['sexo'] : ""); ?>">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Telefone</span>
                        <input autocomplete="off" type="tel" id="txtTelefone" name="telefone" value="<?php echo (isset($_POST['telefone']) ? $_POST['telefone'] : ""); ?>" class="form-control" placeholder="Telefone" onkeypress="$(this).mask('(00) 0000-00009');">
                    </div>
                </div>

                <div class="row">
                <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">RG</span>
                        <input autocomplete="off" type="text" maxlength="9" id="txtRg" name="rg" class="form-control" value="<?php echo (isset($_POST['rg']) ? $_POST['rg'] : ""); ?>" placeholder="RG" autocomplete="off" required="required" />
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">CPF</span>
                        <input autocomplete="off" type="text" id="txtCpf" name="cpf" class="form-control" value="<?php echo (isset($_POST['cpf']) ? $_POST['cpf'] : ""); ?>" placeholder="Cpf" onkeypress="$(this).mask('000.000.000-00');" required="required"/>
                    </div>

                    <div class="col sm-12 mb-4">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-text">Nascimento</span>
                            <input  autocomplete="off" type="date" id="txtDtaNascimento" name="dtaNascimento" value="<?php echo (isset($_POST['dtaNascimento']) ? $_POST['dtaNascimento'] : ""); ?>" class="form-control" required="required" />
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Cidade</span>
                        <input autocomplete="off" type="text" id="txtCidade" name="cidade" value="<?php echo (isset($_POST['cidade']) ? $_POST['cidade'] : ""); ?>" class="letraUpperLower form-control" placeholder="Cidade" required="required"/>
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">CEP</span>
                        <input  autocomplete="off" type="text" id="txtCep" name="cep" value="<?php echo (isset($_POST['cep']) ? $_POST['cep'] : ""); ?>" onkeypress="$(this).mask('00.000-000')" class="form-control" placeholder="CEP" required="required"/>
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">UF</span>
                        <select class="form-select" id="txtEstado" name="estado" value="<?php echo (isset($_POST['estado']) ? $_POST['estado'] : ""); ?>">
                            <option value="RS">Rio Grande do Sul (RS)</option>
                            <option value="SC">Santa Catarina (SC)</option>
                            <option value="SC">Paraná (PR)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">E-mail</span>
                        <input autocomplete="off" type="email" id="txtEmail" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ""); ?>" class="form-control" placeholder="E-mail " required="required"/>
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Senha</span>
                        <input type="password" id="txtSenha" name="senha" value="<?php echo (isset($_POST['senha']) ? $_POST['senha'] : ""); ?>" class="form-control" placeholder="Senha" required="required"/>
                    </div>
                    <div class="col sm-12 mb-4">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-text">Cadastro</span>
                            <input autocomplete="off" type="datetime-local" id="txtDtaCadastro" name="dtaCadastro" value="<?php echo (isset($_POST['dtaCadastro']) ? $_POST['dtaCadastro'] : ""); ?>" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Permissão</span>
                        <select class="form-select" id="txtPermissao" name="permissao" value="<?php echo (isset($_POST['permissao']) ? $_POST['permissao'] : ""); ?>">
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Status</span>
                        <select class="form-select" id="txtAtivo" name="ativo" value="<?php echo (isset($_POST['ativo']) ? $_POST['ativo'] : ""); ?>">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Função</span>
                        <select class="form-select" id="txtAtuacao" name="atuacao" value="<?php echo (isset($_POST['atuacao']) ? $_POST['atuacao'] : ""); ?>">
                            <option value="1">Administrador</option>
                            <option value="2">Colaborador</option>
                            <option value="3">Médico Veterinário</option>
                        </select>
                    </div>
                </div>
                <!-- Botões -->
                <div class="row">
                    <div class="col sm-12 mb-6">
                        <div class="footer">
                            <button type="button" id="btnEnviarUsuario" class="btn btn-success">Gravar</button>
                            <button type="button" id="btnAtualizarUsuario" class="btn btn-info">Atualizar</button>
                            <button type="button" id="btnLimpar"  class="btn btn-secondary">Limpar</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletarUsuario">Excluir</button>
                            </button>
                        </div>
                    </div>
                    <div class="col sm-12 mb-6">                        
                        <p id="spResultado"><span></p>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- INICIO DO MODAL DELETAR -->
    <div class="modal fade" id="modalDeletarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletarUsuarioLabel">Excluir Usuário...?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="deletarUsuario.php">
                        <div class="row">
                            <div class="input-group col sm-12 mb-6">
                                <span class="input-group-text">ID</span>
                                <input autocomplete="off" type="text" name="nomeUsaurioNoModal_id" class="form-control" value="<?php echo (isset($_POST['usuario_id']) ? $_POST['usuario_id'] : ""); ?>">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-group col sm-12 mb-6">
                                <span class="input-group-text">Nome</span>
                                <input autocomplete="off" type="text" name="nomeUsaurioNoModal" class="form-control" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>">
                            </div>
                        </div>
                        <div class=" alertaMensagemModal">
                            <span id="resultadoDeletarUsuario"></span>
                        </div>
                        <div class="modal-footer">
                            <input type="button" id="btnDeletarUsuario" class="btn btn-outline-success btn-sm" value="Sim, eu quero Excluir" />
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO MODAL -->
   
</body>

</html>