<div id="slider-container">
<div class="left">
  <div class="text-box">
    <div class="slider slider-nav">
      <?php while ( have_rows('icon_repeater') ) : the_row(); ?>
      <div class="icon-container">
        <img src="<?php the_sub_field('icon'); ?>">
        <h4><?php the_sub_field('title'); ?></h4>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="slider slider-single" style="margin-top: 30px;">
      <?php while ( have_rows('icon_repeater') ) : the_row(); ?>
      <div class="slide-content">
        <h3 style="color: #00a8e4; margin-bottom: 15px;"><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('description'); ?></p>
      </div>
      <?php endwhile; ?>
  </div>
</div>
</div>
<div class="right">
  <img class="slider-graphic" style="pointer-events: none;" src="<?php the_sub_field('graphic'); ?>">
</div>
</div>
