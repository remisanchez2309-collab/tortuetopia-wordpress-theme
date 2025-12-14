<?php
/**
 * Conseils Alimentation page template
 */
get_header();
?>

<!-- Hero Section with background image -->
<section class="conseil-hero-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/alimentation-conseil.png' ); ?>');">
  <div class="conseil-hero-overlay"></div>
  <div class="conseil-hero-inner">
    <h1>Bien nourrir votre tortue, c'est la garantir une bonne santé</h1>
  </div>
</section>

<!-- Conseil Content Section -->
<section class="conseil-content-section">
  <div class="conseil-content-inner">
    <div class="conseil-intro">
      <p>L'alimentation de votre tortue joue un rôle essentiel dans sa croissance, sa carapace et sa longévité. Chaque espèce a des besoins spécifiques : découvrez nos conseils pour offrir une alimentation adaptée à son environnement.</p>
    </div>

    <!-- Numbered Tips -->
    <div class="conseil-tips">
      <!-- Tip 1 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">1</div>
        <div class="conseil-tip-content">
          <h3>Varier les aliments</h3>
          <p>Les tortues ont besoin d'une alimentation diversifiée : alterner légumes, fruits et aliments comestibles. Évitez les aliments trop riches en sucres.</p>
        </div>
      </div>

      <!-- Tip 2 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">2</div>
        <div class="conseil-tip-content">
          <h3>Favorisez les produits frais</h3>
          <p>Privilégiez des produits non traités, lavés et coupés en petits morceaux. Les fruits doivent rester occasionnels en petite quantité.</p>
        </div>
      </div>

      <!-- Tip 3 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">3</div>
        <div class="conseil-tip-content">
          <h3>Calcium et vitamines</h3>
          <p>Assurer un bon apport en calcium (os de seiche, coquilles d'fruits broyés) et en vitamine D grâce à l'exposition naturelle ou sous une lampe UVB.</p>
        </div>
      </div>

      <!-- Tip 4 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">4</div>
        <div class="conseil-tip-content">
          <h3>Hydratation</h3>
          <p>Laissez toujours un petit récipient d'eau propre à disposition. Certaines tortues aiment aussi se baigner pour s'hydrater.</p>
        </div>
      </div>

      <!-- Tip 5 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">5</div>
        <div class="conseil-tip-content">
          <h3>À éviter absolument</h3>
          <p>Ne donnez jamais de viande, d'aliments pour chats/chiens ou de laitages. Gouvernez l'équilibre avec prudence.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="conseil-final-section">
  <div class="conseil-final-inner">
    <p>Chaque centre Tortuetopia adopte ses recommandations selon le climat et la région. N'hésitez pas à nous contacter si vous avez un doute sur les besoins alimentaires de votre tortue.</p>
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