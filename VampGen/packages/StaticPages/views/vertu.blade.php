@extends(config('pages.pages_template'))
@section('content')
<h3>Vertus</h3>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Conscience</label>
		<input name="conscience" type="radio" id="conscience" value="1"/>
		<input name="conscience" type="radio" id="conscience" value="2"/>
		<input name="conscience" type="radio" id="conscience" value="3"/>
		<input name="conscience" type="radio" id="conscience" value="4"/>
		<input name="conscience" type="radio" id="conscience" value="5"/>
	</div>
	<div class="vg-field">
		<label for="nom">Maitrise de soi</label>
		<input name="selfControl" type="radio" id="selfControl" value="1"/>
		<input name="selfControl" type="radio" id="selfControl" value="2"/>
		<input name="selfControl" type="radio" id="selfControl" value="3"/>
		<input name="selfControl" type="radio" id="selfControl" value="4"/>
		<input name="selfControl" type="radio" id="selfControl" value="5"/>
	</div>
	<div class="vg-field">
		<label for="nom">Courage</label>
		<input name="Courage" type="radio" id="Courage" value="1"/>
		<input name="Courage" type="radio" id="Courage" value="2"/>
		<input name="Courage" type="radio" id="Courage" value="3"/>
		<input name="Courage" type="radio" id="Courage" value="4"/>
		<input name="Courage" type="radio" id="Courage" value="5"/>
	</div>
	<div class="center-aligned">
		<button type="submit" class="vg-button">Précédent</button>
		<button type="submit" class="vg-button">Suivant</button>
	</div>
</form>
@endsection