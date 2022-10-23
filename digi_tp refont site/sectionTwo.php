<?php
 if (isset($_GET['society.php'])) {
  header('location:society.php');
  die();
 }  
function ToundSection(){?>
<section id="services">
<div class="card_container">
  <div class="card">
    <div class="icon">
      <figure>
        <img src="/sco.png" alt="image" />
      </figure>
    </div>
  </div>
  <div class="text_card">
    <h3>Qui sommes nous</h3>
    <br />
    <p3>
      DIGI-TP est une entreprise offrant <br />
      des solutions digitales afin d’optimiser <br />
      et de moderniser les outils techniques <br />
      des entreprises et des professionnels.
    </p3>
    <div class="platform_div">
    <?php
      
      ?>
      <button>
        <a href='society.php '>voir plus</a>
        </html>
      </button>
    </div>
  </div>
</div>
<div class="card_container">
  <div class="text_card">
    <h3>Découvrez l'éxperince DG-TP</h3>
    <p3>
      Notre ambition , Notre méthode <br />Les étapes du développement.
      Coût et délais, Notre domaine d’activité
    </p3>
    <div class="platform_div">
      
      <button>
        <a href="#accueil"> voir plus</a>
      </button>
    </div>
  </div>
  <div class="card">
    <div class="icon">
      <figure>
        <img src="/solutions_.png" alt="image" />
      </figure>
    </div>
  </div>
</div>
<div class="card_container">
  <div class="card">
    <div class="icon">
      <figure>
        <img src="/Contact.png" alt="image" />
      </figure>
    </div>
  </div>
  <div class="text_card">
    <h3>Et si nous échangions?</h3>
    <br />
    <p3>
    Envie d’échanger avec l’un de nos experts ? <br> Besoin d’en savoir plus ? <br>
    Une problématique sur votre site  ? 
    </p3>
    <div class="platform_div">
      <button>
        <a href="/">contactez nous</a>
      </button>
    </div>
  </div>
</div>
</section>

<?php
};
?>
