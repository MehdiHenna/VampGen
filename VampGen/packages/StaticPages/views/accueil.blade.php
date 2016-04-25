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