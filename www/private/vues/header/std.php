<header>
	<h1><?php echo $title_header; ?></h1>
	<nav id="Menu">
	<ul>
		<li>
			<a href="index.php"
				<?php
				if($page_actu == "accueil")
				{
					echo "class=\"current\"";
				}
				?>
			>
			Accueil
			</a>
		</li>
		<li>
			<a  href="index.php?pageId=sps"
				<?php
				if($page_actu == "sps")
				{
					echo "class=\"current\"";
				}
				?>
			>
			SPS
			</a>
		</li>
		<li>
			<a  href="index.php?pageId=cct"
				<?php
				if($page_actu == "cct")
				{
					echo "class=\"current\"";
				}
				?>
			>
			CCT
			</a>
		</li>
		<li>
			<a  href="index.php?pageId=control&amp;action=view"
				<?php
				if($page_actu == "control")
				{
					echo "class=\"current\"";
				}
				?>
			>
			Controle
			</a>
		</li>
	</ul>
</nav>
</header>