@extends(config('pages.pages_template'))
@section('content')
<p>Générateur pour la création de personnage de vampire</p>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<input type="text" id="nom" required/>
		<label for="nom">Nom</label>
	</div>
	<div class="vg-field">
		<input type="text" id="joueur" required/>
		<label for="nom">Joueur</label>
	</div>
	<div class="vg-field">
		<input type="text" id="chronique" required/>
		<label for="nom">Chronique</label>
	</div>
	<div class="vg-field">
		<input type="text" id="nature" required/>
		<label for="nom">Nature</label>
	</div>
	<div class="vg-field">
		<input type="text" id="attitude" required/>
		<label for="nom">Attitude</label>
	</div>
	<div class="vg-field">
		<input type="text" id="concept" required/>
		<label for="nom">Concept</label>
	</div>
	<div class="vg-field">
		<input type="text" id="clan" required/>
		<label for="nom">Clan</label>

		<select>
			<option>Choice 1</option>
			<option>Choice 2</option>
			<option>Choice 3</option>
			<option>Choice 4</option>
		</select>

	</div>
	<div class="vg-field">
		<input type="text" id="generation" required/>
		<label for="nom">Génération</label>
	</div>
	<div class="vg-field">
		<input type="text" id="refuge" required/>
		<label for="nom">Refuge</label>
	</div>
	<div>
		<button class="vg-button">Envoyer</button>
	</div>
</form>

@endsection