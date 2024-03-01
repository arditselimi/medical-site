<?php get_header(); 

  get_template_part('template-parts/content', 'banner');

?>


    
    

    <section class="doctors-info section__padding">
      <div class="doctors-info__all">
        <div class="doctors-info__all--doctor">
          <div class="doctors-info__all--doctor__info">
            <span class="doctors-info__all--doctor--info__role"
              >Endotontist</span
            >
            <h2 class="doctors-info__all--doctor--info__name">Mike Baker</h2>
            <p class="doctors-info__all--doctor--info__para">
              Dr. Mike Baker is an accomplished endodontist specializing in
              dental pulp and root canal treatments. He completed his dentistry
              degree at X University and pursued specialized training in
              endodontics at X Institution. Dr. Baker is recognized for his
              dedication to preserving natural teeth and providing relief from
              dental discomfort. Utilizing advanced techniques and modern
              technology, he delivers precise and effective root canal therapies
              to his patients
            </p>
            <a href="#">Appointment <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <figure class="doctors-info__all--doctor-img">
            <img src="<?php echo get_theme_file_uri('./assets/images/mike-baker.webp'); ?>" alt="doctor" />
          </figure>
        </div>

        <div class="doctors-info__all--doctor">
          <figure class="doctors-info__all--doctor-img">
            <img src="<?php echo get_theme_file_uri('./assets/images/esther-howard.webp'); ?>" alt="doctor" />
          </figure>
          <div class="doctors-info__all--doctor__info">
            <span class="doctors-info__all--doctor--info__role"
              >Prosthodontist</span
            >
            <h2 class="doctors-info__all--doctor--info__name">Esther Howard</h2>
            <p class="doctors-info__all--doctor--info__para">
              Dr. Esther Howard is an endodontist specialized in dental pulp and
              root canal treatments. After completing her dental education at
              [University Name], she received specialized training in
              endodontics at [Institution Name]. Known for her passion for
              preserving natural teeth and relieving patients from dental pain,
              Dr. Howard utilizes advanced techniques and modern technology to
              provide precise and effective root canal treatments.
            </p>
            <a href="#">Appointment <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="doctors-info__all--doctor">
          <div class="doctors-info__all--doctor__info">
            <span class="doctors-info__all--doctor--info__role"
              >Ortodontist</span
            >
            <h2 class="doctors-info__all--doctor--info__name">
              Kristin Watson
            </h2>
            <p class="doctors-info__all--doctor--info__para">
              Dr. Kristin Watson is a dedicated orthodontist committed to
              enhancing smiles and dental health. She completed her dentistry
              degree at X University before specializing in orthodontics at X
              Institution . Dr. Watson is passionate about creating beautiful
              smiles and correcting dental misalignments in her patients. With a
              focus on personalized care and the latest orthodontic techniques,
              she strives to provide a comfortable and effective treatment
              experience. Dr. Kristin Watson's expertise and compassionate
              approach contribute to her patients' improved dental health and
              confident smiles.
            </p>
            <a href="#">Appointment <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <figure class="doctors-info__all--doctor-img">
            <img src="<?php echo get_theme_file_uri('./assets/images/kristin-whatson.webp'); ?>" alt="doctor" />
          </figure>
        </div>

        <div class="doctors-info__all--doctor">
          <figure class="doctors-info__all--doctor-img">
            <img src="<?php echo get_theme_file_uri('./assets/images/sana-sahin.webp'); ?>" alt="doctor" />
          </figure>
          <div class="doctors-info__all--doctor__info">
            <span class="doctors-info__all--doctor--info__role"
              >Pedodontist</span
            >
            <h2 class="doctors-info__all--doctor--info__name">Sena Sahin</h2>
            <p class="doctors-info__all--doctor--info__para">
              Dr. Sena Şahin is a passionate pedodontist dedicated to the oral
              health of children. After completing a degree in dentistry from X
              University, Dr. Şahin specialized in pedodontics at X Institution.
              She firmly believes in the significance of early dental care and
              meticulously strives to ensure comfortable and positive
              experiences for young patients. With expertise in pediatric
              treatments, an educational approach, and community engagement, Dr.
              Sena Şahin contributes to fostering healthy smiles for children.
            </p>
            <a href="#">Appointment <i class="fa-solid fa-arrow-right"></i></a>
          </div>
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
