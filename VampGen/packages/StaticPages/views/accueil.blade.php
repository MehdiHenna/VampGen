@extends(config('pages.pages_template'))
@section('content')
<p>Générateur pour la création de personnage de vampire</p>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Nom</label>
		<input type="text" id="nom"/>
	</div>
	<div class="vg-field">
		<label for="nom">Joueur</label>
		<input type="text" id="joueur"/>
	</div>
	<div class="vg-field">
		<label for="nom">Chronique</label>
		<input type="text" id="chronique"/>
	</div>
	<div class="vg-field">
		<label for="nom">Nature</label>
		<input type="text" id="nature"/>
	</div>
	<div class="vg-field">
		<label for="nom">Attitude</label>
		<input type="text" id="attitude"/>
	</div>
	<div class="vg-field">
		<label for="nom">Concept</label>
		<input type="text" id="concept"/>
	</div>
	<div class="vg-field">
		<label for="nom">Clan</label>
		<input type="text" id="clan"/>
	</div>
	<div class="vg-field">
		<label for="nom">Génération</label>
		<input type="text" id="generation"/>
	</div>
	<div class="vg-field">
		<label for="nom">Refuge</label>
		<input type="text" id="refuge"/>
	</div>
	<div>
		<button class="vg-button">Envoyer</button>
	</div>
</form>
>>>>>>> 468c92112e0548b16eea1dc6f550aeaacf7a8b10

@endsection