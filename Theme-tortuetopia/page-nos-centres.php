<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<section class="centers-page-section">
  <div class="centers-page-inner">
    <h1>Découvrez nos centres</h1>

    <div class="centers-grid">
      <!-- Centre Paris -->
      <div class="center-card">
        <div class="center-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/centre-paris.png' ); ?>" alt="Centre Paris">
        </div>
        <h2>Centre Paris</h2>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('centre-paris'))); ?>" class="center-btn">Découvrir</a>
      </div>

      <!-- Centre Lyon -->
      <div class="center-card">
        <div class="center-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/centre-lyon.png' ); ?>" alt="Centre Lyon">
        </div>
        <h2>Centre Lyon</h2>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('centre-lyon'))); ?>" class="center-btn">Découvrir</a>
      </div>

      <!-- Centre Toulouse -->
      <div class="center-card">
        <div class="center-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/centre-toulouse.png' ); ?>" alt="Centre Toulouse">
        </div>
        <h2>Centre Toulouse</h2>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('centre-toulouse'))); ?>" class="center-btn">Découvrir</a>
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
         <h3>Où que vous soyez, un centre Tortuetopia est là pour vous accompagner ! Chaque région propose ses propres conseils adaptés à son climat et à l'environnement local, afin de garantir le bien-être de votre tortue tout au long de l'année. Choisissez le centre le plus proche pour découvrir nos recommandations personnalisées.</h3>
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