<?php 

    get_header(); 
    
    get_template_part('template-parts/content', 'banner');

    ?>    

    <section class="about-page__info section__padding">
      <div class="about-page__info--card experience">
        <h4 class="about-page__info--card--title">Experienced Team</h4>
        <p class="about-page__info--card--para">
          We consist of dentists specialized in their respective fields. We
          utilize our expertise and experience to achieve the best
        </p>
        <a href="#">Doctors <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="about-page__info--card tech">
        <h4 class="about-page__info--card--title">Last Technology</h4>
        <p class="about-page__info--card--para">
          With cutting-edge equipment and treatment methods, we provide patients
          with the most modern and effective solutions.
        </p>
        <a href="#">Appointment <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="about-page__info--card care">
        <h4 class="about-page__info--card--title">Personalized Care</h4>
        <p class="about-page__info--card--para">
          Every patient is unique to us. We customize our treatment plans to
          suit your needs and goals.
        </p>
        <a href="#">Testimonials <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </section>

    

    <section class="about-page__marketing section__padding">
      <div class="about-page__marketing--content">
        <h2>Start your smile transformation journey with us.</h2>
        <p>
          Welcome! We are Gaga Dent, a team committed to providing high-quality
          dental care services. At Gaga Dent, we focus on transforming smiles by
          offering personalized care for each patient, delivered by expert
          dentists and experienced staff.
        </p>
        <img src="<?php echo get_theme_file_uri('assets/images/abooutImg1.webp'); ?>" />
      </div>
      <figure class="about-page__marketing--img">
        <img src="<?php echo get_theme_file_uri('assets/images/aboutImg2.webp'); ?>" />
      </figure>
    </section>

    

    <!----------------------------------------------------------------- FAQ -->

    <section class="faq section__padding">
      <h4 class="faq__title section__title">FAQ</h4>
      <div class="faq__container">
         <div class="faq__container--content">
          <h3 class="faq__container--content-title">How is a root canal treatment performed and how long will it take?</h3>
          <p class="faq__container--content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos perspiciatis eveniet totam quas ad minus omnis excepturi nam incidunt.</p>
          <button class="faq__container--content-toggle">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
         </div>

          <div class="faq__container--content">
          <h3 class="faq__container--content-title">How can i schedule an emergency appointment for a painful dental issue?</h3>
          <p class="faq__container--content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos perspiciatis eveniet totam quas ad minus omnis excepturi nam incidunt.</p>
          <button class="faq__container--content-toggle">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
         </div>

          <div class="faq__container--content">
          <h3 class="faq__container--content-title">How often should i have a dental cleaning</h3>
          <p class="faq__container--content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos perspiciatis eveniet totam quas ad minus omnis excepturi nam incidunt.</p>
          <button class="faq__container--content-toggle">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
         </div>

          <div class="faq__container--content">
          <h3 class="faq__container--content-title">What oral hygiene products should i use?</h3>
          <p class="faq__container--content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos perspiciatis eveniet totam quas ad minus omnis excepturi nam incidunt.</p>
          <button class="faq__container--content-toggle">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
         </div>
      </div>
    </section>

    

    <section class="doctors section__padding">
      <h4 class="doctors__title section__title">Meet With Dentist</h4>
      <div class="doctors__container">
        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name">Mike Bear</h6>
            <p class="doctors__container--doctor-details__role">Endotontist</p>
          </div>
          <img src="<?php echo get_theme_file_uri('./assets/images/mike-baker.webp') ?>" alt="doctor" />
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
          <img src="<?php echo get_theme_file_uri('./assets/images/esther-howard.webp');?>" alt="doctor" />
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
    

     <section class="about-testimonials section__padding">
      <h4 class="section__title">Testimonials</h4>
      <div class="about-testimonials__container">
        <div class="about-testimonials__imgs">
          <div
            class="panel active"
            id="ratingEmily"
            style="
              background-image: url(<?php echo get_theme_file_uri('/assets/images/emilyy.webp'); ?>);
              background-position: center;
            "
          ></div>

          <div
            class="panel"
            id="ratingMicha"
            style="
              background-image: url(<?php echo get_theme_file_uri('/assets/images/micha.webp'); ?>);
              background-position: center;
            "
          ></div>

          <div
            class="panel"
            id="ratingJohn"
            style="
              background-image: url(<?php echo get_theme_file_uri('/assets/images/john.webp'); ?>);
              background-position: center;
            "
          ></div>

          <div
            class="panel"
            id="ratingMike"
            style="
              background-image: url(<?php echo get_theme_file_uri('/assets/images/mike.webp'); ?>);
              background-position: center;
            "
          ></div>
          <div
            class="panel"
            id="ratingLinda"
            style="
              background-image: url(<?php echo get_theme_file_uri('/assets/images/linda.webp'); ?>);
              background-position: center;
            "
          ></div>
        </div>

        <div class="about-testimonials--content">
          <h3>
            Complex procedure went perfectly. Dr. Martinez is an expert, caring
            support staff, excellent follow-up care. Outstanding service!
          </h3>
          <p>Emily Johnson</p>
          <span>No Code Expert</span>
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

