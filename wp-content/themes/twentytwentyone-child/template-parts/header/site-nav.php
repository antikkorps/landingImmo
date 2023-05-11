<?php

/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 position-fixed">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#nos_offres">Offres</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#avantages">Avantages</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Nos formations
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">DCI</a></li>
						<li><a class="dropdown-item" href="#">Training Center</a></li>
						<li><a class="dropdown-item" href="#">Quelques chiffres</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php
