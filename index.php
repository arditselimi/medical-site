<?php 

    get_header(); ?>

     <section class="hero section__padding">
      <div class="hero__title">
        <h2>A dream smile is a reality.</h2>
      </div>
      <div class="hero__content">
        <div class="hero__content--video">
          <video src="<?php echo get_theme_file_uri('assets/videos/smile.mp4') ?>" autoplay></video>
        </div>
        <div class="hero__content-details">
          <div class="hero__content-details--arrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
          <h4 class="hero__content-details--para">
            Choose Our Dental Clinic as Your Go-To Destination for Trusted and
            Compassionate Dental Health Solutions. Your Smile Is More Than Just
            Teeth to Us—It's
          </h4>

          <div class="hero__content-details--btns">
            <a href="<?php echo site_url('booking'); ?>"><i class="fa-regular fa-snowflake"></i> Book now</a>
            <a href="#team"><i class="fa-regular fa-snowflake"></i> Our Team</a>
          </div>

          <div class="hero__content-details--services">
            <div class="hero__content-details--service">
              <div>
                <i class="fa-regular fa-snowflake"></i>
                <h6>Dental Implant</h6>
              </div>
            </div>

            <div class="hero__content-details--service">
              <div>
                <i class="fa-regular fa-snowflake"></i>
                <h6>Aesthetic Care</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero__para">
        <p>
          Choose Our Dental Clinic as Your Go-To Destination for Trusted and
          Compassionate Dental Health Solutions. Your Smile Is More Than Just
          Teeth to Us
        </p>
      </div>
    </section>

    <!----------------------------------------------------------------- Services -->

    <section class="hero-services section__padding">
      <h4 class="hero-services__title section__title">Services</h4>
      <div class="hero-services__container">
        <div class="hero-services__container--info">
          <div class="hero-services__container--info-details">
            <span>01</span>
            <div>
              <h3>Dental Implant Care</h3>
              <small
                >Choose our Dental Clinic as Your Go-To Destination for</small
              >
            </div>
          </div>

          <div class="hero-services__container--info-btns">
            <a href="#" class="active" id="dental">Dental Implant Care</a>
            <a href="#" id="aesthetic">Aesthetic Care</a>
            <a href="#" id="endodonti">Endodonti</a>
            <a href="#" id="prosthodonti">Prosthodonti</a>
          </div>
        </div>
        <figure class="hero-services__container--img">
          <img src="<?php echo get_theme_file_uri('./assets/images/prosthodonti.webp'); ?>" alt="" />
        </figure>
      </div>
    </section>

    <!----------------------------------------------------------------- Doctors -->

    <section class="doctors section__padding" id="team">
      <h4 class="doctors__title section__title">Meet With Dentist</h4>
      <div class="doctors__container">
        <?php 
        
        $ourTeamOfDoctors = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'doctors',
        ));

        while ($ourTeamOfDoctors -> have_posts()) {
          $ourTeamOfDoctors -> the_post(); ?>

      
        <div class="doctors__container--doctor">
          <div class="doctors__container--doctor-details">
            <h6 class="doctors__container--doctor-details__name"><?php the_title(); ?></h6>
            <p class="doctors__container--doctor-details__role"><?php $role = get_field('doctors_role'); echo $role; ?> </p>
          </div>
          <img src="<?php $image = get_field('page_banner_image'); echo $image['url'];  ?>" alt="doctor" />
        </div>

        <?php }
        
        ?>
      
      </div>
      <h2 class="doctors__para">
        Where Cutting-Edge Dental Expertise Meets Personalized Care: Your
        Destination for Holistic Dental Health, Beautiful Smiles and Lasting
        Confidence.
      </h2>
    </section>

    <!----------------------------------------------------------------- Testimonials -->

    <section class="testimonials section__padding">
      <h4 class="testimonials__title section__title">Testimonials</h4>
      <div class="testimonials__container">
        <ul class="testimonials__container--stars">
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
        </ul>

        <div class="testimonials__container--content">
          <div class="testimonials__container--content-info">
            <h2 class="testimonials__container--content-info__title">Extremely pleased with the treatments received here. The team communicated clearly and effectively at every step.</h2>
            <h6 class="testimonials__container--content-info__name">Thomas Jenkins</h6>
            <p class="testimonials__container--content-info__role">Engineer</p>
          </div>

          <div class="testimonials__container--content--profiles">
            <div class="testimonials__container--content--profiles-profile active">
              <img src="<?php echo get_theme_file_uri('./assets/images/thomas.webp'); ?>" alt="" id="thomas">
            </div>
            <div class="testimonials__container--content--profiles-profile" >
                <img src="<?php echo get_theme_file_uri('./assets/images/emily.webp'); ?>" alt="" id="emily">
            </div>
            <div class="testimonials__container--content--profiles-profile">
                <img src="<?php echo get_theme_file_uri('./assets/images/sarah.webp'); ?>" alt="" id="sarah">
              
            </div>
            <div class="testimonials__container--content--profiles-profile">
                <img src="<?php echo get_theme_file_uri('./assets/images/john.webp'); ?>" alt="" id="john">
            </div>
          </div>
        </div>

       
        </div>
      </div>
    </section>

    <!----------------------------------------------------------------- Book An Appointment -->

    <section class="appointment section__padding">
      <div class="appointment__contact">
        <h4 class="appointment__contact--title section__title">
          Book An Appointment
        </h4>
        <p class="appointment__contact--para">
          Discover How We Illuminate and Elevate Your Smiles.
        </p>
        <!-- <form>
          <input type="text" placeholder="Name" />
          <input type="text" placeholder="Email" />
          <textarea type="text" placeholder="Message"></textarea>
          <a class="appointment__contact--btn" href="#">Appointment</a>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="a5a86aa" title="Contact us"]'); ?>
      </div>

      <figure class="appointment__img">
        <img src="<?php echo get_theme_file_uri('/assets/images/appointment.webp'); ?>" alt="dental" />
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

    <!----------------------------------------------------------------- Location -->

    <section class="location section__padding">
      <h2 class="location__title">Based In London</h2>
      <h2 class="location__para">
        Flat E, 361 High Road, London, England, N22 8JA
      </h2>
    </section>

    <?php get_footer();