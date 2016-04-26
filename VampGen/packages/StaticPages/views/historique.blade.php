@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned">
	<div class="segment attached top">
		<h3 class="header inverted">Historique</h3>
	</div>
</div>
<div class="segment">
	<form action="" method="post" class="vg-form">
		<div class="vg-field">
			<label for="nom">Alliés</label>
			<input name="allies" type="radio" id="allies" value="1"/>
			<input name="allies" type="radio" id="allies" value="2"/>
			<input name="allies" type="radio" id="allies" value="3"/>
			<input name="allies" type="radio" id="allies" value="4"/>
			<input name="allies" type="radio" id="allies" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Contacs</label>
			<input name="contacs" type="radio" id="contacs" value="1"/>
			<input name="contacs" type="radio" id="contacs" value="2"/>
			<input name="contacs" type="radio" id="contacs" value="3"/>
			<input name="contacs" type="radio" id="contacs" value="4"/>
			<input name="contacs" type="radio" id="contacs" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Génération</label>
			<input name="generation" type="radio" id="generation" value="1"/>
			<input name="generation" type="radio" id="generation" value="2"/>
			<input name="generation" type="radio" id="generation" value="3"/>
			<input name="generation" type="radio" id="generation" value="4"/>
			<input name="generation" type="radio" id="generation" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Influence</label>
			<input name="influence" type="radio" id="influence" value="1"/>
			<input name="influence" type="radio" id="influence" value="2"/>
			<input name="influence" type="radio" id="influence" value="3"/>
			<input name="influence" type="radio" id="influence" value="4"/>
			<input name="influence" type="radio" id="influence" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Mentor</label>
			<input name="mentor" type="radio" id="mentor" value="1"/>
			<input name="mentor" type="radio" id="mentor" value="2"/>
			<input name="mentor" type="radio" id="mentor" value="3"/>
			<input name="mentor" type="radio" id="mentor" value="4"/>
			<input name="mentor" type="radio" id="mentor" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Renommée</label>
			<input name="renown" type="radio" id="renown" value="1"/>
			<input name="renown" type="radio" id="renown" value="2"/>
			<input name="renown" type="radio" id="renown" value="3"/>
			<input name="renown" type="radio" id="renown" value="4"/>
			<input name="renown" type="radio" id="renown" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Ressources</label>
			<input name="resources" type="radio" id="resources" value="1"/>
			<input name="resources" type="radio" id="resources" value="2"/>
			<input name="resources" type="radio" id="resources" value="3"/>
			<input name="resources" type="radio" id="resources" value="4"/>
			<input name="resources" type="radio" id="resources" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Servants</label>
			<input name="servants" type="radio" id="servants" value="1"/>
			<input name="servants" type="radio" id="servants" value="2"/>
			<input name="servants" type="radio" id="servants" value="3"/>
			<input name="servants" type="radio" id="servants" value="4"/>
			<input name="servants" type="radio" id="servants" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Satuts</label>
			<input name="satuts" type="radio" id="satuts" value="1"/>
			<input name="satuts" type="radio" id="satuts" value="2"/>
			<input name="satuts" type="radio" id="satuts" value="3"/>
			<input name="satuts" type="radio" id="satuts" value="4"/>
			<input name="satuts" type="radio" id="satuts" value="5"/>
		</div>
		<div class="vg-field">
			<label for="nom">Troupeau</label>
			<input name="herd" type="radio" id="herd" value="1"/>
			<input name="herd" type="radio" id="herd" value="2"/>
			<input name="herd" type="radio" id="herd" value="3"/>
			<input name="herd" type="radio" id="herd" value="4"/>
			<input name="herd" type="radio" id="herd" value="5"/>
		</div>
		<div class="center-aligned">
			<button type="submit" class="vg-button">Précédent</button>
			<button type="submit" class="vg-button">Suivant</button>
		</div>
	</form>
</div>
<div class="segment bottom attached">
	<p>Votre personnage a une réserve actuelle maximale de 10 points de sang</p>
	<h4 class="header inverted">Réserve de sang</h4>
</div>
@endsection