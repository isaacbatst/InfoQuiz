<table >
    <tr>
        <td><?=anchor('index','Página Inicial')?></td>
        <td><?=anchor('usuario-novo','Novo Usuário')?></td>
    </tr>
</table>

<?php if ($usuarios == FALSE): ?>
    <h3>Nenhum usuário encontrado</h3>
<?php else: ?>
  


<!--Lista Users-->
<section class="userslist" id="userslist" style="padding-top:130px">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Usuários</h2>
      <hr class="star-dark mb-5">
      <table style="width:100%" >
        <div class="row">
          <tr>
            <div class="lead col-md-6 col-lg-3">
              <th >Nome </th>
            </div>
            <div class="lead col-md-6 col-lg-3">
              <th>Senha </th>
            </div>
            <div class="lead col-md-6 col-lg-3">
              <th>Editar</th>
            </div>
            <div class="lead col-md-6 col-lg-3">
              <th>Excluir</th>
            </div>
          </tr>
        </div>
        <?php foreach ($usuarios as $usuario): ?>      
        <div class="row">
          <tr>
            <div class="col-md-6 col-lg-3">
              <td><?=$usuario['username']?>
            
              </td>
            </div>
            <div class="col-md-6 col-lg-3">
              <td><?=$usuario['password']?></td>
                
              </td>
            </div>
            <div class="col-md-6 col-lg-3">
              <td><?=anchor('usuario-editar/'.$usuario['id'],'Editar')?>
                
              </td>  
            </div>
            <div class="col-md-6 col-lg-3">
              <td><?=anchor('usuario-excluir/'.$usuario['id'],'Excluir')?>
                
              </td>
            </div>
          </tr>
        <?php endforeach; ?>
      </table>   
      <div class="container">
        <div class="text-center mt-4">
            <td><?=anchor('usuario-novo','Novo Usuário', array("class" => "btn btn-xl btn-outline-dark"))?></td>
          
            <td><?=anchor('index','Voltar', array("class" => "btn btn-xl btn-outline-dark"))?></td>
        </div>
      </div>
      
  </section>

  <?php endif; ?>