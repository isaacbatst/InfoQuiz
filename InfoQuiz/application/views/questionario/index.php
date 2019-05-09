<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php foreach ($questoes as $questao): ?>
			<h1><?=$questao['pergunta']?></h1>
			<form>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    Default radio
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label" for="exampleRadios2">
				    Second default radio
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
				  <label class="form-check-label" for="exampleRadios3">
				    Disabled radio
				  </label>
				</div>
				<button type="submit" class="btn btn-primary">Primary</button>

			</form>
			
		<?php endforeach; ?>
		</div>
	</div>
</div>