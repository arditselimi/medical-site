<?php get_header(); 

  get_template_part('template-parts/content', 'banner');

?>

    
    <section class="about-page__marketing section__padding">
      <div class="about-page__marketing--content">
        <h2>Cutting-Edge Care, Beautiful Smiles, Lasting Confidence!</h2>
        <p>
          "By providing the latest technology and personalized care, we bring
          together healthy and beautiful smiles with lasting confidence. We
          offer you uninterrupted confidence and satisfaction."
        </p>
        <img src="<?php echo get_theme_file_uri('assets/images/book1.webp'); ?>" />
      </div>
      <figure class="about-page__marketing--img">
        <img src="<?php echo get_theme_file_uri('assets/images/book2.webp'); ?>" />
      </figure>
    </section>

       

    <section class="doctors section__padding">
      <h4 class="doctors__title section__title">Meet With Dentist</h4>
      <div class="doctors__container">
        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name">Mike Bear</h6>
            <p class="doctors__container--doctor-details__role">Endotontist</p>
          </div>
          <img src="<?php echo get_theme_file_uri('./assets/images/mike-baker.webp'); ?>" alt="doctor" />
        </div>

        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name">
              Esther Howard
            </h6>
            <p class="doctors__container--doctor-details__role">
              Prosthodontist
            </p>
          </div>
          <img src="<?php echo get_theme_file_uri('./assets/images/esther-howard.webp'); ?>" alt="doctor" />
        </div>

        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name">
              Krstin Watson
            </h6>
            <p class="doctors__container--doctor-details__role">Ortodontsit</p>
          </div>
          <img src="<?php echo get_theme_file_uri('./assets/images/kristin-whatson.webp'); ?>" alt="doctor" />
        </div>

        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name">Sena Sahin</h6>
            <p class="doctors__container--doctor-details__role">Pedodontist</p>
          </div>
          <img src="<?php echo get_theme_file_uri('./assets/images/sana-sahin.webp'); ?>" alt="doctor" />
        </div>
      </div>
      <h2 class="doctors__para">
        Where Cutting-Edge Dental Expertise Meets Personalized Care: Your
        Destination for Holistic Dental Health, Beautiful Smiles and Lasting
        Confidence.
      </h2>
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