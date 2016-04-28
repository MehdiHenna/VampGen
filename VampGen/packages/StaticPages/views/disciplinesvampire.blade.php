@extends(config('pages.pages_template'))
@section('content')
<h3>Disciplines</h3>
<form  method="post" class="vg-form">
	{{csrf_field()}}
	<div class="vg-field">
		<label for="Disciplines1">Célérité</label>
		<input name="celerity" type="radio" id="celerity" value="1"/>
		<input name="celerity" type="radio" id="celerity" value="2"/>
		<input name="celerity" type="radio" id="celerity" value="3"/>
		<input name="celerity" type="radio" id="celerity" value="4"/>
		<input name="celerity" type="radio" id="celerity" value="5"/>
	</div>
	<div class="vg-field">
		<label for="Disciplines2">Occultation</label>
		<input name="occultation" type="radio" id="occultation" value="1"/>
		<input name="occultation" type="radio" id="occultation" value="2"/>
		<input name="occultation" type="radio" id="occultation" value="3"/>
		<input name="occultation" type="radio" id="occultation" value="4"/>
		<input name="occultation" type="radio" id="occultation" value="5"/>
	</div>
	<div class="vg-field">
		<label for="Disciplines3">Quietus</label>
		<input name="quietus" type="radio" id="quietus" value="1"/>
		<input name="quietus" type="radio" id="quietus" value="2"/>
		<input name="quietus" type="radio" id="quietus" value="3"/>
		<input name="quietus" type="radio" id="quietus" value="4"/>
		<input name="quietus" type="radio" id="quietus" value="5"/>
	</div>
	<button type="submit" formaction="/clans" class="vg-button">Précédent</button>
	<button type="submit" formaction="/choise-attributtes" class="vg-button">Suivant</button>
</form>
@endsection