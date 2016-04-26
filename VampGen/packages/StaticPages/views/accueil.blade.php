@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Générateur pour la création de personnage de vampire</h2 class="header">
	</div>
</div>
<div class="container center-aligned segment">
	<form action="/character" method="post" class="vg-form">
		{{csrf_field()}}
		<input type="hidden" name="page" value="accueil">
		<div class="vg-field">
			<input type="text" id="name" required autocomplete="off"  name="name" value="value"/>
			<label for="name" class="label-text">Nom</label>
			<p class="info">C'est votre nom de joueur</p>
		</div>
		<div class="vg-field">
			<input type="text" id="chronicle" required autocomplete="off" name="chronicle" value="value"/>
			<label for="chronicle" class="label-text">Chronique</label>
			<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, itaque, eius. Expedita sint est asperiores, perferendis doloribus placeat provident velit dicta cum iusto vero culpa, sed accusamus corrupti. Pariatur, voluptate?</p>
		</div>
		<div class="vg-field">
			<input type="text" id="nature" required autocomplete="off" name="nature" value="value"/>
			<label for="nature" class="label-text">Nature</label>
		</div>
		<div class="vg-field">
			<input type="text" id="demeanor" required autocomplete="off" name="demeanor" value="value"/>
			<label for="demeanor" class="label-text">Attitude</label>
		</div>
		<div class="vg-field">
			<input type="text" id="concept" required autocomplete="off" name="concept" value="value"/>
			<label for="concept" class="label-text">Concept</label>
		</div>
		<div class="vg-field">
			<input type="text" id="sire" required name="sire" value="value"/>
			<label for="sire" class="label-text">Sire</label>
		</div>
		<div class="center-aligned">
			<button type="submit" class="vg-button">Suivant</button>
		</div>
	</form>
</div>

@endsection