<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>
   <section class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo esc_url( get_template_directory_uri(). '/assets/img/Accueil-Tortue.png' ); ?>');">
      <div class="hero-overlay"></div>
       <div class="site-title">
        <h1>TORTUETOPIA</h1>
      </div>
      <div class="hero-content">
         <div class="hero-inner">
         <h2>Notre Association</h2>
         <div class="zone-boutons">
            <a class="hero-btn" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Adoptez Maintenant</a>
            <a class="hero-btn-secondary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Nous découvrir</a>
         </div>
      </div>
      <div class="intro-text">
        <p>Vous cherchez des informations sur votre tortue, Vous souhaitez adopter ou simplement vous renseigner ? 
        Vous êtes au bon endroit.</p>
      </div>
      </div>
   </section>
   <section class="infos-section">
      <div class="infos-wrapper">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Tortue-Info.png' ); ?>" alt="Tortue mascotte" class="infos-image">
         
         <div class="infos-card">
            <p>Adopter une tortue, c'est un engagement pour de nombreuses années !<br><br>
            Avant d'adopter, renseigne-toi sur ses besoins : un habitat adapté, une alimentation variée et un suivi vétérinaire spécialisé.</p>
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