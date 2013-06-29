<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/css/main.css" />
<?php if ('fr' == $locale): ?>
	<title>NODEA Industries, Groupement d'experts de l'outillage industriel</title>
	<meta name="Description" content="Nous accompagnons le développement de la supply chain des donneurs d'ordre" />
<?php elseif('en' == $locale): ?>
	<title>NODEA Industries, Closter of industrial tools experts</title>
	<meta name="Description" content="The consortium will support the development of prime supply chain contractor" />
<?php endif ?>
</head>
<body>
	<div id="wrapper_holder">
		<div id="header">
			<a id="logo" href="/<?php echo $locale ?>">
			<?php if ('fr' == $locale): ?>
				NODEA Industries, Groupement d'experts de l'outillage industriel
			<?php elseif('en' == $locale): ?>
				NODEA Industries, Closter of industrial tools experts
			<?php endif ?>
			</a>
			<div id="trad">
				<a href="/fr"<?php echo ('fr' == $locale)?' class="active"':'' ?> id="trad_fr">FR</a>
				<a href="/en"<?php echo ('en' == $locale)?' class="active"':'' ?> id="trad_en">EN</a>
			</div>
			<div id="baseline">
			<?php if ('fr' == $locale): ?>
				Groupement d'experts <br />de l'outillage industriel
			<?php elseif('en' == $locale): ?>
				Cluster of Industrial<br/>tools experts
			<?php endif ?>
			</div>
		</div>
		<div id="cnt_t">
			<div id="cnt_t_l"></div>
			<div id="cnt_t_r">
				<?php echo $contents ?>
			</div>
			<div class="clear"></div>
		</div>
		<div id="cnt_b">
			<div id="cnt_b_l">
			<?php if ('fr' == $locale): ?>
				<h2>Contactez-nous !</h2>
			<?php elseif('en' == $locale): ?>
				<h2>Contact us!</h2>
			<?php endif ?>
				<a href="mailto:<?php echo $email_mailto ?>" id="mail">
				<?php if ('fr' == $locale): ?>
					Envoyez-nous un mail ici.
				<?php elseif('en' == $locale): ?>
					Send us an email.
				<?php endif ?>
				</a>
			</div>
			<div id="cnt_b_r">
				<ul>
					<li>
					<?php if ('fr' == $locale): ?>
						<strong>Nodea Industries</strong> offre un accès direct<br/>à une <strong>compétence technique</strong> à la fois <strong>pointue et élargie</strong>,
					<?php elseif('en' == $locale): ?>
						<strong>Nodea Industries</strong> offers direct access to <strong>specific<br/>and wide-range technical skills,</strong>
					<?php endif ?>
					</li>
					<li>
					<?php if ('fr' == $locale): ?>
						Une structure économique sécurisante :<br/><strong>125 collaborateurs,</strong><br/>CA cumulé de <strong>12M. d’euros.</strong>
					<?php elseif('en' == $locale): ?>
						A solid financial organization:<br/><strong>125 staff members,</strong><br/>annual turnover <strong>12M. d’euros.</strong>
					<?php endif ?>
					</li>
				</ul>

				<a href="http://www.sudprojet.com/" id="sud_projet" target="_blank" class="brands" title="Sud Projet">sudprojet</a>
				<a href="http://www.esteve-sa.fr/" id="esteve" target="_blank" class="brands" title="Esteve">esteve</a>
				<a href="http://www.aerem.fr/" id="aerem" target="_blank" class="brands" title="Aerem">aerem</a>

				<div id="afaq" class="bottom_brands">afaq</div>
				<div id="iso" class="bottom_brands">iso</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">
			<p>&copy; <?php echo date('Y') ?><?php if('fr' == $locale): ?> - <a href="/fr/mentions-legales.html">Mentions légales</a><?php elseif('en' == $locale): ?> - <a href="/en/legal-informations.html">Legal Informations</a><?php endif ?> - NODEA INDUSTRIES - ZA DE LAUZARD - 82370 LABASTIDE SAINT PIERRE – France</p>
		</div>

	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42114501-1', 'nodea-industries.com');
	  ga('send', 'pageview');

	</script>
</body>
</html>