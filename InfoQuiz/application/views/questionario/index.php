<div class="container mt-5 py-5">
	<div class="row my-5">
		<div class="col-md-12">
		<?php foreach ($questoes as $questao): ?>
			<div class="row my-3">
				<div class="col">
					<h4><?=$questao['pergunta']?></h4>
						<form>
							<div class="form-check alert alert-success">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="alternativa_a" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    <?=$questao['alternativa_a']?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="alternativa_b">
							  <label class="form-check-label" for="exampleRadios2">
							    <?=$questao['alternativa_b']?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="alternativa_c" >
							  <label class="form-check-label" for="exampleRadios3">
							    <?=$questao['alternativa_c']?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="alternativa_d" >
							  <label class="form-check-label" for="exampleRadios3">
							    <?=$questao['alternativa_d']?>
							  </label>
							</div>
						</form>	
				</div>
			</div>
			
		<?php endforeach; ?>
		</div>
	</div>
	<div class="row">
	
		<div class="col">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</div>
</div>