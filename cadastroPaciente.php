<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>
  <?php include 'menu.php'; ?>
  <!--PESQUISA -->
  <div class="container">
    <div class="bd-borda-pesquisar">
      <!-- <div class="row pesquisar"> -->
      <div class="row ">
        <h6 style="text-align: center;">Cadastro de Pacientes</h6>
        <div class="col sm-12 mb-3">
          <div class="dv-mensagemBusca">
            <span id="spMensagemBusca"></span>
          </div>
          <div class="dv-pesquisa">
            <input type="hidden" id="txtPaciente_id" name="paciente_id" value="<?php echo (isset($_POST['paciente_id']) ? $_POST['paciente_id'] : ""); ?>">
            <input type="text" id="txtBuscaPaciente" name="busca" class="form-control me-2" autocomplete="off" placeholder="Busca por nome......" />
          </div>
          <div id="caixaDeSugestao">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Formulário -->
  <div class="container">
    <form method="POST" action="" class="formulario">
      <div class="bd-bordas">
        <!-- Nome do paciente -->
        <div class="row">
          <div class="input-group col sm-12 mb-4">
            <span class="input-group-text">Nome</span>
            <input autocomplete="off" type="text" id="txtNome" name="nome" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>" class=" letraUpperLower form-control" placeholder="Nome do Paciente">
          </div>
          <div class="input-group col sm-12 mb-4">
            <?php
            require_once('Conexao/conexao.php');
            $conexao = abreConexao();
            ?>
            <label class="input-group-text">Tutor:</label>
            <select name="tutor_id" id="txtTutor_id" class="form-control">
              <option value="0">--Selecione o Tutor do Paciente--</option>
              <?php
              $sql = "SELECT tutor_id, nome
        FROM tutor
        ORDER BY  tutor_id, nome";
              $res = mysqli_query($conexao, $sql);
              while ($row = mysqli_fetch_assoc($res)) {
                echo '<option value="' . $row['tutor_id'] . '">' . $row['nome'] . '</option>';
              }
              fechaConexao($conexao);
              ?>
            </select>
          </div>
        </div>
        <!-- Dados do Paciente -->
        <div class="row">
          <div class="input-group col sm-12 mb-4">
            <span class="input-group-text">Idade</span>
            <input autocomplete="off" min="0" type="number" id="txtIdade" name="idade" value="<?php echo (isset($_POST['idade']) ? $_POST['idade'] : ""); ?>" class="form-control" placeholder="Idade">
          </div>

          <div class="col sm-12 mb-4">
            <div class="input-group date" id="datepicker">
              <span class="input-group-text">Nascimento</span>
              <input autocomplete="off" type="date" id="txtDtaNascimento" name="dtaNascimento" value="<?php echo (isset($_POST['dtaNascimento']) ? $_POST['dtaNascimento'] : ""); ?>" class="form-control" />
            </div>
          </div>

          <div class="input-group col sm-12 mb-4">
            <span class="input-group-text">Especie</span>
            <input autocomplete="off" type="text" id="txtEspecie" name="especie" value="<?php echo (isset($_POST['especie']) ? $_POST['especie'] : ""); ?>" class="letraUpperLower form-control" placeholder="Espécie">
          </div>
        </div>

        <div class="row">
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Raça</span>
            <input autocomplete="off" type="text" id="txtRaca" name="raca" value="<?php echo (isset($_POST['raca']) ? $_POST['raca'] : ""); ?>" class="letraUpperLower form-control" placeholder="Raça">
          </div>
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Pelagem</span>
            <input autocomplete="off" type="text" id="txtPelagem" name="pelagem" value="<?php echo (isset($_POST['pelagem']) ? $_POST['pelagem'] : ""); ?>" class="letraUpperLower form-control" placeholder="Pelagem">
          </div>

          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Peso  em Kg</span>
            <input autocomplete="off" type="text" id="txtPeso" name="peso" maxlength="8" value="<?php echo (isset($_POST['peso']) ? $_POST['peso'] : ""); ?>" class="form-control" placeholder="Capacidade em Kg">
          </div>
        </div>

        <div class="row">
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Pedigree</span>
            <select autocomplete="off" class="form-select" id="txtPedigree" value="<?php echo (isset($_POST['pedigree']) ? $_POST['pedigree'] : ""); ?>">
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
          </div>
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Porte</span>
            <select autocomplete="off" class="form-select" id="txtPorte" value="<?php echo (isset($_POST['porte']) ? $_POST['porte'] : ""); ?>">
              <option value="1">Mine</option>
              <option value="2">pequeno</option>
              <option value="3">Médio</option>
              <option value="4">Grande</option>
            </select>
          </div>
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Altura em cm</span>
            <input autocomplete="off" type="text" id="txtAltura" name="altuara" value="<?php echo (isset($_POST['altura']) ? $_POST['altura'] : ""); ?>" class="valorFloat form-control" placeholder="Altura em cm">
          </div>

          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Status</span>
            <select autocomplete="off" class="form-select" id="txtAtivo" value="<?php echo (isset($_POST['ativo']) ? $_POST['ativo'] : ""); ?>">
              <option value="1">Ativo</option>
              <option value="2">Inativo</option>
            </select>
          </div>
        </div>



        <div class="row">
          <div class="input-group col sm-12 mb-3">
            <span class="input-group-text">Observação</span>
            <!-- <label for="formControlTextarea" class="form-label">Observação</label> -->
            <textarea autocomplete="off" class="form-control" id="txtObs" value="<?php echo (isset($_POST['observacao']) ? $_POST['observacao'] : ""); ?>" rows="2" placeholder="Observações"></textarea>
          </div>
        </div>

        <!-- Botões -->
        <div class="row">
          <div class="col sm-12 mb-6">
            <div class="footer">
              <button type="button" id="btnEnviarPaciente" class="btn btn-success">Gravar</button>
              <button type="button" id="btnAtualizarPaciente" class="btn btn-info">Atualizar</button>
              <button type="button" id="btnLimpar" class="btn btn-secondary">Limpar</button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletarPaciente">Excluir</button>
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

  !-- INICIO DO MODAL DELETAR -->
  <div class="modal fade" id="modalDeletarPaciente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletarPacienteLabel">Excluir Paciente.....?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="deletar.php">
            <div class="row">
              <div class="input-group col sm-12 mb-6">
                <span class="input-group-text">ID</span>
                <input autocomplete="off" type="text" name="nomePacienteNoModal_id" class="form-control" value="<?php echo (isset($_POST['paciente_id']) ? $_POST['paciente_id'] : ""); ?>">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="input-group col sm-12 mb-6">
                <span class="input-group-text">Nome</span>
                <input autocomplete="off" type="text" name="nomePacienteNoModal" class="form-control" value="<?php echo (isset($_POST['nome']) ? $_POST['nome'] : ""); ?>">
              </div>
            </div>
            <div class=" alertaMensagemModal">
              <span id="resultadoDeletarPaciente"></span>
            </div>
            <div class="modal-footer">
              <input type="button" id="btnDeletarPaciente" class="btn btn-outline-success btn-sm" value="Sim, eu quero Excluir" />
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