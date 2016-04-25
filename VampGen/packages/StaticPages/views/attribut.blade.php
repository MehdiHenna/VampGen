@extends(config('pages.pages_template'))
@section('content')
<h3>Attributs</h3>
<h4>Physique</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Force</label>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
		<input type="radio" id="strength"/>
	</div>
	<div class="vg-field">
		<label for="nom">Dextérité</label>
		<input type="radio" id="dexterity"/>
		<input type="radio" id="dexterity"/>
		<input type="radio" id="dexterity"/>
		<input type="radio" id="dexterity"/>
		<input type="radio" id="dexterity"/>
	</div>
	<div class="vg-field">
		<label for="nom">Vigueur</label>
		<input type="radio" id="stamina"/>
		<input type="radio" id="stamina"/>
		<input type="radio" id="stamina"/>
		<input type="radio" id="stamina"/>
		<input type="radio" id="stamina"/>
	</div>
</form>
<h4>Social</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Charisme</label>
		<input type="radio" id="charisma"/>
		<input type="radio" id="charisma"/>
		<input type="radio" id="charisma"/>
		<input type="radio" id="charisma"/>
		<input type="radio" id="charisma"/>
	</div>
	<div class="vg-field">
		<label for="nom">Manipulation</label>
		<input type="radio" id="manipulation"/>
		<input type="radio" id="manipulation"/>
		<input type="radio" id="manipulation"/>
		<input type="radio" id="manipulation"/>
		<input type="radio" id="manipulation"/>
	</div>
	<div class="vg-field">
		<label for="nom">Apparence</label>
		<input type="radio" id="appearence"/>
		<input type="radio" id="appearence"/>
		<input type="radio" id="appearence"/>
		<input type="radio" id="appearence"/>
		<input type="radio" id="appearence"/>
	</div>
</form>
<h4>Mental</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Perception</label>
		<input type="radio" id="perception"/>
		<input type="radio" id="perception"/>
		<input type="radio" id="perception"/>
		<input type="radio" id="perception"/>
		<input type="radio" id="perception"/>
	</div>
	<div class="vg-field">
		<label for="nom">Intelligence</label>
		<input type="radio" id="intelligence"/>
		<input type="radio" id="intelligence"/>
		<input type="radio" id="intelligence"/>
		<input type="radio" id="intelligence"/>
		<input type="radio" id="intelligence"/>
	</div>
	<div class="vg-field">
		<label for="nom">Astuce</label>
		<input type="radio" id="wits"/>
		<input type="radio" id="wits"/>
		<input type="radio" id="wits"/>
		<input type="radio" id="wits"/>
		<input type="radio" id="wits"/>
	</div>
</form>
@endsection