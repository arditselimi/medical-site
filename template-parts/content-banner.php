
<section class="page-banner section__padding">
      <div
        class="page-banner__name"
        style="
          background-image: url('<?php $image = get_field('page_banner_image'); echo $image['url']; ?>');
          background-size: cover;
          background-position: center;
        "
      >
        <h4 class="page-banner__name--title"><?php the_title(); ?></h4>
        <a href="#book">Appointment <i class="fa-solid fa-arrow-right"></i></a>
      </div>
</section>