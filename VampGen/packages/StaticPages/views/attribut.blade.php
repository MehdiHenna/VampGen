@extends(config('pages.pages_template'))
@section('content')
<h3>Attributs</h3>
<h4>Physique</h4>
<form action="" method="post" class="vg-form">
			
	<div class="vg-field">
		<label for="strength">Force</label>
		<input name="strength" type="radio" id="strength" value="1" />
		<input name="strength" type="radio" id="strength" value="2" />
		<input name="strength" type="radio" id="strength" value="3" />
		<input name="strength" type="radio" id="strength" value="4" />
		<input name="strength" type="radio" id="strength" value="5" />
	</div>
	<div class="vg-field">
		<label for="dexterity">Dextérité</label>
		<input name="dexterity" type="radio" id="dexterity" value="1" />
		<input name="dexterity" type="radio" id="dexterity" value="2" />
		<input name="dexterity" type="radio" id="dexterity" value="3" />
		<input name="dexterity" type="radio" id="dexterity" value="4" />
		<input name="dexterity" type="radio" id="dexterity" value="5" />
	</div>
	<div class="vg-field">
		<label for="stamina">Vigueur</label>
		<input name="stamina" type="radio" id="stamina" value="1" />
		<input name="stamina" type="radio" id="stamina" value="2" />
		<input name="stamina" type="radio" id="stamina" value="3" />
		<input name="stamina" type="radio" id="stamina" value="4" />
		<input name="stamina" type="radio" id="stamina" value="5" />
	</div>
</form>
<h4>Social</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="charisma">Charisme</label>
		<input name="charisma" type="radio" id="charisma" value="1" />
		<input name="charisma" type="radio" id="charisma" value="2" />
		<input name="charisma" type="radio" id="charisma" value="3" />
		<input name="charisma" type="radio" id="charisma" value="4" />
		<input name="charisma" type="radio" id="charisma" value="5" />
	</div>
	<div class="vg-field">
		<label for="manipulation">Manipulation</label>
		<input name="manipulation" type="radio" id="manipulation" value="1" />
		<input name="manipulation" type="radio" id="manipulation" value="2" />
		<input name="manipulation" type="radio" id="manipulation" value="3" />
		<input name="manipulation" type="radio" id="manipulation" value="4" />
		<input name="manipulation" type="radio" id="manipulation" value="5" />
	</div>
	<div class="vg-field">
		<label for="appearence">Apparence</label>
		<input name="appearence" type="radio" id="appearence" value="1" />
		<input name="appearence" type="radio" id="appearence" value="2" />
		<input name="appearence" type="radio" id="appearence" value="3" />
		<input name="appearence" type="radio" id="appearence" value="4" />
		<input name="appearence" type="radio" id="appearence" value="5" />
	</div>
</form>
<h4>Mental</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="perception">Perception</label>
		<input name="perception" type="radio" id="perception" value="1" />
		<input name="perception" type="radio" id="perception" value="2" />
		<input name="perception" type="radio" id="perception" value="3" />
		<input name="perception" type="radio" id="perception" value="4" />
		<input name="perception" type="radio" id="perception" value="5" />
	</div>
	<div class="vg-field">
		<label for="intelligence">Intelligence</label>
		<input name="intelligence" type="radio" id="intelligence" value="1" />
		<input name="intelligence" type="radio" id="intelligence" value="2" />
		<input name="intelligence" type="radio" id="intelligence" value="3" />
		<input name="intelligence" type="radio" id="intelligence" value="4" />
		<input name="intelligence" type="radio" id="intelligence" value="5" />
	</div>
	<div class="vg-field">
		<label for="wits">Astuce</label>
		<input name="wits" type="radio" id="wits" value="1" />
		<input name="wits" type="radio" id="wits" value="2" />
		<input name="wits" type="radio" id="wits" value="3" />
		<input name="wits" type="radio" id="wits" value="4" />
		<input name="wits" type="radio" id="wits" value="5" />
	</div>
	<div class="center-aligned">
		<button type="submit" formaction="/choice-attributes" class="vg-button">Précédent</button>
		<button type="submit" formaction="/choice-abilities" class="vg-button">Suivant</button>
	</div>
</form>
@endsection