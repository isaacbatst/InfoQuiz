
<<<<<<< HEAD
<section class="questionlist" id="questionlist" style="padding-top:130px">
  
      
	<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questao encontrada</h3>
	<?php else: ?>
    
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0"><?=$titulo?></h2>
			<hr class="star-dark mb-5">
			<div class="container" style="padding-bottom:30px">
    <div>
      <td><?=anchor('questao-novo','Nova Questão', array("class" => "btn btn-xl btn-outline-dark"))?></td>
      <td><?=anchor('index','Voltar', array("class" => "btn btn-xl btn-outline-dark"))?></td>
    </div>
  </div>
      <table style="width:100%" >
        <div class="row" >
          <tr >
            <div class="lead col-md-6 col-lg-4">
              <th >Questão </th>
            </div>
            <div class="lead col-md-6 col-lg-2">
              <th> Alternativa Correta</th>
            </div>
            <div class="lead col-md-6 col-lg-2">
              <th> Disciplina</th>
            </div>
            <div class="lead col-md-6 col-lg-2">
              <th> Editar</th>
            </div>
            <div class="lead col-md-6 col-lg-2">
              <th> Excluir</th>
            </div>
          </tr>
        </div>
        <?php foreach ($questoes as $questao): ?>      
        <div class="row" >
          <tr >
            <div class="col-md-6 col-lg-4">
              <td style="padding-bottom:5px; padding-right:10px"><?=$questao['pergunta']?></td>
            </div>
            <div class="col-md-6 col-lg-2">
              <td style="padding-bottom:5px; padding-right:10px"><?=$questao['alternativa_correta']?></td></td>
            </div>
            
            <div class="col-md-6 col-lg-2">
              <td style="padding-bottom:5px; padding-right:10px"><?=$questao['disciplina']?></td>  
            </div>
            <div class="col-md-6 col-lg-2">
              <td style="padding-bottom:5px; padding-right:10px"><?=anchor('questao-editar/'.$questao['id'],'Editar')?></td>
            </div>
            <div class="col-md-6 col-lg-2">
              <td style="padding-bottom:5px; padding-right:10px"><?=anchor('questao-excluir/'.$questao['id'],'Excluir')?></td>
            </div>
          </tr>
        <?php endforeach; ?>
      </table>   

      
  
<?php endif; ?>
</section>
=======
<table>
    <tr>
        <td><?=anchor('index-index','Página Inicial')?></td>
        <td><?=anchor('questao-novo','Nova Questão')?></td>
    </tr>
</table>


<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questao encontrada</h3>
<?php else: ?>
    <table >
        <thead>
            <tr>
                <th>ID </th>
                <th>Questão </th>
                <th>Alternativa A</th>
                <th>Alternativa B</th>
                <th>Alternativa C</th>
                <th>Alternativa D</th>
                <th>Alternativa Correta</th>
                <th>Disciplina</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questoes as $questao): ?>
                <tr >
                    <td><?=$questao['id']?></td>
                    <td><?=$questao['pergunta']?></td>
                    <td><?=$questao['alternativa_a']?></td>
                    <td><?=$questao['alternativa_b']?></td>
                    <td><?=$questao['alternativa_c']?></td>
                    <td><?=$questao['alternativa_d']?></td>
                    <td><?=$questao['alternativa_correta']?></td>
                    <td><?=$questao['disciplina']?></td>
                    <td><?=anchor('questao-editar/'.$questao['id'],'Editar')?>
                    <td><?=anchor('questao-excluir/'.$questao['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>
>>>>>>> 758110b37310d86de3a22cf55f1f651136f2dd99

