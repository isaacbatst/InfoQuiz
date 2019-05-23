<<<<<<< HEAD

<section id="editarsuario" style="padding-top:50px">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0"><?=$titulo?></h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						<?=form_open('usuario-atualizar')?>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Username</label>
								<input class="form-control" id="username" 
								type="text" name="username" placeholder="<?=$usuario['username']?>" required="required" >
                <p class="help-block text-danger"></p>
              </div>
						</div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password</label>
                <input class="form-control" id="password" type="password" name="password" placeholder="Senha" required="required">
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
=======
<?=form_open('usuario-atualizar')?>
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
    <table>
        <tr>
            <td>Nome de Usuário</td>
            <td><input type="text" name="username" value="<?=$usuario['username']?>"/></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="text" name="password" value="<?=$usuario['password']?>"/></td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('usuario','Voltar')?>
>>>>>>> 758110b37310d86de3a22cf55f1f651136f2dd99
