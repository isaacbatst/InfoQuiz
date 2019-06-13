<div class="container mt-5 py-5">
	<div class="row my-5">
		<div class="col-md-12">
		<?php foreach ($questoes as $questao): ?>
			<div class="row my-3">
				<div class="col">
					<h4><?=utf8_decode($questao['pergunta'])?></h4>
						<form>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="alternativa_a" >
							  <label class="form-check-label" for="exampleRadios1">
							    <?=utf8_decode($questao['alternativa_a'] )?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="alternativa_b">
							  <label class="form-check-label" for="exampleRadios2">

							    <?=utf8_decode($questao['alternativa_b'] )?>

							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="alternativa_c" >
							  <label class="form-check-label" for="exampleRadios3">

							    <?=utf8_decode($questao['alternativa_c'] )?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="alternativa_d" >
							  <label class="form-check-label" for="exampleRadios4">
							    <?=utf8_decode($questao['alternativa_d'] )?>

							  </label>
							</div>
							<input type="hidden" name="alternativa_correta" value="'alternativa_".<?=$questao['alternativa_correta']?>."'">
					</form>	
				</div>
			</div>
			
		<?php endforeach; ?>
		</div>
	</div>
	<div class="row">
	
		<div class="col">
			<button type="submit" id="enviarquestionario" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">Enviar</button>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      						<form id="respostas">

	        <?php foreach ($questoes as $questao): ?>
			<div class="row my-3">
				<div class="col">
					<h4><?=utf8_decode($questao['pergunta'])?></h4>
							<div class="form-check" >
							  <input disabled class= "form-check-input rquestao<?=$questao['id']?>" type="radio" name="resposta_alternativa" id="exampleRadios1" value="alternativa_a" >
							  <label class="form-check-label" for="exampleRadios1">
							    <?=utf8_decode($questao['alternativa_a'] )?>
							  </label>
							</div>
							<div class="form-check">
							  <input disabled  class= "form-check-input rquestao<?=$questao['id']?>" type="radio" name="resposta_alternativa" id="exampleRadios2" value="alternativa_b">
							  <label class="form-check-label" for="exampleRadios2">

							    <?=utf8_decode($questao['alternativa_b'] )?>

							  </label>
							</div>
							<div class="form-check">
							  <input disabled  class= "form-check-input rquestao<?=$questao['id']?>" type="radio" name="resposta_alternativa" id="exampleRadios3" value="alternativa_c" >
							  <label class="form-check-label" for="exampleRadios3">

							    <?=utf8_decode($questao['alternativa_c'] )?>
							  </label>
							</div>
							<div class="form-check">
							  <input disabled class= "form-check-input rquestao<?=$questao['id']?>" type="radio" name="resposta_alternativa" id="exampleRadios4" value="alternativa_d" >
							  <label class="form-check-label" for="exampleRadios4">
							    <?=utf8_decode($questao['alternativa_d'] )?>

							  </label>
							</div>
							<input type="hidden" name="alternativa_correta_r" id=<?="rquestao".$questao['id']?> value=<?='"alternativa_'.$questao['alternativa_correta'].'"'?>>
					
				</div>
			</div>
			
		<?php endforeach; ?>
		</form>	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>