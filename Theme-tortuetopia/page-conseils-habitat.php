<?php
/**
 * Conseils Alimentation page template
 */
get_header();
?>

<!-- Hero Section with background image -->
<section class="conseil-hero-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/habitat-conseils.png' ); ?>');">
  <div class="conseil-hero-overlay"></div>
  <div class="conseil-hero-inner">
    <h1>Un habitat sain, c'est une tortue épanouie.</h1>
  </div>
</section>

<!-- Conseil Content Section -->
<section class="conseil-content-section">
  <div class="conseil-content-inner">
    <div class="conseil-intro">
      <p>L'habitat est l'un des éléments les plus importants pour le bien-être de votre tortue. Qu'elle vive en intérieur ou en extérieur, son espace doit être adapté à ses besoins naturels, à sa taille et à son espèce. Découvrez ici nos conseils pour lui offrir un environnement sûr, équilibré et agréable à vivre.</p>
    </div>

    <!-- Numbered Tips -->
    <div class="conseil-tips">
      <!-- Tip 1 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">1</div>
        <div class="conseil-tip-content">
          <h3>Un espace suffisant</h3>
          <p>Les tortues ont besoin de place pour se déplacer librement. Prévoyez un espace au sol large et dégagé, avec des zones d'ombre et de lumière. Évitez les aquariums trop petits ou fermés : elles doivent respirer et explorer.</p>
        </div>
      </div>

      <!-- Tip 2 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">2</div>
        <div class="conseil-tip-content">
          <h3>Lumiere et chaleur</h3>
          <p>La lumière naturelle est idéale, mais une lampe UVB est essentielle pour les tortues vivant à l'intérieur. Elle favorise la synthèse de la vitamine D3 et maintient une bonne ossature. Maintenez une température adaptée (25-30°C selon l'espèce).</p>
        </div>
      </div>

      <!-- Tip 3 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">3</div>
        <div class="conseil-tip-content">
          <h3>Substrat et aménagement</h3>
          <p>Optez pour un sol naturel : terre, sable et herbes sèches sont parfaits. Évitez les copeaux de bois ou substrats parfumés. Ajoutez quelques cachettes, pierres et zones de repos.</p>
        </div>
      </div>

      <!-- Tip 4 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">4</div>
        <div class="conseil-tip-content">
          <h3>Eau et humidité</h3>
          <p>Un petit bassin d'eau propre doit être accessible en permanence, surtout pour les tortues terrestres. Pour certaines espèces tropicales, pensez à vaporiser régulièrement leur habitat pour conserver une bonne humidité.</p>
        </div>
      </div>

      <!-- Tip 5 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">5</div>
        <div class="conseil-tip-content">
          <h3>sécurité avant tout</h3>
          <p>Assurez-vous que l'enclos est protégé des prédateurs et des courants d'air. Les tortues sont curieuses : elles grimpent, creusent et peuvent s'échapper facilement !</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="conseil-final-section">
  <div class="conseil-final-inner">
    <p>Chaque tortue a ses besoins spécifiques selon son espèce et son environnement. Les centres Tortuetopia peuvent vous aider à concevoir l'habitat idéal pour la vôtre — n'hésitez pas à nous demander conseil.</p>
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


<?php get_footer(); ?>