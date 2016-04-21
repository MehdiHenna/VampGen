@extends(config('pages.pages_template'))
@section('content')
<h3>Historique</h3>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Célérité</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
	<div class="vg-field">
		<label for="nom">Occultation</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
	<div class="vg-field">
		<label for="nom">Quietus</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
</form>
@endsection