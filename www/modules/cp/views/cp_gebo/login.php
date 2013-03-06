<!DOCTYPE html>
<html lang="en" class="login_page">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gebo Admin Panel - Login Page</title>
    
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="/assets/cp/default/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="/assets/cp/default/bootstrap/css/bootstrap-responsive.min.css" />
        <!-- theme color-->
            <link rel="stylesheet" href="/assets/cp/default/css/blue.css" />
        <!-- tooltip -->    
			<link rel="stylesheet" href="/assets/cp/default/lib/qtip2/jquery.qtip.min.css" />
        <!-- main styles -->
            <link rel="stylesheet" href="/assets/cp/default/css/style.css" />
    
        <!-- Favicon -->
            <link rel="shortcut icon" href="/favicon.ico" />
    
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
        <!--[if lte IE 8]>
            <script src="js/ie/html5.js"></script>
			<script src="js/ie/respond.min.js"></script>
        <![endif]-->
		
    </head>
    <body>

		<div class="login_box">
			
			<form action="/admin/login" method="post" id="login_form">
				<div class="top_b">Вход в панель управления</div> 
				<?php
				if(count($errors)){
				?>
				<div class="alert alert-error alert-login">
					<?php
					echo $errors;
					?>
				</div>
				<?php
				}
				?>
				<div class="cnt_b">
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span><input type="text" id="username" name="username" placeholder="Пользователь" value="" />
						</div>
					</div>
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Пароль" value="" />
						</div>
					</div>
					<div class="formRow clearfix">
						<label class="checkbox"><input type="checkbox" value="1" name="remember_me"/> Запомнить меня</label>
					</div>
				</div>
				<div class="btm_b clearfix">
					<button class="btn btn-inverse pull-right" type="submit">Войти</button>
					<!--<span class="link_reg"><a href="#reg_form">Not registered? Sign up here</a></span>-->
				</div>  
			</form>
			
			<form action="admin/remind" method="post" id="pass_form" style="display:none">
				<div class="top_b">Восстановление пароля?</div>    
					<div class="alert alert-info alert-login">
					Введите ваш email. Вы получите инструкции по восстановлению пароля.
				</div>
				<div class="cnt_b">
					<div class="formRow clearfix">
						<div class="input-prepend">
							<span class="add-on">@</span><input type="text" name="email" placeholder="Your email address" />
						</div>
					</div>
				</div>
				<div class="btm_b tac">
					<button class="btn btn-inverse" type="submit">Отправить запрос</button>
				</div>  
			</form>
			
			
			<div class="links_b links_btm clearfix">
				<span class="linkform"><a href="#pass_form">Забыли пароль?</a></span>
				<span class="linkform" style="display:none">Never mind, <a href="#login_form">send me back to the sign-in screen</a></span>
			</div>
		</div>
		
        <script src="/assets/cp/default/js/jquery.min.js"></script>
        <script src="/assets/cp/default/js/jquery.actual.min.js"></script>
        <script src="/assets/cp/default/lib/validation/jquery.validate.min.js"></script>
		<script src="/assets/cp/default/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                
				//* boxes animation
				form_wrapper = $('.login_box');
				function boxHeight() {
					form_wrapper.animate({ marginTop : ( - ( form_wrapper.height() / 2) - 24) },400);	
				};
				form_wrapper.css({ marginTop : ( - ( form_wrapper.height() / 2) - 24) });
                $('.linkform a,.link_reg a').on('click',function(e){
					var target	= $(this).attr('href'),
						target_height = $(target).actual('height');
					$(form_wrapper).css({
						'height'		: form_wrapper.height()
					});	
					$(form_wrapper.find('form:visible')).fadeOut(400,function(){
						form_wrapper.stop().animate({
                            height	 : target_height,
							marginTop: ( - (target_height/2) - 24)
                        },500,function(){
                            $(target).fadeIn(400);
                            $('.links_btm .linkform').toggle();
							$(form_wrapper).css({
								'height'		: ''
							});	
                        });
					});
					e.preventDefault();
				});
				
				//* validation
				$('#login_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						username: { required: true, minlength: 3 },
						password: { required: true, minlength: 8 }
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
				});
            });
        </script>
    </body>
</html>
