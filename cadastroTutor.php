<!DOCTYPE html>

<html lang="pt-br">

<head>


</head>

<body>
    <?php include_once 'menu.php'; ?>
    <!--PESQUISA -->
    <div class="container">
        <div class="bd-borda-pesquisar">
            <div class="row ">
                <h6 style="text-align: center;">Cadastro de Tutor </h6>
                <div class="col sm-12 mb-3">
                    <div class="dv-mensagemBusca">
                        <span id="spMensagemBusca"></span>
                    </div>
                    <div class="dv-pesquisa">
                        <input type="hidden" id="txtTutor_id" name="tutor_id" value="<?php echo (isset($_POST['tutor_id']) ? $_POST['tutor_id'] : ""); ?>">
                        <input autocomplete="off" type="text" id="txtBuscaTutor" name="buscaTutor" class="form-control me-2" placeholder="Busca por nome ......" />
                    </div>
                    <div id="caixaDeSugestao">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!--Formulário -->
        <form method="POST" action="" class="formulario">
            <div class="bd-bordas">
                <div class="row">
                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">Nome</span>
                        <input autocomplete="off" type="text" id="txtNome" name="nome" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>" class="letraUpperLower form-control" placeholder="Nome Completo" />
                    </div>

                    <div class="input-group col sm-12 mb-3">
                        <span class="input-group-text">E-mail</span>
                        <input autocomplete="off" type="email" id="txtEmail" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ""); ?>" class="form-control" placeholder="E-mail ">
                    </div>

                </div>
                <!-- Nome do Tutor -->
                <div class="row">
                <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Cpf</span>
                        <input type="text" id="txtCpf" name="cpf" class="form-control" placeholder="Cpf" onkeypress="$(this).mask('000.000.000-00');">
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Telefone</span>
                        <input type="tel" id="txtTelefone" name="telefone" class="form-control" placeholder="Telefone" onkeypress="$(this).mask('(00) 0000-00009')">

                    </div>
                    <div class="col sm-12 mb-4">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-text">Nascimento</span>
                            <input type="date" id="txtDtaNascimento" name="dtaNascimento" value="<?php echo (isset($_POST['dtaNascimento']) ? $_POST['dtaNascimento'] : ""); ?>" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">

                <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Cidade</span>
                        <input autocomplete="off" type="text" id="txtCidade" name="cidade" value="<?php echo (isset($_POST['cidade']) ? $_POST['cidade'] : ""); ?>" class="letraUpperLower form-control" placeholder="Cidade">
                    </div>
                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Endereço</span>
                        <input type="text" id="txtEndereco" name="endereco" class="letraUpperLower form-control" placeholder="Endereço" />
                    </div>

                </div>
                <!-- Dados do Paciente -->
                <div class="row">

                    <div class="input-group col sm-12 mb-3">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-text">Cadastro</span>
                            <input type="datetime-local" id="txtDtaCadastro" name="dtaCadastro" value="<?php echo (isset($_POST['dtaCadastro']) ? $_POST['dtaCadastro'] : ""); ?>" class="form-control" />
                        </div>
                    </div>


                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">UF</span>
                        <select class="form-select" id="txtEstado" name="estado" value="<?php echo (isset($_POST['estado']) ? $_POST['estado'] : ""); ?>">
                            <option value="RS">Rio Grande do Sul (RS)</option>
                            <option value="SC">Santa Catarina (SC)</option>
                            <option value="SC">Paraná (PR)</option>
                        </select>
                    </div>

                    <div class="input-group col sm-12 mb-4">
                        <span class="input-group-text">Status</span>
                        <select class="form-select" id="txtAtivo" name="ativo" value="<?php echo (isset($_POST['ativo']) ? $_POST['ativo'] : ""); ?>">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>

                </div>
                <!-- Botões -->
                <div class="row">
                    <div class="col sm-12 mb-6">
                        <div class="footer">
                            <button type="button" id="btnEnviar" name="btnEnviar" class="btn btn-success">Gravar</button>
                            <button type="button" id="btnAtualizar" name="btnAtualizar" class="btn btn-info">Atualizar</button>
                            <button type="button" id="txtBtnLimpar" name="btnLimpar" class="btn btn-secondary">Limpar</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletarTutor">Excluir</button>
                            </button>
                        </div>
                    </div>
                    <div class="col sm-12 mb-6">
                        <p id="spResultado"></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- INICIO DO MODAL DELETAR -->
    <div class="modal fade" id="modalDeletarTutor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletarTutorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletarTutorLabel">Excluir Tutor.....?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="deletar.php">
                        <div class="row">
                            <div class="input-group col sm-12 mb-6">
                                <span class="input-group-text">ID</span>
                                <input autocomplete="off" type="text" name="nomeTutorNoModal_id" class="form-control" value="<?php echo (isset($_POST['tutor_id']) ? $_POST['tutor_id'] : ""); ?>">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-group col sm-12 mb-6">
                                <span class="input-group-text">Nome</span>
                                <input autocomplete="off" type="text" name="nomeTutorNoModal" class="form-control" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>">
                            </div>
                        </div>
                        <div class=" alertaMensagemModal">
                            <span id="resultadoDeletarTutor"></span>
                        </div>
                        <div class="modal-footer">
                            <input type="button" id="btnDeletarTutor" class="btn btn-outline-success btn-sm" value="Sim, eu quero Excluir" />
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