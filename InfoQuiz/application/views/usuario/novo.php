<section id="novousuario" style="padding-top:150px">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Novo Usuário</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						<?=form_open('usuario-salvar')?>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Username</label>
                <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="required" data-validation-required-message="Por favor insira o login.">
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password</label>
                <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="required" data-validation-required-message="Por favor insira a senha.">
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div id="success"></div>
						<br/>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl">Salvar</button>
          		<?=form_close()?>
            	<?=anchor('usuario','Voltar', array("class" => "btn btn-xl btn-outline-dark"))?>
        		</div>
      	</div>
			</div>
		</div>

  </section>
