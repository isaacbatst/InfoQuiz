<div class="avisos" style="padding-top:106px; z-index:1000">
	<?php if($this->session->flashdata("success")) : ?>
	<p class='alert alert-success' style="margin-bottom:0"><?=$this->session->flashdata("success")?></p>
	<?php endif ?>
	<?php if($this->session->flashdata("danger")) : ?>
	<p class='alert alert-danger' style="margin-bottom:0"><?=$this->session->flashdata("danger")?></p>
	<?php endif ?>
</div>
	<?php if($this->session->userdata("usuariologado")) : ?>



 <!-- ADM Section -->

 
 <section class="bg-primary text-white mb-0" id="adm">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">ADM's Area</h2>
      <hr class="star-light mb-5">
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
    <div class="container-fluid bg-azul ">

    <div class="row p-5">
    	<div class="col-md-4 text-center my-auto">
    		<div class="row mb-3">
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    		</div>
    		<div class="row mb-3">
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    			<div class="col-md-3"><img class="disciplina-img img-responsive" src="<?= base_url()?>/assets/img/informatica.jpg"></div>
    		</div>
    		<div class="row">
    			<div class="col-md-12 text-center">
		    <?=anchor('questionario-index/5','Iniciar Questionário ', array("class" => "btn btn-primary btn-block btn-x1 align-middle"))?>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-4 text-center">
    		<img src="<?= base_url()?>/assets/img/questionboy.png" width="80%">
    	</div>
    	<div class="col-md-4 my-5">
	      
	          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
	          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						<?=form_open('login-autenticar')?>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Senha</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						<?=form_close()?>
	        
    	</div>
    </div>
      
      
  
    
  </div>
    
</div>
 
<?php endif ?>




 
