<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ayuda" id="ayuda">
	<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-ayuda titulo-mobile"> <p> Ayuda </p> </div>

	<p class="title-ayuda-mobile hidden-lg hidden-md hidden-sm hidden-xl">	Ingrese sus datos para comenzar </br> <span class="atencion-cliente">La atención es de Lunes a Viernes de 8:30h a 17:00h</span></p>

	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 ayuda-box-side hidden-xs ">
		<div class="square box-title-ayuda">
			<img class="img-box-ayuda" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-chat.svg" alt="" />
			<div class=" title-inside-ayuda">
				<h1> Ayuda</h1>
				<p>	Ingrese sus datos para comenzar</p>
			</div>
		</div>


	</div>


	<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 ayuda-form-side">


		<form id="datosUser" onsubmit="return false;">
		<!-- <label>Nombre:</label> -->
		<input name="nombre" required placeholder="Nombre" /><br>
		<!-- <label>Email:</label> -->
		<input name="email" required placeholder="Email" /><br>
		<!-- <label>Motivo:</label> -->
		<textarea name="motivo" required placeholder="Escriba su mensaje aquí" ></textarea> </br>
		<p class="hidden-xs atencion-cliente ">
			La atención es de Lunes a Viernes de 8:30h a 17:00h
		</p>
		<input type="submit" class="send-button-a" onclick="SubmitChat();" />
		</form>

		<div class="page-wrap chatUser" chatid="-1" style="display:none">



        <div class="chat-wrap"><div class="chat-area">
				<div class="welcome-message">
					<span>Bienvenido</span></br> a la mesa de ayuda de Fronteras 2.0. </br>
				</div>
				<div class="hold-message">
					Aguarde unos instantes y será atendido.
				</div>


			</div></div>


				<form class="send-message-area max-box-chat" >
            <!-- <p>Your message: </p> -->
            <textarea class="sendie" maxlength="300" placeholder="Escriba su mensaje aquí"  ></textarea>
        </form>



		</div>

	</div>


</section>
