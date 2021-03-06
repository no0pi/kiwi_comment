<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="fr">
  <meta name="viewport" content="width=device-width">

  
  
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
  <link href="/css/cookie.css" rel="stylesheet" type="text/css" />
  <link href="/css/header-footer.css" rel="stylesheet" type="text/css" />
  <link href="/css/article.css" rel="stylesheet" type="text/css" />
  


  
  <link rel="icon" href="/medias/logo.svg">

  <title>kiwi Comment ouvrir un yaourt</title>
</head>

<body>
  <header id="header">
	<nav class="links" style="--items: 7;">
    <a href="/index.php"><img class="logo_img" src="/medias/logo_text.png"></a>
    <a href="#"><input type="text" class="navsearch" placeholder="Recherche.."></a>
		<a href="/all.php">Les tutos</a>
		<a href="/contact.php">Contact</a>
        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="../landing.php">'.$_SESSION["pseudo"].'</a>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="../connexion.php"><span>se connecter</span></a></li>';
        ?>

        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="../deconnexion.php"><span>Se déconnecter</span>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="../inscription.php"><span>Inscrivez-vous</span></a></li>';
        ?>
    <a href="/premium.php">Nos offres premium</a>
		<span class="line"></span>
	</nav>
</header>

<main class="content">


<h1 id="titre">Comment ouvrir un yaourt</h1>
<div>

<h2 class="titre1">Qu'est ce qu'un yaourt?</h2>
<p>Le yaourt, yogourt ou yoghourt, est un lait fermenté par le développement des seules bactéries lactiques thermophiles Lactobacillus delbrueckii subsp. bulgaricus et Streptococcus thermophilus qui doivent être ensemencées simultanément et se trouver vivantes dans le produit fini. C'est la définition officielle française depuis 1963 précisée par le décret de 1988. D'un pays à l'autre, les législations peuvent cependant différer.</p>

<p>Il fait partie des nombreux types de laits fermentés, et est introduit par les Turcs Seldjoukides dès le début du XIe siècle au Moyen-Orient, puis dans les Balkans par les Ottomans dès le XIVe siècle. Très populaire encore aujourd'hui, il est fait maison par de nombreuses familles dans les pays turcophones (Turquie, Azerbaïdjan, Kazakhstan...), dans les Balkans (Bulgarie, Roumanie, Grèce...) mais aussi au Proche-Orient (Syrie, Irak, Liban...). Sa standardisation et sa production industrielle dans la seconde moitié du XXe siècle, en ont fait un produit de grande consommation dans de nombreux pays du monde.</p>

<p>Ce mets naturellement acide est souvent additionné de sucre et de fruits pour être consommé en dessert ou au petit-déjeuner. </p>

<blockquote>Source: <a href="https://fr.wikipedia.org/wiki/Yaourt" target="_blank">Wikipédia</a></blockquote>
</div>

<div>

<h2 class="titre1">Tutoriel</h2>


<h3>1- Repérer l'ouverture facile</h3>
<img class="illu" src="/medias/opercule.jpg">
  
<p>Si vous regardez attentivement votre pot de yahourt, vous pourrez distinguer l'opercule. C'est l'emballage enlevable, il a la même épaisseur qu'une feuille et se détache plutôt facilement.</p>

<h3>2- Prendre délicatement l'opercule pour le tirer </h3>
  <p>
Vous verrez qu'un coin de l'opercule dépasse un peu. C'est l'ouverture facile, qui comme indiqué, rend l'ouverture moins fastidieuse. Prenez ce bout et commencez à tirer.  
Faites attention lorsque vous tirez sur l'opercule, il peut se déchirer, si vous êtes trop violent vous risquez de faire gicler du yahourt sur vous et votre entourage.Pour éviter le gaspillage, tourner l'opercule vers vous, sortez votre langue et léchez l'opercule.</p>


<h3>3- Déposez l'opercule sur la table</h3>
<p>Attention il pourrait y avoir du yahourt sur l'opercule, ne faites pas l'erreur de poser l'emballage du côté où il y a du yahourt.</p>
</p>


<p>J'ai accidentellement déchiré l'opercule! Que dois-je faire?</p>

<br>ok</p>
</div>


   <div id="cookiePopup">
    <h4><span id="cookie-text"><img class="cookie-img" src="/medias/Cookie.svg">Utilisation des cookies</span></h4>
    <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des résultats personnalisés, veuillez accepter notre <a href="/confidentialite.php">Politique de confidentialité</a>.</p>
    <button id="acceptCookie">Accepter</button>
  </div>




</main>
  

<footer>
    <nav class="links" style="--items: 3;">
      <div>
          <form action="newsletter_traitement.php" method="post">
              <input type="email" class="navsearch" name="email_news" placeholder="S'inscrire à la newletter">
              <button type="submit">S'inscire</button>
          </form>
      </div>



    <table>
    <tr>
        <td class="colonnefooter"><a href="/help.php">Aide</a></td>
    </tr>
    <tr>
        <td class="colonnefooter"><a href="/contact.php">Nous contacter</a></td>
    </tr>
      <tr>
        <td class="colonnefooter"> <a href="/confidentialite.php">Conditions d'utilisations</a></td>
    </tr>
</table>



    <table>
    <tr>
      <td class="colonnefooter" class="icons"><a href="http://facebook.com" target="_blank" ><img src="/medias/facebook-app-symbol.png" class="icon" alt="logo_facebook"> </a></td>
      <td class="colonnefooter" class="icons"><a href="http://youtube.com" target="_blank" ><img src="/medias/youtube.png" class="icon" alt="logo_youtube"></a></td>
      <td class="colonnefooter" class="icons"><a href="http://instagram.com" target="_blank" ><img src="/medias/instagram-logo.png" class="icon" alt="logo_instagram"></a></td>
      <td class="colonnefooter" class="icons"><a href="http://twitter.com" target="_blank" ><img src="/medias/twitter.png" class="icon" alt="logo_twitter"></a></td>
    </tr>
</table>

    
   
  </nav>
</footer>


    <script src="/js/cookies.js"></script>

</body>

</html>