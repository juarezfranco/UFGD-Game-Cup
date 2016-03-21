<!-- Modal -->
<div class="modal fade" id="modal_cadopcao2" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Opção 2: Cadastrar nas palestras e no campeonato de CS: GO</h4>
      <div id="alertfail2" class="alert alert-danger fade" style="padding: 0px; margin-bottom: 0px">
      </div>


    </div>

    <form id="form-opcao2" role="form">
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <h4 style="margin-bottom:0px;">Nome da Equipe</h4>
            <div class="col-lg-6">
            <div class="form-group">
              <input type="text" class="form-control"  name="nomeequipe" id="nomeequipe" required>            
            </div>
            </div>
          </div>
          <?php 
          $colors = array(
            0=>'#3498DB',//azul
            1=>'#F1C40F',//amarelo
            2=>'#E74C3C',//vermelho
            3=>'#9B59B6',//roxo
            4=>'#2ECC71'//verde
            );
          for($i=0 ; $i<5 ; $i++){ 
            ?>

            <div class="col-lg-12">
              <?php $lider= ($i==0)?' (Líder)':''; ?>
              <h4 style="margin-bottom:0px; color:<?php echo $colors[$i];?>">
                Jogador <?php echo ($i+1).$lider; ?>
              </h4>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nome<?php echo $i; ?>">Nome: </label>
                  <input type="text" class="form-control"  name="nome<?php echo $i; ?>" id="nome<?php echo $i; ?>" required>
                </div>

                <div class="form-group">
                  <label for="cpf<?php echo $i; ?>">CPF:</label>
                  <input type="text" class="form-control cpf-input" name="cpf<?php echo $i; ?>" id="cpf<?php echo $i; ?>" required>
                </div>   
              </div>         

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email<?php echo $i; ?>">Email:</label>
                  <input type="email" class="form-control" name="email<?php echo $i; ?>" id="email<?php echo $i; ?>" required>
                </div>            

                <div class="form-group">
                  <label for="fone<?php echo $i; ?>">Fone:</label>
                  <input type="text" class="form-control fone-input" name="fone<?php echo $i; ?>" id="fone<?php echo $i; ?>" required>
                </div>
              </div>

            </div>  

            <?php } ?>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-default" >Cadastrar</button>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
  /* preenche todos os campos com valores randomicos para teste
    $(document).ready(function() {
      for(var i =0; i<5; i++){
        $('#nome'+i).val('nome '+i);
        $('#fone'+i).val('(67) 9975-5532');
        $('#email'+i).val(i+'@email.com');
        $('#cpf'+i).val('000.255.255-00');
      }
    });
*/
  </script>