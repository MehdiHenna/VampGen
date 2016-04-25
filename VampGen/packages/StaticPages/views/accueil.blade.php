@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Générateur pour la création de personnage de vampire</h2 class="header">
	</div>
</div>
<div class="container center-aligned segment">
	<form action="" method="post" class="vg-form">
		<div class="vg-field">
			<input type="text" id="nom" required autocomplete="off" />
			<label for="nom" class="label-text">Nom</label>
			<p class="info">C'est votre nom de joueur</p>
		</div>
		<div class="vg-field">
			<input type="text" id="chronique" required autocomplete="off"/>
			<label for="nom" class="label-text">Chronique</label>
			<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, itaque, eius. Expedita sint est asperiores, perferendis doloribus placeat provident velit dicta cum iusto vero culpa, sed accusamus corrupti. Pariatur, voluptate?</p>
		</div>
		<div class="vg-field">
			<input type="text" id="nature" required autocomplete="off"/>
			<label for="nom" class="label-text">Nature</label>
		</div>
		<div class="vg-field">
			<input type="text" id="attitude" required autocomplete="off"/>
			<label for="nom" class="label-text">Attitude</label>
		</div>
		<div class="vg-field">
			<input type="text" id="concept" required autocomplete="off"/>
			<label for="nom" class="label-text">Concept</label>
		</div>
		<div class="vg-field">
			<p class="radio-list-title">Clans</p>
				<div class="radio-input">
					<input name="clan" type="radio" id="brujah" checked="checked">
		   			<label for="brujah">Brujah</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="assamite">
		   			<label for="assamite">Assamite</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="tremere">
		   			<label for="tremere">Tremere</label>
	   			</div>
				<div class="radio-input">	   			
		   			<input name="clan" type="radio" id="lasombra">
		   			<label for="lasombra">Lasombra</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="followers_of_set">
		   			<label for="followers_of_set">Disciple de Seth</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="malkavien">
		   			<label for="malkavien">Malkavien</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="ventrue">
		   			<label for="ventrue">Ventrue</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="toreador">
		   			<label for="toreador">Toreador</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="tzimisce">
		   			<label for="tzimisce">Tzimisce</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="nosferatu">
		   			<label for="nosferatu">Nosferatu</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="giovanni">
		   			<label for="giovanni">Giovanni</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="gangrel">
		   			<label for="gangrel">Gangrel</label>
	   			</div>
				<div class="radio-input">
		   			<input name="clan" type="radio" id="ravnos">
		   			<label for="ravnos">Ravnos</label>
	   			</div>
		</div>
		<div class="vg-field">
			<input type="text" id="generation" required/>
			<label for="nom" class="label-text">Génération</label>
		</div>
		<div class="vg-field">
			<input type="text" id="refuge" required/>
			<label for="nom" class="label-text">Refuge</label>
		</div>
		<div class="center-aligned">
			<button type="submit" class="vg-button">Envoyer</button>
		</div>
		
	</form>
</div>

@endsection