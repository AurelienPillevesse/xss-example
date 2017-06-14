<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les failles XSS</title>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header" style="height: 20%; padding:20px;">
      <div class="mdl-layout__header-row" style="margin-top:20px;">
        <!-- Title -->
        <span class="mdl-layout-title" style="font-size: 80px;">
          <div class="">
            TP - Les failles XSS
          </div>
        </span>
      </div>
    </header>
    <main class="mdl-layout__content" >
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--4-col">
            <h3 id="git-clone-this-repo-use-mozilla-firefox">Git clone this repo &amp; use Mozilla Firefox</h3>
            <p>Intro :
              Faire <code>php -S localhost:8080</code> dans le dossier xss-example</p>
              <p>Puis aller sur : <a href="http://localhost:8080/easy-level.php">http://localhost:8080/</a></p>
              <p>Le TP est composé de différentes pages avec un niveau de protection qui augmente au fûr et à mesure.
                Rappel : une faille xss consiste à utiliser par exemple du javascript dans un champs pour qu&#39;il soit exécuté par le client.
                Le code source PHP est disponible dans le dossier précédement téléchargé.
                -&gt; impossible-level.php empêche tout type de xss.</p>
                <h3 id="question-1-easy-level-php-">Question 1 - <strong>easy-level.php</strong></h3>
                <pre class="editor-colors lang-text"><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Aucune&nbsp;protection&nbsp;sur&nbsp;la&nbsp;page,&nbsp;vous&nbsp;allez&nbsp;pouvoir&nbsp;faire&nbsp;ce&nbsp;que&nbsp;vous&nbsp;voulez&nbsp;(&nbsp;par&nbsp;exemple&nbsp;afficher&nbsp;une&nbsp;alerte&nbsp;)</span></span></span></div></pre><h3 id="question-2-easy-level-2-php-">Question 2 - <strong>easy-level-2.php</strong></h3>
                <pre class="editor-colors lang-text"><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Une&nbsp;protection&nbsp;a&nbsp;été&nbsp;rajoutée,&nbsp;à&nbsp;vous&nbsp;de&nbsp;la&nbsp;trouver.</span></span></span></div></pre><h3 id="question-3-medium-level-php-">Question 3 - <strong>medium-level.php</strong></h3>
                <pre class="editor-colors lang-text"><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Une&nbsp;protection&nbsp;a&nbsp;été&nbsp;rajouté&nbsp;côté&nbsp;serveur.</span></span></span></div></pre><h3 id="question-4-bank-level-php-couplage-csrf-">Question 4 - <strong>bank-level.php</strong> ( couplage CSRF )</h3>
                <pre class="editor-colors lang-text"><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Objectif&nbsp;:&nbsp;Essayez&nbsp;de&nbsp;vous&nbsp;faire&nbsp;une&nbsp;virement&nbsp;à&nbsp;vous&nbsp;même.</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span>&nbsp;</span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>On&nbsp;considère&nbsp;que&nbsp;la&nbsp;banque&nbsp;effectue&nbsp;ses&nbsp;transferts&nbsp;grâce&nbsp;aux&nbsp;requêtes&nbsp;GET.</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>La&nbsp;requête&nbsp;est&nbsp;composée&nbsp;de&nbsp;2&nbsp;paramètres&nbsp;:&nbsp;amount(&nbsp;montant&nbsp;du&nbsp;transfert&nbsp;)&nbsp;&amp;&nbsp;to&nbsp;(&nbsp;id&nbsp;de&nbsp;l&#39;user,&nbsp;normalement&nbsp;le&nbsp;votre).</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span>&nbsp;</span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Conseils&nbsp;:</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="syntax--meta syntax--paragraph syntax--text"><span>-&nbsp;Utiliser&nbsp;alert(&#39;Vous&nbsp;êtes&nbsp;bien&nbsp;connecté&nbsp;à&nbsp;votre&nbsp;compte&#39;)</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Utiliser&nbsp;window.location.href&nbsp;(&nbsp;pour&nbsp;rediriger&nbsp;l&#39;utilisateur&nbsp;:&nbsp;CSRF)</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Aide&nbsp;:&nbsp;le&nbsp;&#39;&amp;&#39;&nbsp;peut&nbsp;aussi&nbsp;s&#39;écrire&nbsp;...</span></span></span></div></pre><h3 id="question-5-retourner-sur-easy-level-php">Question 5 Retourner sur easy-level.php</h3>
                <pre class="editor-colors lang-text"><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Vous&nbsp;allez&nbsp;essayer&nbsp;d&#39;enregistrer&nbsp;un&nbsp;fichier&nbsp;sur&nbsp;le&nbsp;pc&nbsp;d&#39;un&nbsp;utilisateur&nbsp;en&nbsp;utilisant&nbsp;le&nbsp;script&nbsp;FilesSaver.js</span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span>&nbsp;</span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>Doc&nbsp;:&nbsp;</span><span class="syntax--markup syntax--underline syntax--link syntax--https syntax--hyperlink"><span>https://github.com/eligrey/FileSaver.js/</span></span></span></span></div><div class="line"><span class="syntax--text syntax--plain"><span>&nbsp;</span></span></div><div class="line"><span class="syntax--text syntax--plain"><span class="syntax--meta syntax--paragraph syntax--text"><span>CDN&nbsp;:&nbsp;</span><span class="syntax--markup syntax--underline syntax--link syntax--https syntax--hyperlink"><span>https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js</span></span><span>&nbsp;(&nbsp;peut&nbsp;être&nbsp;utile&nbsp;😉&nbsp;)</span></span></span></div></pre><p>Si vous avez du temps, essayez d&#39;exploiter les failles sur ce site : <a href="https://xss-game.appspot.com/">https://xss-game.appspot.com/</a></p>
                <center>
                  <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" href="http://localhost:8080/easy-level.php">
                  Commencer le tp
                </a>
                </center>
            </div>
              </div>
            </div>
          </main>
        </div>

      </body>
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      </html>
