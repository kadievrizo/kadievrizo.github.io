<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700,700i,800&display=swap&subset=cyrillic" rel="stylesheet">
	<title>Портфолио Ризвана Кадиева</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    
    <script src="assets/js/modernizr.custom.js"></script>
       
</head>
<body>




<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'rizkadiev@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to rizkadiev@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>





















	

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start"><span>Привет, меня зовут Ризван Кадиев, и я</span></div>
			<h1>Веб разработчик</h1>
			<div class="start"><span>cоздание современного и адаптивного веб-приложения</span></div>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Rizo</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Главная</a></li>
						
                        <li><a href="#portfolio">Мои работы</a></li>
                        <li><a href="#skills">Навыки</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!-- Services start -->

	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Вот что я умею</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
                         Решать. Меняться. Стремиться вперёд. Мыслить. Принимать вызовы. Вставать и действовать. Отказываться от стереотипов. Достигать. Мечтать. Открывать. Верить. Останавливаться. Слушать себя. Расти. Побеждать. Смотреть на жизнь открытыми глазами.





							
						</div>
					</div>

				</div>

			</div>

			
		</div><!-- .container -->
	</section>

	<!-- Services end -->
    
	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои работы</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Никто не зажигает свечу, чтобы хранить ее за дверью, ибо свет затем и существует, чтобы светить, открывать людям глаза, показывать, какие вокруг чудеса.
						</div>
					</div>

				</div>

			</div><!-- .row -->
            
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                          <img src="assets/images/item-1.jpg" alt="img01"/>
                            <figcaption>
                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/first/index.html"></a> 

                                <h2>Работа <span>1</span></h2>
                                <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-2.jpg" alt="img01"/>
                            <figcaption>

                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/second/Verstka/index.html"> </a> 

                                <h2>Работа <span>2</span></h2>
                                 <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-3.jpg" alt="img01"/>
                            <figcaption>
                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/three/index.html"> </a> 
                                 <h2>Работа <span>3</span></h2>                              <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-4.jpg" alt="img01"/>
                            <figcaption>
                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/six/Slider/index.html"> </a> 
                                 <h2>Работа <span>4</span></h2>
                                 <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-5.jpg" alt="img01"/>
                            <figcaption>
                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/eight/index.html"> </a> 
                                 <h2>Работа <span>5</span></h2>
                                 <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-6.jpg" alt="img01"/>
                            <figcaption>
                            	<a href="https://kadievrizo.github.io/Portfolio/my-works/seven/30-calculator/index.html"> </a> 
                                 <h2>Работа <span>6</span></h2>
                                 <p>Нажмите на картинку, чтобы перейти на ссылку.</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->
    
    <!-- Skills start -->
    
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Mои Навыки</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                   Большинство хороших программистов делают свою работу не потому, что ожидают оплаты или признания, а потому что получают удовольствие от программирования.
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="67" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">75</span>
                        </span>
						<h3 class="text-center">Программирование</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="60" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">60</span>
                        </span>
						<h3 class="text-center">Дизайн</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="65" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">65</span>
                        </span>
						<h3 class="text-center">Маркетинг</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="72" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">72</span>
                        </span>
						<h3 class="text-center">UI / UX</h3>
					</div>
					
				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

	<!-- CallToAction start -->

	<section class="calltoaction">
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">ВЫ ГОТОВЫ НАЧАТЬ ?</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						Я доступен для фриланс проектов.
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">Нанять меня</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Что говорят мои клиенты</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							 Есть два способа создания дизайна программы. Один из них, это сделать его настолько простым, что в нем, очевидно, не будет недостатков. Другой способ — сделать его настолько запутанным, что в нем не будет очевидных недостатков.
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="assets/images/client-1.jpg" alt="client-1" />
                    <blockquote>
                      <p>Работать с Ризваном было одно удовольствие. Он точно понял, чего я хочу, и создал потрясающий сайт для моей компании.</p>
                      <footer>Дмитрий Васильев</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="assets/images/client-2.jpg" alt="client-2" />
                    <blockquote>
                      <p>Я очень доволен результатами. Получить 100% удовлетворение сложно, но Алекс получил его без проблем.</p>
                      <footer>Наталья</footer>
                    </blockquote>
                </div>

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Связаться со мной</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Запишите свои данные, и уточните чего вы хотите.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Name</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Ваше имя">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="Ваш E-mail">
							</div>

						

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Сообщение"></textarea>
							</div>

						

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="https://vk.com/kadiev_095" class="wow fadeInUp"><i class="fa fa-vk"></i></a></li>
					
						<li><a href="#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://instagram.com/_kadiev013_" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-instagram"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-whatsapp"></i></a></li>
					</ul>

					<p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> Rizo
                    </p>
                    <p class="copyright">
                        © 2019 Rizvan Kadiev
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>


</body>
</html>
