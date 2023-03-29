<?php 
  include "vues/header.php";
  
  $uc = empty($_GET['uc']) ? "accueil" : $_GET['uc'];

  switch($uc){
    case 'accueil' :
      include('vues/Accueil.php');
      break;
    case 'presentation' :
      include('vues/presentation.php');
      break;
    case 'presentationbts' :
      include('vues/presentationbts.php');
      break;
    case 'projet_A' :
      include('vues/sous_page/ProjetA.php');
      break;
    case 'projet_B' :
      include('vues/sous_page/ProjetB.php');
      break;
    case 'stage_entreprise_A' :
      include('vues/sous_page/StageN°1.php');
      break;
    case 'stage_entreprise_B' :
      include('vues/sous_page/StageN°2.php');
      break;
    case 'veille_tech' :
      include('vues/veille-technologique.php');
      break;
    case 'contact' :
      include('vues/contact.php');
      break;
    }

    include "vues/footer.php";
?>