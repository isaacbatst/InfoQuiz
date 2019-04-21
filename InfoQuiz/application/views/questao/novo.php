<?=form_open('questao-salvar')?>
        <tr>
            <td>Pergunta</td>
            <td><input type="text" name="pergunta"/></td>
        </tr>
        <tr>
            <td>Alternativa A</td>
            <td><input type="text" name="alternativa_a"/></td>
        </tr>
        <tr>
            <td>Alternativa B</td>
            <td><input type="text" name="alternativa_b"/></td>
        </tr>
        <tr>
            <td>Alternativa C</td>
            <td><input type="text" name="alternativa_c"/></td>
        </tr>
        <tr>
            <td>Alternativa D</td>
            <td><input type="text" name="alternativa_d"/></td>
        </tr>
        <tr>
            <td>Alternativa Correta</td>
            <td><input type="text" name="alternativa_correta"/></td>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td><input type="text" name="disciplina"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Salvar"/></td>
        </tr>
    </table>
<?=form_close()?>
<?=anchor('questao','Voltar')?>

<section id="novoquestao" style="padding-top:50px">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0"><?=$titulo?></h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						<?=form_open('questao-salvar')?>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Pergunta</label>
                <input class="form-control" id="pergunta" type="text" name="pergunta" placeholder="Pergunta" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alternativa A</label>
                <input class="form-control" id="alternativa_a" type="text" name="alternativa_a" placeholder="Alternativa A" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alternativa B</label>
                <input class="form-control" id="alternativa_b" type="text" name="alternativa_b" placeholder="Alternativa B" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alternativa C</label>
                <input class="form-control" id="alternativa_c" type="text" name="alternativa_c" placeholder="Alternativa C" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alternativa D</label>
                <input class="form-control" id="alternativa_d" type="text" name="alternativa_d" placeholder="Alternativa D" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alternativa Correta</label>
                <input class="form-control" id="alternativa_correta" type="text" name="alternativa_correta" placeholder="Alternativa Correta" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Disciplina</label>
                <input class="form-control" id="Disciplina" type="text" name="Disciplina" placeholder="Disciplina" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div id="success"></div>
						<br/>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl">Salvar</button>
          		<?=form_close()?>
            	<?=anchor('questao','Voltar', array("class" => "btn btn-xl btn-outline-dark"))?>
        		</div>
      	</div>
			</div>
		</div>
  </section>