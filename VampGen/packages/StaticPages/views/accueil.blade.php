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
			<label for="nom">Nom</label>
		</div>
		<div class="vg-field">
			<input type="text" id="chronique" required autocomplete="off"/>
			<label for="nom">Chronique</label>
		</div>
		<div class="vg-field">
			<input type="text" id="nature" required autocomplete="off"/>
			<label for="nom">Nature</label>
		</div>
		<div class="vg-field">
			<input type="text" id="attitude" required autocomplete="off"/>
			<label for="nom">Attitude</label>
		</div>
		<div class="vg-field">
			<input type="text" id="concept" required autocomplete="off"/>
			<label for="nom">Concept</label>
		</div>
		<div class="vg-field">
			<div class="styled-select">
				<select>
					<option>Clan</option>
					<option>Choice 1</option>
					<option>Choice 2</option>
					<option>Choice 3</option>
				</select>
			</div>
		</div>
		<div class="vg-field">
			<input type="text" id="generation" required/>
			<label for="nom">Génération</label>
		</div>
		<div class="vg-field">
			<input type="text" id="refuge" required/>
			<label for="nom">Refuge</label>
		</div>
		<div class="center-aligned">
			<button type="submit" class="vg-button">Envoyer</button>
		</div>
	</form>
</div>

@endsection