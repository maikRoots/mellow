
	        </main><!-- end.Main -->

	        <footer>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="footSocial">
								<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-behance-square"></i></a></li>
							</ul>
							<div id="logo" class="icon2">
								<a href="inicio" class="logotipo2"></a>
	        				</div>
	        				<div class="piefoot">
		        				<p>© Mellow Consulting - 2017<br> All rights reserved.</p>
	        				</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<ul class="FootMenu">
									<li><h4>COMPAÑIA</h4></li>
									<li><a href="#">Nosotros</a></li>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Portafolio</a></li>
									<li><a href="#">Equipo</a></li>
									<li><a href="#">Contacto</a></li>
									<li><a href="#">Empleo</a></li>
								</ul>
							</div>
							<div class="col-md-7">
								<ul class="FootMenu2 lineUnder">
									<li><h4>BLOG</h4></li>
									<hr>
									<li>
										<div class="grid3">
											<figure class="effect-sarah2">
												<img src="<?php echo get_template_directory_uri(''); ?>/img/FlechaDerechaAmarilla2.png" alt="img13"/>
												<figcaption>
													<h6>Don’t waste your good ideas</h6>
													<a href="servicios">Don’t waste your good ideas</a>
												</figcaption>
											</figure>
										</div>
									</li>
									<hr>
									<li>
										<div class="grid3">
											<figure class="effect-sarah2">
												<img src="<?php echo get_template_directory_uri(''); ?>/img/FlechaDerechaAmarilla2.png" alt="img13"/>
												<figcaption>
													<h6>The anxiety of alone time</h6>
													<a href="servicios">Don’t waste your good ideas</a>
												</figcaption>
											</figure>
										</div>
									</li>
									<hr>
									<li>
										<div class="grid3">
											<figure class="effect-sarah2">
												<img src="<?php echo get_template_directory_uri(''); ?>/img/FlechaDerechaAmarilla2.png" alt="img13"/>
												<figcaption>
													<h6>When to share your work</h6>
													<a href="servicios">Don’t waste your good ideas</a>
												</figcaption>
											</figure>
										</div>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
	        </footer><!-- end.Footer -->
        </div><!-- end.Wrapper -->

        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery-2.1.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery.mobile.custom.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
        <!-- JS/ B o o t s t r a p -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/classie.js"></script>
        <!-- JS/B a s i c o s -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery.easing.1.3.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/demo1.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/filter.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/main.js"></script>
        <?php if(isset($_GET['sec']) && $_GET['sec'] != '') { ?><!-- Si es igual al nombre de página -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/scripts/<?php echo $_GET['sec'].'.js'; ?>"></script>
        <?php } else { ?>
        <script src="<?php echo get_template_directory_uri(''); ?>js/scripts/default.js"></script>
        <?php } ?><!-- ScriptCustom -->

        <script>

		</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>