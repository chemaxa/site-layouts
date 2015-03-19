<?php get_header();?>


<section id="about" class="s_about bg_light">
	<div class="section_header">
		<h2><?php echo get_cat_name(1) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php echo category_description(1); ?> </div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">

				<?php if ( have_posts() ) : query_posts( 'p=6'); while (have_posts()) : the_post(); ?>
				<div class="col-md-4 col-md-push-4 animation_1">
					<h3>Фото</h3>
					<div class="person">
						<?php if ( has_post_thumbnail( ) )?>

						<?php $large_url=wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );?>
						<a href=" <?php echo $large_url[0]?>" class="popup">
							<?php the_post_thumbnail(array(200, 200)); ?>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-md-pull-4 animation_2">
					<h3><?php echo the_title(); ?></h3>
					<?php echo the_content(); ?>
				</div>
				<? endwhile; endif; wp_reset_query(); ?>


				<?php if ( have_posts() ) : query_posts( 'p=9'); while (have_posts()) : the_post(); ?>
				<div class="col-md-4 animation_3 personal_last_block">

					<h3><?php the_title(); ?></h3>
					<h2 class="about_name"><?php echo get_bloginfo( 'name' ); ?></h2>
					<?php the_content(); ?>

					<? endwhile; endif; wp_reset_query(); ?>


					<div class="social_wrap">
						<ul>
							<?php if ( have_posts() ) : query_posts( 'cat=3'); while (have_posts()) : the_post(); ?>
							<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a>
							</li>
							<? endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>

				</div>


			</div>
		</div>
	</div>
</section>

<section id="resume" class="s_resume">
	<div class="section_header">
		<h2><?php echo get_cat_name(4) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php echo category_description(4); ?> </div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 left">
					<h3>Работа</h3>
					<div class="resume_icon"><i class="icon-basic-case"></i>
					</div>
					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>

					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>
					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>

				</div>

				<div class="col-md-6 col-sm-6 right">
					<h3>Учеба</h3>
					<div class="resume_icon"><i class="icon-basic-book-pen"></i>
					</div>

					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>

					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>
					<div class="resume_item">
						<div class="year">2005-2015</div>
						<div class="resume_description">ООО "РОга и копыта" <strong>Программист</strong>
						</div>
						<p>
							Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="s_portfolio bg_dark">
	<div class="section_header">
		<h2>Портфолио</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Мои работы</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">


				<ul>
					<li class="filter active" data-filter="all">Все работы</li>
					<li class="filter" data-filter=".category-1">Сайты</li>
					<li class="filter" data-filter=".category-2">Логотипы</li>
					<li class="filter" data-filter=".category-3">Айдентика</li>
				</ul>

				<div class="portfolio_table">
					<div class="mix col-md-3 col-sm-6 col-xs-12 category-1"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr" id="work_1">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt">
							</div>
						</div>
					</div>


					<div class="mix col-md-3 col-sm-6 col-xs-12 category-1"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-1"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-2"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-2"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-2"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-3"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt">
							</div>
						</div>
					</div>

					<div class="mix col-md-3 col-sm-6 col-xs-12 category-3"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt">
						<div class="item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vero ratione maiores, eius fugit consequuntur rerum in culpa molestias inventore illo, nostrum maxime sequi, accusamus mollitia quam obcaecati reprehenderit optio!</p><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt">
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>

<section id="contacts" class="s_contacts bg_light">
	<div class="section_header">
		<h2>Контакты</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Свяжитесь со мной</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">
						<i class="icon-basic-geolocalize-05"></i>
						<h3>Адрес:</h3>
						<p>Санкт-Петербург, Луначарского 76к2</p>
					</div>
					<div class="contact_box">
						<i class="icon-basic-smartphone"></i>
						<h3>Телефон:</h3>
						<p>+7 (999) 110-02-22</p>
					</div>
					<div class="contact_box">
						<i class="icon-basic-webpage-img-txt"></i>
						<h3>Веб-сайт:</h3>
						<p><a href="http://chemaxa.ru" target="_blank">http://chemaxa.ru</a>
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="http://formspree.io/chemaxa@gmail.com" class="main_form" novalidate target="_blank" method="post">
						<label class="form-group">
							<span class="color_element">*</span> Ваше имя:
							<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваш E-mail:
							<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваше сообщение:
							<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<button>Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>