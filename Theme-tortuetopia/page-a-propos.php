<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<!-- Hero section with background image and text overlay -->
<section class="apropos-hero" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('<?php echo esc_url( get_template_directory_uri(). '/assets/img/tortue-à-propos.png' ); ?>');">
  <div class="apropos-hero-overlay"></div>
  <div class="apropos-hero-content">
    <h1>Tortuetopia</h1>
    <div class="apropos-card">
    <p>Tortuetopia est une association dédiée à la protection, au sauvetage et à l'adoption responsable des tortues. Notre mission : offrir une seconde chance que tortues abandonnées qu en difficultés, tout en sensibilisant le public à leur bien-être et à la préservation de l'habitat naturel.</p>
    </div>
  </div>
</section>

<!-- Team section -->
<section class="team-section">
  <div class="team-inner">
    <h2>Découvrez Notre Équipe</h2>
    
    <div class="team-grid">
      <!-- Team member 1 -->
      <div class="team-card">
        <div class="team-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Esteban.png' ); ?>" alt="Esteban B.">
        </div>
        <h3>Esteban B.</h3>
        <p class="team-role">Fondateur et coordinateur</p>
        <p class="team-bio">Passionné par les tortues depuis l'enfance, Esteban a fondé Tortuetopia pour intervenir auprès des animaux en détresse et faciliter leur adoption.</p>
      </div>

      <!-- Team member 2 -->
      <div class="team-card">
        <div class="team-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Quentin.png' ); ?>" alt="Quentin C.">
        </div>
        <h3>Quentin C.</h3>
        <p class="team-role">Responsable bien-être animal</p>
        <p class="team-bio">Passionné par la biologie, Quentin s'occupe du bien-être et de la santé de tous nos pensionnaires au quotidien.</p>
      </div>

      <!-- Team member 3 -->
      <div class="team-card">
        <div class="team-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Antony.png' ); ?>" alt="Antony J.">
        </div>
        <h3>Antony J.</h3>
        <p class="team-role">Chargé de la communication et adoptions</p>
        <p class="team-bio">Engagé pour le cause animalière, Antony communique sur nos actions et coordonne les adoptions responsables.</p>
      </div>
    </div>
  </div>
</section>
<section class="centers-section">
      <div class="centers-inner">
         <h2>Découvrez nos différents centres</h2>
         <a class="centers-btn" href="<?php echo esc_url( home_url( '/centres' ) ); ?>">Nos Centres</a>

         <div class="centers-map-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/carte-france.png' ); ?>" alt="Carte de France - centres" class="centers-map">
         </div>
      </div>
   </section>
    <section class="conseils-section" style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/image-conseils.png' ); ?>');">
      <div class="conseils-overlay"></div>

      <div class="conseils-inner">
         <div class="conseils-content">
            <a class="conseils-btn" href="<?php echo esc_url( home_url( '/conseils' ) ); ?>">Nos Conseils</a>
            <p>Besoin d’aide pour votre tortue ?<br>Découvrez les conseils de nos équipes.</p>
         </div>
      </div>
   </section>
   <section class="contact-section">
   <div class="contact-inner">
      <h2>Contactez-nous</h2>
      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="contact-form">
         <input type="hidden" name="action" value="send_contact_form">
         <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
         </div>
         <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
         </div>
         <button type="submit" class="contact-btn">Envoyer</button>
      </form>
   </div>
</section>

<?php get_footer(); // Load footer.php logic in our file ?>