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

    	<div class="col-md-4 text-center text-color-white">

    	<div class="row ">
    		<div class="col">
    			<h5>Confira várias questões de diferentes disciplinas da informática e responda as perguntas para testar o seu conhecimento.</h5>
    		</div>
    	</div> 
    	<div class="row ">
    		<div class="col">
	    		<?=form_open('questionario-index/10')?>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <button class="btn btn-outline-secondary disabled " type="button">Escolha a disciplina</button>
				  </div>
				  <select name="disciplina" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon" required>
				    <?php foreach ($disciplinas as $disciplina): ?>
	    				<option  value=<?="'".$disciplina['disciplina']."'"?>><?=$disciplina['disciplina']?></option>
	    			<?php endforeach; ?>
				  </select>
				</div>
				
	            <div class="form-group">
	              
	             </div>
	          	

	    		<div class="row">
	    			<div class="col-md-12 text-center">
	                <button type="submit" class="btn btn-primary btn-block btn-x1 align-middle">Iniciar Questionário</button>
	    			</div>
	    		</div>
	    		<?=form_close()?>
    		</div>
    	</div> 

    	</div>
    	<div class="col-md-4 text-center">
    		<img src="<?= base_url()?>/assets/img/questionboy.png" width="80%">
    	</div>
    	<div class="col-md-4 ">
	      				<h5>Faça seu cadastro</h5>

	          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
	          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						<?=form_open('login-autenticar')?>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>

						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Senha</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						  </div>
						  <div class="form-check form-check-inline mb-4">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Professor</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">Aluno</label>
							</div>
						<br>
						  <button type="submit" class="btn btn-primary">Criar Conta</button>

						<?=form_close()?>
	        
    	</div>
    </div>
      
      
  
    
  </div>
    
</div>
 
<?php endif ?>




