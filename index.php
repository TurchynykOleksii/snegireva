<?php get_header(); ?>

<section class="hero" id="hero">
  <div class="wrapper">

    <div class="hero__inner">
      <div class="hero__helen">
        <div class="hero__img">
          <?php 
					$hero_helen = get_field('hero_helen');
					if( !empty( $hero_helen ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($hero_helen['url']); ?>"
            alt="<?php echo esc_attr($hero_helen['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="hero__info">
          <?php if(get_field('hero_headline')):?>
          <h1 class="hero__title"><?php the_field('hero_headline')?></h1>
          <?php endif;?>
          <p class="hero__text">
            <?php the_field('hero_subtext')?>
          </p>
          <a href="#form" class="hero__btn btn">записаться</a>
        </div>
      </div>
      <div class="hero__slogan">
        <div class="hero__slogan-img">
          <?php 
					$hero_second = get_field('hero_secong_img');
					if( !empty( $hero_second ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($hero_second['url']); ?>"
            alt="<?php echo esc_attr($hero_second['alt']); ?>" />
          <?php endif; ?>
        </div>
        <p class="hero__slogan-text">
          <?php the_field('hero_slogan')?>
        </p>
      </div>

    </div>
  </div>
</section>
<section class="familiarity">
  <div class="wrapper">
    <div class="familiarity__inner">
      <?php if(get_field('familiarity_title')):?>
      <h2 class="familiarity__title"><?php the_field('familiarity_title')?></h2>
      <?php endif;?>
      <div class="familiarity__right">
        <div class="familiarity__right_info">
          <p class="familiarity__right-text">
            <?php the_field('familiarity_right_pc')?>
          </p>
          <p class="familiarity__right-text familiarity__mob">
            <?php the_field('familiarity_right_mob')?>
          </p>
        </div>

        <div class="familiarity__img-right">
          <?php 
					$familiarity_one = get_field('familiarity_right_img');
					if( !empty( $familiarity_one ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($familiarity_one['url']); ?>"
            alt="<?php echo esc_attr($familiarity_one['alt']); ?>" />
          <?php endif; ?>
        </div>
        <p class="familiarity__right-mob">
          <?php the_field('familiarity_right_mob')?>
        </p>
      </div>
      <div class="familiarity__left">
        <div class="familiarity__img-left">
          <?php 
					$familiarity_second = get_field('familiarity_left_img');
					if( !empty( $familiarity_second ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($familiarity_second['url']); ?>"
            alt="<?php echo esc_attr($familiarity_second['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="familiarity__left-text">
          <p>
            <?php the_field('familiarity_left_text')?>
          </p>
          <p>
            <?php the_field('familiarity_left_text_second')?>
          </p>
        </div>

      </div>
      <a href="#form" class="familiarity__btn btn">Записаться</a>
    </div>
  </div>
</section>
<section class="price" id="price">
  <div class="wrapper">
    <div class="price__inner">
      <?php if(get_field('price_title')) :?>
      <h3 class="price__title"><?php the_field('price_title')?></h3>
      <?php endif;?>
      <?php if( have_rows('price_list') ): ?>
      <ul class="price__list">
        <?php while( have_rows('price_list') ): the_row(); 
        $price_headline = get_sub_field('price_item_headline');
        $price_text = get_sub_field('price_item_text');
        $price_cost = get_sub_field('price_item_cost');
        $price_img = get_sub_field('price_item_img');
        ?>
        <li class="price__item">
          <div class="price__headline">
            <p><?php echo $price_headline; ?></p>
            <div class="price__item-icon">
              <img loading="lazy" src="<?=get_template_directory_uri(); ?>/assets/img/icons/arrow-up.svg"
                class="price__arrow-icon" height="40" width="40" alt="arrow up">
            </div>
          </div>
          <div class="price__text price__hidden">
            <p>
              <?php echo $price_text; ?>
            </p>
            <span class="price__cost"><?php echo $price_cost; ?></span>
            <?php if(!empty($price_img)):?>
            <div class="price__list-img">
              <img loading="lazy" src="<?php echo $price_img['url']; ?>" alt="<?php echo $price_img['alt']; ?>">
            </div>
            <?php endif;?>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="feetback" id="feetback">
  <div class="wrapper">
    <div class="feetback__inner">
      <?php if(get_field('feetback_title')):?>
      <h4 class="feetback__title"><?php the_field('feetback_title')?></h4>
      <?php endif;?>
      <div class="swiper feetback__slider">
        <?php if( have_rows('feetback_list') ): ?>
        <div class="slider__slider swiper-wrapper">
          <?php while( have_rows('feetback_list') ): the_row(); 
        $feetback_img = get_sub_field('feetback_img');
        $feetback_img_second = get_sub_field('feetback_img_second');
				$res_class = $feetback_img_second ? 'feetback__last' :''
				?>
          <div class="slider__feetback swiper-slide">
            <img loading="lazy" src="<?php echo esc_url($feetback_img['url']); ?>"
              alt="<?php echo esc_attr($feetback_img['alt']); ?>" />
            <?php if($feetback_img_second):?>
            <img loading="lazy" src="<?php echo esc_url($feetback_img_second['url']); ?>"
              alt="<?php echo esc_attr($feetback_img_second['alt']); ?>" />
            <?php endif;?>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="swiper-pagination"></div>
      </div>
      <?php if( have_rows('feetback_list') ): ?>
      <ul class="feetback__list">
        <?php while( have_rows('feetback_list') ): the_row(); 
        $feetback_img = get_sub_field('feetback_img');
        $feetback_img_second = get_sub_field('feetback_img_second');
				$res_class = $feetback_img_second ? 'feetback__last' :''
				?>
        <li class="feetback__item <?php echo $res_class?>">
          <img loading="lazy" src="<?php echo esc_url($feetback_img['url']); ?>"
            alt="<?php echo esc_attr($feetback_img['alt']); ?>" />
          <?php if($feetback_img_second):?>
          <img loading="lazy" src="<?php echo esc_url($feetback_img_second['url']); ?>"
            alt="<?php echo esc_attr($feetback_img_second['alt']); ?>" />
          <?php endif;?>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="certifications" id="certifications">
  <div class="wrapper">
    <div class="certifications__inner">
      <?php if(get_field('certifications_title')) :?>
      <h5 class="certifications__title"><?php the_field('certifications_title')?></h5>
      <?php endif;?>
      <div class="swiper certifications__slider">
        <?php if( have_rows('certifications_list') ): ?>
        <div class="slider__slider swiper-wrapper">
          <?php while( have_rows('certifications_list') ): the_row(); 
					$certifications_img = get_sub_field('certifications_img');?>

          <div class="slider__certifications swiper-slide">
            <?php if( !empty( $certifications_img ) ): ?>
            <img loading="lazy" src="<?php echo esc_url($certifications_img['url']); ?>"
              alt="<?php echo esc_attr($certifications_img['alt']); ?>" />
            <?php endif; ?>

          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<section class="form" id="form">
  <div class="form__inner">
    <div class="wrapper">
      <?php if(get_field('form_title')):?>
      <h6 class="form__title"><?php the_field('form_title')?></h6>
      <?php endif;?>
    </div>
    <div class="form__text-form">
      <div class="wrapper">
        <div class="form__bg">
          <?php 
						$form_img = get_field('form_img');
						if( !empty( $form_img ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($form_img['url']); ?>"
            alt="<?php echo esc_attr($form_img['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="form__text-frm">
          <div class="form__text-wrapper">
            <p class="form__text">
              <?php the_field('form_text')?>
            </p>
          </div>
          <div class="form__form-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="9c3cec6" html_class="form__request" title="Свяжитесь со мной"]')?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<section class="instagram">
  <div class="wrapper">
    <div class="instagram__inner">
      <?php if(get_field('instagram_title')) :?>
      <h6 class="instagram__title"><?php the_field('instagram_title')?></h6>
      <?php endif; ?>
      <div class="instagram__wrapper">
        <div class="instagram__qr">
          <?php 
						$inst_img = get_field('instagram_qr');
						if( !empty( $inst_img ) ): ?>
          <img loading="lazy" src="<?php echo esc_url($inst_img['url']); ?>"
            alt="<?php echo esc_attr($inst_img['alt']); ?>" />
          <?php endif; ?>
          <p class="instagram__text">
            <?php the_field('instagram_text')?>
          </p>
        </div>
        <?php if( have_rows('instagram_list') ): ?>
        <ul class="instagram__list">
          <?php while( have_rows('instagram_list') ): the_row(); 
        $inst_image = get_sub_field('instagram_image');
        ?>
          <li class="instagram__item">
            <img loading="lazy" src="<?php echo esc_url($inst_image['url']); ?>"
              alt="<?php echo esc_attr($inst_image['alt']); ?>" />
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>