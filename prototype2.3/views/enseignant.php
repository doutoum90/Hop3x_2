<?php
	include("../commons/commonBegin.php");
?>


		<div class="col-md-4">
			<!-- classes-->
			<h3>Classes</h3>
			<ol style="list-style-type:none;">
				<li><button class="btn btn-primary btn-lg btn-block"><p>L1 SPI 1</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>L1 SPI 2</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>L1 SPI 3</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>L1 SPI 1</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>L2 SPI 2</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>L3 SPI</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>M1 ISI Init</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>M1 ISI Alter</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>M2 ISI Init</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>M1 ISI Alter</p></button></li>
			</ol>
		</div>
		
		<div class="col-md-4">
			<!-- sessions -->
			<h3>Sessions</h3>
			<ol style="list-style-type:none;">
				<li><button class="btn btn-primary btn-lg btn-block"><p>"Cancanneur" Java<br>John DOE</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>"Calculette" Ruby<br>John DOE</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>"Jeu de la vie" Java<br>John DOE</p></button></li>
				<li><button class="btn btn-primary btn-lg btn-block"><p>"TDA" C<br>John DOE</p></button></li>
			</ol>
			
		</div>
		<div class="col-md-4">
			<!-- fichiers, et visualiseur -->
			<div class="row">
			<h3>Fichiers</h3>
				<ol style="list-style-type:none;">
					<li><button class="btn btn-primary btn-lg btn-block"><p>Cancanneur.java<p></button></li>
					<li><button class="btn btn-primary btn-lg btn-block"><p>Canard.java<p></button></li>
					<li><button class="btn btn-primary btn-lg btn-block"><p>Autruche.java<p></button></li>
				</ol>
			</div>
			
			
			
			
			
			
			
			<div class="row">
				<h4>Visualiseur</h4>
				<textarea disabled class="form-control" rows="20">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed commodo ante. Pellentesque congue faucibus ultrices.
Nulla consequat id nisl et convallis. Maecenas euismod pulvinar commodo. 
Quisque consequat scelerisque nisl, et vestibulum lectus dignissim vel. Integer eget sem pellentesque, 
hendrerit felis luctus, convallis mauris. In maximus, quam dapibus aliquam scelerisque, nulla mi placerat nibh, 
				</textarea>
				<div class="row">
					<!-- boutton retour rapide, retour arriere, pause, avance un evenement, vitesse reele, acceleré -->
					<button class="btn btn-primary btn-lg"><<</button>
					<button class="btn btn-primary btn-lg"><</button>
					<button class="btn btn-primary btn-lg">Pause</button>
					<button class="btn btn-primary btn-lg">Play</button>
					<button class="btn btn-primary btn-lg">></button>
					<button class="btn btn-primary btn-lg">>></button>
					<button class="btn btn-primary btn-lg">Live</button>
				</div>
			</div>
		</div>
		
		<a href="index.php"><button class="btn btn-primary">Retour</button></a>
		


</div>


<?php
	include("../commons/commonEnd.php");
?>