<<<<<<< HEAD
<section class="userslist" id="userslist" style="padding-top:130px">
<?php if ($usuarios == FALSE): ?>
    <h3>Nenhum usuário encontrado</h3>
<?php else: ?>
  


<!--Lista Users-->
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
=======
<table>
    <tr>
        <td><?=anchor('index','Página Inicial')?></td>
        <td><?=anchor('usuario-novo','Novo Usuário')?></td>
    </tr>
</table>

<?php if ($usuarios == FALSE): ?>
    <h3>Nenhum usuário encontrado</h3>
<?php else: ?>
    <table >
        <thead>
            <tr>
                <th>ID </th>
                <th>Nome </th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr >
                    <td><?=$usuario['id']?></td>
                    <td><?=$usuario['username']?></td>
                    <td><?=$usuario['password']?></td>
                    <td><?=anchor('usuario-editar/'.$usuario['id'],'Editar')?>
                    <td><?=anchor('usuario-excluir/'.$usuario['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>

>>>>>>> 758110b37310d86de3a22cf55f1f651136f2dd99
