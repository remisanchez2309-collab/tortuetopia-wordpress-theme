<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>

<!-- Hero Section with title -->
<section class="centre-hero-section">
  <div class="centre-hero-inner">
    <h1>Centre de Lyon</h1>
  </div>
</section>

<!-- Centre Info Section with green background and logo -->
<section class="centre-info-section">
  <div class="centre-info-inner">
    <div class="centre-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo_tortue.png' ); ?>" alt="Logo Centre Lyon">
    </div>
    
    <div class="centre-info-card">
      <p>Le centre de Lyon accueille les tortues blessées ou issues de sauvetages en milieu urbain. Notre équipe y assure les premiers soins, la réhabilitation et la préparation à l'adoption.</p>
      <p>Grâce à des partenariats locaux, nous sensibilisons aussi le public à la protection des tortues et à la préservation de leur environnement.</p>
    </div>
  </div>
</section>

<!-- Centre Image Section -->
<section class="centre-image-section">
  <div class="centre-image-inner">
    <div class="centre-image-card">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/centre-lyon.png' ); ?>" alt="Centre de lyon">
    </div>
  </div>
</section>

<!-- Centre Map Section -->
<section class="centre-map-section">
  <div class="centre-map-inner">
    <div class="centre-map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9918256891714!2d2.3522!3d48.8566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1234567890" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
  <div class="contact-inner">
    <h2>Nous contacter</h2>
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