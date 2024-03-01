<?php get_header(); 

  get_template_part('template-parts/content', 'banner');

?>



    

    <section class="services section__padding">
      <div class="services__container">
        <div class="services__container--service__dental">
          <div class="services__container--service__dental-info">
            <h4>Basic Dental Care</h4>
            <p>Discover How We Illuminate and Elevate Your Smiles</p>
          </div>
          <figure class="services__container--service__dental-img">
            <img src="<?php echo get_theme_file_uri('assets/images/basic-dental-care.webp'); ?>" />
          </figure>
        </div>

        <div class="services__container--service__endotonti">
          <img src="<?php echo get_theme_file_uri('assets/images/endotonti.webp'); ?>" />
          <h4>Endodonti</h4>
        </div>

        <div class="services__container--service__dental-implant">
          <img src="<?php echo get_theme_file_uri('assets/images/dental implant.webp'); ?>" />
          <h4>Dental Implant</h4>
        </div>

        <div class="services__container--service__gaga-dent" style="background: url('<?php echo get_theme_file_uri('assets/images/gaga-dent.webp'); ?>'); background-size: cover; background-repeat: no-repeat;background-position: center;">
          <h2>Gaga Dent</h2>

          <div class="services__container--service__gaga-dent__content">
            <p>Discover How We Illuminate and Elevate Your Smiles.</p>
            <img src="<?php echo get_theme_file_uri('assets/images/gagaDentImg2.webp'); ?>" />
          </div>
        </div>

        <div class="services__container--service__pedodonti">
          <div class="services__container--service__pedodonti-content">
            <h4>Pedodonti</h4>
            <p>Discover How We Illuminate and Elevate Your Smiles</p>
          </div>
          <figure>
            <img src="<?php echo get_theme_file_uri('assets/images/pedodonti.webp'); ?>" alt="kid with brush" />
          </figure>
        </div>

        <div class="services__container--service__prosthodonti">
          <img src="<?php echo get_theme_file_uri('assets/images/prosthodontiService.webp'); ?>" alt="tooth" />
          <h4>Prosthodonti</h4>
        </div>

        <div class="services__container--service__aesthetic-care">
          <div class="services__container--service__aesthetic-care--content">
            <h4>Aesthetic Care</h4>
            <p>Discover How We Illuminate and Elevate Your Smiles.</p>
          </div>
          <figure>
            <img src="<?php echo get_theme_file_uri('assets/images/aesthetic-care.webp'); ?>" alt="aesthetic care" />
          </figure>
        </div>
      </div>
    </section>

    

      <section class="appointment section__padding">
      <div class="appointment__contact" id="book">
        <h4 class="appointment__contact--title section__title">
          Book An Appointment
        </h4>
        <p class="appointment__contact--para">
          Discover How We Illuminate and Elevate Your Smiles.
        </p>
        
          <?php echo do_shortcode('[contact-form-7 id="a5a86aa" title="Contact us"]'); ?>
      </div>

      <figure class="appointment__img">
        <img src="<?php echo get_theme_file_uri('/assets/images/appointment.webp'); ?>" alt="dental" />
      </figure>
    </section>

    

    <section class="location section__padding">
      <h2 class="location__title">Based In London</h2>
      <h2 class="location__para">
        Flat E, 361 High Road, London, England, N22 8JA
      </h2>
    </section>

    <?php get_footer(); ?>