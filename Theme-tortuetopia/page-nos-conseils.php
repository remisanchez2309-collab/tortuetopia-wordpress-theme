<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<!-- Hero Section with background image -->
<section class="conseils-page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/tortue-conseils.png' ); ?>');">
  <div class="conseils-hero-overlay"></div>
  <div class="conseils-hero-content">
    <h1>Découvrez nos conseils</h1>
  </div>
</section>

<!-- Conseils Cards Section -->
<section class="conseils-cards-section">
  <div class="conseils-cards-inner">
    <div class="conseils-cards-grid">
      <!-- Card 1: Alimentation -->
      <div class="conseil-card">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('conseils-alimentation'))); ?>" class="conseil-btn">Conseils Alimentation</a>
        <p>Découvrez les aliments essentiels pour une tortue en bonne santé.</p>
      </div>

      <!-- Card 2: Habitat -->
      <div class="conseil-card">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('conseils-habitat'))); ?>" class="conseil-btn">Conseils Habitat</a>
        <p>Apprenez à créer un environnement sur et adapté à votre tortue.</p>
      </div>
    </div>

    <!-- Card 3: Entretien (centered on its own row) -->
    <div class="conseil-card conseil-card-full">
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('conseils-entretien'))); ?>" class="conseil-btn">Conseils Entretien</a>
      <p>Suivez nos recommandations pour garder votre tortue en pleine forme toute l'année.</p>
    </div>
  </div>
</section>

<!-- Info Section with dark background + frosted glass -->
<section class="conseils-info-section">
  <div class="conseils-info-inner">
    <div class="conseils-info-card">
      <p>Chaque centre Tortuetopia adopte ses conseils en fonction du climat et des espèces présentes dans sa région.<br><br>
      Que vous soyez proche de Paris, Lyon ou Toulouse, nos équipes vous accompagnent pour offrir à votre tortue une alimentation équilibrée, un habitat adapté et un entretien régulier.<br><br>
      Ces recommandations aident à garantir leur bien-être tout au long de l'année.</p>
    </div>
  </div>
</section>

<?php get_footer(); // Load footer.php logic in our file ?>