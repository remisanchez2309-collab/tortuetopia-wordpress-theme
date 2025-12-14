<?php
/**
 * Conseils Alimentation page template
 */
get_header();
?>

<!-- Hero Section with background image -->
<section class="conseil-hero-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/entretien-conseils.png' ); ?>');">
  <div class="conseil-hero-overlay"></div>
  <div class="conseil-hero-inner">
    <h1>Entretenir, c'est protéger la santé de votre tortue.</h1>
  </div>
</section>

<!-- Conseil Content Section -->
<section class="conseil-content-section">
  <div class="conseil-content-inner">
    <div class="conseil-intro">
      <p>L'entretien régulier de votre tortue et de son habitat est essentiel pour préserver sa santé et son confort. Un environnement propre, une carapace bien entretenue et une surveillance attentive permettent d'éviter la plupart des problèmes courants. Découvrez nos conseils pour prendre soin de votre tortue au quotidien, simplement et efficacement.</p>
    </div>

    <!-- Numbered Tips -->
    <div class="conseil-tips">
      <!-- Tip 1 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">1</div>
        <div class="conseil-tip-content">
          <h3>Nettoyer régulièrement l'habitat</h3>
          <p>Un nettoyage hebdomadaire est recommandé : changez l'eau, retirez les restes de nourriture et remplacez les zones souillées du substrat. Pour les aquatiques, surveillez la qualité de l'eau et nettoyez le filtre.</p>
        </div>
      </div>

      <!-- Tip 2 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">2</div>
        <div class="conseil-tip-content">
          <h3>Surveiller la carapace</h3>
          <p>La carapace est un bon indicateur de santé. Essuyez-la délicatement avec un chiffon humide si elle est sale, sans savon ni produit. Évitez les bains trop fréquents, mais proposez de l'eau tiède si votre tortue aime s'y détendre.</p>
        </div>
      </div>

      <!-- Tip 3 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">3</div>
        <div class="conseil-tip-content">
          <h3>Contrôler la température et l'humidité</h3>
          <p>Un habitat propre ne suffit pas : il doit aussi rester stable. Vérifiez chaque jour la chaleur, l'humidité et la lumière. Un mauvais équilibre peut entraîner des infections ou un ralentissement du métabolisme.</p>
        </div>
      </div>

      <!-- Tip 4 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">4</div>
        <div class="conseil-tip-content">
          <h3>Observer régulièrement votre tortue</h3>
          <p>Prenez le temps de la regarder : appétit, mobilité, respiration, apparence des yeux et du nez… Le moindre changement peut signaler un problème. En cas de doute, contactez rapidement un vétérinaire spécialisé.</p>
        </div>
      </div>

      <!-- Tip 5 -->
      <div class="conseil-tip">
        <div class="conseil-tip-number">5</div>
        <div class="conseil-tip-content">
          <h3>Entretien saisonnier</h3>
          <p>Avant l'hiver ou la période de repos, nettoyez complètement l'enclos et vérifiez le bon état du matériel (lampe, thermostat, bassin). Durant l'hibernation, réduisez la manipulation au minimum et maintenez un suivi régulier.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="conseil-final-section">
  <div class="conseil-final-inner">
    <p>L'entretien est la clé d'une tortue en bonne santé. Un petit geste régulier vaut mieux qu'un grand nettoyage trop rare. Si vous avez un doute sur les soins à apporter, nos équipes sont là pour vous conseiller.</p>
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