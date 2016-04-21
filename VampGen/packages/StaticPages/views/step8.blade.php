@extends(config('pages.pages_template'))
@section('content')
<h3>Vertus</h3>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Conscience</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
	<div class="vg-field">
		<label for="nom">Maitrise de soi</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
	<div class="vg-field">
		<label for="nom">Courage</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
</form>
@endsection