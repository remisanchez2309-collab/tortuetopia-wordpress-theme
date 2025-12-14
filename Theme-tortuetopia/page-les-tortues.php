<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<!-- Hero Section with background image and frosted glass card -->
<section class="tortues-hero-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/plage-tortues.png' ); ?>');">
  <div class="tortues-hero-overlay"></div>
  <div class="tortues-hero-inner">
    <h1>Découvrez le monde fascinant des tortues.</h1>
    
    <div class="tortues-hero-card">
      <p>Présentes sur Terre depuis plus de 200 millions d'années, les tortues sont de véritables témoins de l'évolution.</p>
      
      <p>Elles se distinguent par leur carapace unique, leur longévité impressionnante et leur incroyable capacité d'adaptation. Aujourd'hui, on recense plus de 350 espèces de tortues réparties à travers le monde, vivant aussi bien sur terre que dans les mers et les eaux douces.</p>
      
      <p>Malheureusement, beaucoup d'entre elles sont menacées par la pollution, la destruction des habitats naturels et le trafic illégal. Chez Tortuetopia, nous œuvrons chaque jour pour leur protection, leur soin et leur adoption responsable.</p>
    </div>
  </div>
</section>

<!-- Tortues Types Section -->
<section class="tortues-types-section">
  <div class="tortues-types-inner">
    <div class="tortues-types-grid">
      <!-- Tortues Terrestres - Left Column -->
      <div class="tortues-type-card">
        <div class="tortues-type-header">
          <h2>Les tortues terrestres</h2>
        </div>
        <div class="tortues-type-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/tortue-terre.png' ); ?>" alt="Tortues terrestres">
        </div>
        <div class="tortues-type-content">
          <p>Les tortues terrestres vivent principalement dans des environnements secs et ensoleillés. Elles se nourrissent surtout de végétation (salades, herbes, fleurs) et ont besoin d'espaces ouverts pour se déplacer. Leur carapace est souvent bombée et robuste, conçue pour les protéger des prédateurs. Ces tortues peuvent vivre plus de 80 ans lorsqu'elles bénéficient de bonnes conditions de vie.</p>
        </div>
      </div>

      <!-- Tortues Marines - Right Column -->
      <div class="tortues-type-card">
        <div class="tortues-type-header">
          <h2>Les tortues marines</h2>
        </div>
        <div class="tortues-type-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/tortue-eau.png' ); ?>" alt="Tortues marines">
        </div>
        <div class="tortues-type-content">
          <p>Les tortues aquatiques vivent en eau douce ou salée selon leur espèce. Les tortues marines, quant à elles, passent presque toute leur vie dans l'océan et parcourent parfois des milliers de kilomètres au cours de leurs migrations. Leur alimentation varie selon l'espèce : algues, méduses, crustacés ou poissons. Ces tortues jouent un rôle essentiel dans l'équilibre des écosystèmes marins, mais sont malheureusement parmi les plus menacées.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="tortue-regen">
    <div class="tortue-regen-inner">
        <p>Les tortues participent à la régénération des sols, à la dispersion des graines et à l'équilibre des milieux aquatiques. En les protégeant, nous contribuons à la préservation de nombreux autres écosystèmes essentiels à la biodiversité.</p>
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