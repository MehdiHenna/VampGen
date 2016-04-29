@extends(config('pages.pages_template'))
@section('content')
<h3>Capacité</h3>
<form action="" method="post" class="vg-form">
			{{csrf_field()}}
			<input type="hidden" name="sect" value="{{$old->sect}}" />
			<input type="hidden" name="clan" value="{{$old->clan}}" />
			<input type="hidden" name="name" value="{{$old->name}}" />
			<input type="hidden" name="chronicle" value="{{$old->chronicle}}" />
			<input type="hidden" name="nature" value="{{$old->nature}}" />
			<input type="hidden" name="demeanor" value="{{$old->demeanor}}" />
			<input type="hidden" name="concept" value="{{$old->concept}}" />
			<input type="hidden" name="sire" value="{{$old->sire}}" />
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
				<button type="submit" formaction="/disciplines" class="vg-button">Suivant</button>
</form>
@endsection