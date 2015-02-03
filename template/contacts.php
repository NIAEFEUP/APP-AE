<?php include_once('header.php'); ?>

<div class="container"> 
<label style="font-size:30px;" id="label" > Contacto</label>
        <div class="row" id="main-content">

	          <div class="col-md-6" id="sidebar">

	            <div id="contacts" class="well" id="contacts">
					
					<form action="#" method="post">
					  	<fieldset>
							<div class="form-group col-md-10">
								<div class="row">
									<label>Nome </label>
									</br>
									<input id="name" class="form-control" name="username" placeholder="Nome" type="text" autofocus>
									</br>
									<label>Email</label>
									</br>
									<input id="email" class="form-control" name="email" placeholder="Email" type="email" autofocus>
									</br>
									<label>Telemóvel</label>
									</br>
									<input id="phone" class="form-control" name="phone" placeholder="Telemóvel" type="tel" autofocus>
								</div>
								<div class="row col-md-10">
									</br>
									<label>Tipo</label>
								    <div class="input-group input-group">
								        <input class="pull-left" type="radio">Fornecedor</input>
								    </div>
								    <div class="input-group input-group">
								        <input class="pull-left" type="radio">Outro</input>
								        </br>
								    </div>

							 	</div>
								
								<div class="row col-md-10">
									</br>
									<label>Observações</label>
									</br>
									<textarea class="col-md-10"name="message" id="message"></textarea>
								</div>
								</br>
								<div class="row col-md-12 pull-right"> <!--LOGIN AND REGISTER BTN-->
									</br>
				                    <input name="submit" type="submit" class="btn btn-primary pull-right" value="Pronto!">
				                </div>

							</div>
							
						</fieldset>
					</form>
				</div>
			</div
		</div>
</div>

<?php include_once('footer.php'); ?>