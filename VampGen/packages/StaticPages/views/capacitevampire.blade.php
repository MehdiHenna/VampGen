@extends(config('pages.pages_template'))
@section('content')
<h3>Capacité</h3>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Célérité</label>
		<input name="celerity" type="radio" id="celerity" value="1"/>
		<input name="celerity" type="radio" id="celerity" value="2"/>
		<input name="celerity" type="radio" id="celerity" value="3"/>
		<input name="celerity" type="radio" id="celerity" value="4"/>
		<input name="celerity" type="radio" id="celerity" value="5"/>
	</div>
	<div class="vg-field">
		<label for="nom">Occultation</label>
		<input name="occultation" type="radio" id="occultation" value="1"/>
		<input name="occultation" type="radio" id="occultation" value="2"/>
		<input name="occultation" type="radio" id="occultation" value="3"/>
		<input name="occultation" type="radio" id="occultation" value="4"/>
		<input name="occultation" type="radio" id="occultation" value="5"/>
	</div>
	<div class="vg-field">
		<label for="nom">Quietus</label>
		<input name="Quietus" type="radio" id="Quietus" value="1"/>
		<input name="Quietus" type="radio" id="Quietus" value="2"/>
		<input name="Quietus" type="radio" id="Quietus" value="3"/>
		<input name="Quietus" type="radio" id="Quietus" value="4"/>
		<input name="Quietus" type="radio" id="Quietus" value="5"/>
	</div>
	<div class="center-aligned">
		<button type="submit" class="vg-button">Précédent</button>
		<button type="submit" class="vg-button">Suivant</button>
	</div>
</form>
@endsection