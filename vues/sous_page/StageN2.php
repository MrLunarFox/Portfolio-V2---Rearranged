  <style>
  .container1 {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  h2 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  p {
    margin-bottom: 10px;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  li {
    margin-bottom: 10px;
  }

  /* Styles spécifiques aux sections */
  .realisations ul {
    display: flex;
    flex-wrap: wrap;
  }

  .realisations li {
    flex: 1 1 auto;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  .competences ul {
    columns: 2;
  }

  .perspectives p {
    text-align: justify;
  }

/* Médias queries */
@media (max-width: 768px) {
  .realisations ul {
    flex-direction: column;
  }

  .competences ul {
    columns: 1;
  }
}

</style>
<article class="container1">
  <header style="text-align: center;">
      <h1>Association Sportive Mauloise</h1><br>
  </header>

  <section class="realisations">

    <h2>Objectifs visés :</h2><br>
      <p>
        Pendant mon stage au sein de l'Association Sportive Mauloise, j'ai travaillé sur la création complète d'un site internet destiné à faciliter l'organisation des courses organisées par l'association. <br>Les objectifs principaux étaient les suivants :
      </p>
      <ul>
        <li>Concevoir et développer un site web fonctionnel et intuitif pour permettre aux utilisateurs de s'inscrire aux courses en ligne.</li>
        <li>Créer une base de données pour stocker les informations des participants, des courses et des résultats.</li>
        <li>Optimiser le site pour qu'il soit accessible sur différentes plateformes, y compris les appareils mobiles.</li>
      </ul>
      
      <br>

    <h2>Réalisations :</h2><br>
      <p>
        Pour atteindre ces objectifs, j'ai utilisé divers outils et technologies, notamment :
      </p>
      <ul>
        <li>Langages de programmation : HTML, CSS, JavaScript, PHP</li>
        <li>Frameworks et bibliothèques : Symfony (pour le back-end), Bootstrap (pour le front-end)</li>
        <li>Gestionnaire de base de données : MySQL</li>
        <li>Outils de développement : Visual Studio Code, Git</li>
      </ul>
  </section>

  <section class="competences">
    <h2>Compétences acquises</h2><br>
    <ul>
      <li>Développement web avec Symfony</li>
      <li>Gestion de base de données avec Doctrine ORM</li>
    </ul>
  </section>
</article>
