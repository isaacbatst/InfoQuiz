<div class="avisos" style="padding-top:106px; z-index:1000">
	<?php if($this->session->flashdata("success")) : ?>
	<p class='alert alert-success' style="margin-bottom:0"><?=$this->session->flashdata("success")?></p>
	<?php endif ?>
	<?php if($this->session->flashdata("danger")) : ?>
	<p class='alert alert-danger' style="margin-bottom:0"><?=$this->session->flashdata("danger")?></p>
	<?php endif ?>
	<?php if($this->session->userdata("usuariologado")) : ?>
</div>


 <!-- ADM Section -->

 
 <section class="bg-azul text-white mb-0" id="adm">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">ADM's Area</h2>
			<div class="text-center mt-4">
					<td><?=anchor('questao','Questões', array("class" => "btn btn-xl btn-outline-light"))?></td>
        
					<td><?=anchor('usuario','Usuários', array("class" => "btn btn-xl btn-outline-light"))?></td>
			</div>
			<div class="text-center mt-4">
					<td><?=anchor('login-logout','Sair', array("class" => "btn btn-xl btn-outline-light"))?></td>
			</div>

		</div>

	</section>
	
  
<?php else : ?>
<!-- Login Section -->
	<section id="login" style="padding-top:50px">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">ADM Login</h2>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<?=form_open('login-autenticar')?>
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
              <button type="submit" class="btn btn-primary btn-xl" id="Login">Login</button>
            </div>	
					<?=form_close()?>
        </div>
      </div>
    </div>
     <div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
    
</div>
  </section>
<?php endif ?>

