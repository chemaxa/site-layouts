<?php get_header();?>


<section id="about" class="s_about bg_light">
	<div class="section_header">
		<h2><?php $idObj = get_category_by_slug('about'); $id = $idObj->term_id;echo get_cat_name($id) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php $idObj=get_category_by_slug( 'about'); $id=$idObj->term_id; echo category_description($id); ?> </div>
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
						<a href="<?php echo $large_url[0]?>" class="popup">
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
		<h2><?php $idObj = get_category_by_slug('resume'); $id = $idObj->term_id; echo get_cat_name($id) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php $idObj=get_category_by_slug( 'resume'); $id=$idObj->term_id; echo category_description($id); ?> </div>

		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 left">
					<h3><?php $idObj = get_category_by_slug('resume'); $id = $idObj->term_id;  echo get_cat_name($id) ?></h3>

					<div class="resume_icon"><i class="icon-basic-case"></i>
					</div>

					<?php $idObj=get_category_by_slug( 'resume'); $id=$idObj->term_id; if ( have_posts() ) : query_posts( 'cat='.$id); while (have_posts()) : the_post(); ?>

					<div class="resume_item">
						<div class="year">
							<?php echo get_post_meta($post->ID, 'year', true); ?></div>
						<div class="resume_description">
							<?php echo get_post_meta($post->ID, 'work_place', true); ?> <strong><?php the_title(); ?></strong>
						</div>
						<?php echo the_content(); ?>
					</div>
					<? endwhile; endif; wp_reset_query(); ?>


				</div>

				<div class="col-md-6 col-sm-6 right">
					<h3><?php $idObj = get_category_by_slug('resume'); $id = $idObj->term_id; echo get_cat_name($id) ?></h3>
					<div class="resume_icon"><i class="icon-basic-book-pen"></i>
					</div>

					<?php if ( have_posts() ) : query_posts( 'cat='.$id); while (have_posts()) : the_post(); ?>
					<div class="resume_item">
						<div class="year">
							<?php echo get_post_meta($post->ID, 'year', true); ?></div>
						<div class="resume_description">
							<?php echo get_post_meta($post->ID, 'work_place', true); ?> <strong><?php the_title(); ?></strong>
						</div>
						<?php echo the_content(); ?>
					</div>
					<? endwhile; endif; wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="s_portfolio bg_dark">
	<div class="section_header">
		<h2><?php $idObj = get_category_by_slug('portfolio'); $id = $idObj->term_id;  echo get_cat_name($id) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php $idObj=get_category_by_slug( 'portfolio'); $id=$idObj->term_id; echo category_description($id); ?>

			</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">


				<ul>
					<li class="filter active" data-filter="all">Все работы</li>
					<li class="filter" data-filter=".sites">Сайты</li>
					<li class="filter" data-filter=".identy">Айдентика</li>
					<li class="filter" data-filter=".logos">Логотипы</li>
				</ul>

				<div class="portfolio_table">

					<?php $idObj=get_category_by_slug( 'portfolio'); $id=$idObj->term_id; if ( have_posts() ) : query_posts( 'cat='.$id); while (have_posts()) : the_post(); $tags=wp_get_post_tags($post->ID); if ($tags) { foreach($tags as $tag) { ?>


					<div class="mix col-md-3 col-sm-6 col-xs-12 <?php echo ' '.$tag->name;	}}?>">
						<?php the_post_thumbnail(array(800, 600)); ?>
						<div class="item_cont">
							<h3><?php the_title(); ?></h3>
							<p>
								<?php $content=get_extended($post->post_content); echo $content['main'];?></p>


							<a href="#" class="popup_item">Посмотреть</a>
						</div>
						<div class="hidden">
							<div class="item_descr" id="work_1">
								<h3><?php the_title(); ?></h3>
								<p>
									<?php echo $content[ 'main'].$content[ 'extended']; ?>
								</p>
								<?php $large_url=wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );?>
								<img src="<?php echo $large_url[0]?>" alt="<?php the_title(); ?>">
							</div>
						</div>
					</div>

					<? endwhile; endif; wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</div>
</section>

<section id="contacts" class="s_contacts bg_light">
	<div class="section_header">
		<h2><?php  $idObj=get_category_by_slug( 'contacts'); $id=$idObj->term_id; echo get_cat_name($id) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php $idObj=get_category_by_slug( 'contacts'); $id=$idObj->term_id; echo category_description($id) ?>
			</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">
						<i class="icon-basic-geolocalize-05"></i>
						<h3>Адрес:</h3>
						<p>
							<?php $options=get_option( 'sample_theme_options'); echo $options[ 'adress']; ?>
						</p>
					</div>
					<div class="contact_box">
						<i class="icon-basic-smartphone"></i>
						<h3>Телефон:</h3>
						<p>
							<?php $options=get_option( 'sample_theme_options'); echo $options[ 'phone']; ?>
						</p>
					</div>
					<div class="contact_box">
						<i class="icon-basic-webpage-img-txt"></i>
						<h3>Веб-сайт:</h3>
						<p>
							<a href="<?php
						$options = get_option('sample_theme_options');
						echo $options['site']; ?>" target="_blank">
								<?php $options=get_option( 'sample_theme_options'); echo $options[ 'site']; ?>
							</a>
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