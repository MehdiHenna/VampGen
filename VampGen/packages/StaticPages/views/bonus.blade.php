@extends(config('pages.pages_template'))
@section('content')
<h3>Attributs</h3>
<h4>Physique</h4>
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Force</label>
		<input name="strength" type="radio" id="strength" value="1" />
		<input name="strength" type="radio" id="strength" value="2" />
		<input name="strength" type="radio" id="strength" value="3" />
		<input name="strength" type="radio" id="strength" value="4" />
		<input name="strength" type="radio" id="strength" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Dextérité</label>
		<input name="dexterity" type="radio" id="dexterity" value="1" />
		<input name="dexterity" type="radio" id="dexterity" value="2" />
		<input name="dexterity" type="radio" id="dexterity" value="3" />
		<input name="dexterity" type="radio" id="dexterity" value="4" />
		<input name="dexterity" type="radio" id="dexterity" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Vigueur</label>
		<input name="stamina" type="radio" id="stamina" value="1" />
		<input name="stamina" type="radio" id="stamina" value="2" />
		<input name="stamina" type="radio" id="stamina" value="3" />
		<input name="stamina" type="radio" id="stamina" value="4" />
		<input name="stamina" type="radio" id="stamina" value="5" />
	</div>
	<h4>Social</h4>
	<div class="vg-field">
		<label for="nom">Charisme</label>
		<input name="charisma" type="radio" id="charisma" value="1" />
		<input name="charisma" type="radio" id="charisma" value="2" />
		<input name="charisma" type="radio" id="charisma" value="3" />
		<input name="charisma" type="radio" id="charisma" value="4" />
		<input name="charisma" type="radio" id="charisma" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Manipulation</label>
		<input name="manipulation" type="radio" id="manipulation" value="1" />
		<input name="manipulation" type="radio" id="manipulation" value="2" />
		<input name="manipulation" type="radio" id="manipulation" value="3" />
		<input name="manipulation" type="radio" id="manipulation" value="4" />
		<input name="manipulation" type="radio" id="manipulation" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Apparence</label>
		<input name="appearence" type="radio" id="appearence" value="1" />
		<input name="appearence" type="radio" id="appearence" value="2" />
		<input name="appearence" type="radio" id="appearence" value="3" />
		<input name="appearence" type="radio" id="appearence" value="4" />
		<input name="appearence" type="radio" id="appearence" value="5" />
	</div>
	<h4>Mental</h4>
	<div class="vg-field">
		<label for="nom">Perception</label>
		<input name="perception" type="radio" id="perception" value="1" />
		<input name="perception" type="radio" id="perception" value="2" />
		<input name="perception" type="radio" id="perception" value="3" />
		<input name="perception" type="radio" id="perception" value="4" />
		<input name="perception" type="radio" id="perception" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Intelligence</label>
		<input name="intelligence" type="radio" id="intelligence" value="1" />
		<input name="intelligence" type="radio" id="intelligence" value="2" />
		<input name="intelligence" type="radio" id="intelligence" value="3" />
		<input name="intelligence" type="radio" id="intelligence" value="4" />
		<input name="intelligence" type="radio" id="intelligence" value="5" />
	</div>
	<div class="vg-field">
		<label for="nom">Astuce</label>
		<input name="wits" type="radio" id="wits" value="1" />
		<input name="wits" type="radio" id="wits" value="2" />
		<input name="wits" type="radio" id="wits" value="3" />
		<input name="wits" type="radio" id="wits" value="4" />
		<input name="wits" type="radio" id="wits" value="5" />
	</div>
	<div class="radio-list-title">
		<h1 class="header">Talents</h1>
		<div class="vg-field">
			<div class="radio-input">
				<label for="athletics">Athlétisme</label>
				<input name="athletics" type="radio" id="athletics" value="1"/>
				<input name="athletics" type="radio" id="athletics" value="2"/>
				<input name="athletics" type="radio" id="athletics" value="3"/>
				<input name="athletics" type="radio" id="athletics" value="4"/>
				<input name="athletics" type="radio" id="athletics" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="brawl">Bagarre</label>
				<input name="brawl" type="radio" id="brawl" value="1"/>
				<input name="brawl" type="radio" id="brawl" value="2"/>
				<input name="brawl" type="radio" id="brawl" value="3"/>
				<input name="brawl" type="radio" id="brawl" value="4"/>
				<input name="brawl" type="radio" id="brawl" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="leadership">Commandement</label>
				<input name="leadership" type="radio" id="leadership" value="1"/>
				<input name="leadership" type="radio" id="leadership" value="2"/>
				<input name="leadership" type="radio" id="leadership" value="3"/>
				<input name="leadership" type="radio" id="leadership" value="4"/>
				<input name="leadership" type="radio" id="leadership" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="empathy">Empathie</label>
				<input name="empathy" type="radio" id="empathy" value="1"/>
				<input name="empathy" type="radio" id="empathy" value="2"/>
				<input name="empathy" type="radio" id="empathy" value="3"/>
				<input name="empathy" type="radio" id="empathy" value="4"/>
				<input name="empathy" type="radio" id="empathy" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="dodge">Esquive</label>
				<input name="dodge" type="radio" id="dodge" value="1"/>
				<input name="dodge" type="radio" id="dodge" value="2"/>
				<input name="dodge" type="radio" id="dodge" value="3"/>
				<input name="dodge" type="radio" id="dodge" value="4"/>
				<input name="dodge" type="radio" id="dodge" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="streetwise">Expérience de la Rue</label>
				<input name="streetwise" type="radio" id="streetwise" value="1"/>
				<input name="streetwise" type="radio" id="streetwise" value="2"/>
				<input name="streetwise" type="radio" id="streetwise" value="3"/>
				<input name="streetwise" type="radio" id="streetwise" value="4"/>
				<input name="streetwise" type="radio" id="streetwise" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="expression">Expression</label>
				<input name="expression" type="radio" id="expression" value="1"/>
				<input name="expression" type="radio" id="expression" value="2"/>
				<input name="expression" type="radio" id="expression" value="3"/>
				<input name="expression" type="radio" id="expression" value="4"/>
				<input name="expression" type="radio" id="expression" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="intimidation">Intimidation</label>
				<input name="intimidation" type="radio" id="intimidation" value="1"/>
				<input name="intimidation" type="radio" id="intimidation" value="2"/>
				<input name="intimidation" type="radio" id="intimidation" value="3"/>
				<input name="intimidation" type="radio" id="intimidation" value="4"/>
				<input name="intimidation" type="radio" id="intimidation" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="subterfuge">Subterfuge</label>
				<input name="subterfuge" type="radio" id="subterfuge" value="1"/>
				<input name="subterfuge" type="radio" id="subterfuge" value="2"/>
				<input name="subterfuge" type="radio" id="subterfuge" value="3"/>
				<input name="subterfuge" type="radio" id="subterfuge" value="4"/>
				<input name="subterfuge" type="radio" id="subterfuge" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="alertness">Vigilance</label>
				<input name="alertness" type="radio" id="alertness" value="1"/>
				<input name="alertness" type="radio" id="alertness" value="2"/>
				<input name="alertness" type="radio" id="alertness" value="3"/>
				<input name="alertness" type="radio" id="alertness" value="4"/>
				<input name="alertness" type="radio" id="alertness" value="5"/>
			</div>
		</div>
	</div>
	<div class="radio-list-title">
		<h1 class="header">Compétences</h1>
		<div class="vg-field">
			<div class="radio-input">
				<label for="animal_ken">Animaux</label>
				<input name="animal_ken" type="radio" id="animal_ken" value="1"/>
				<input name="animal_ken" type="radio" id="animal_ken" value="2"/>
				<input name="animal_ken" type="radio" id="animal_ken" value="3"/>
				<input name="animal_ken" type="radio" id="animal_ken" value="4"/>
				<input name="animal_ken" type="radio" id="animal_ken" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="firearms">Armes à feu</label>
				<input name="firearms" type="radio" id="firearms" value="1"/>
				<input name="firearms" type="radio" id="firearms" value="2"/>
				<input name="firearms" type="radio" id="firearms" value="3"/>
				<input name="firearms" type="radio" id="firearms" value="4"/>
				<input name="firearms" type="radio" id="firearms" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="crafts">Artisanat</label>
				<input name="crafts" type="radio" id="crafts" value="1"/>
				<input name="crafts" type="radio" id="crafts" value="2"/>
				<input name="crafts" type="radio" id="crafts" value="3"/>
				<input name="crafts" type="radio" id="crafts" value="4"/>
				<input name="crafts" type="radio" id="crafts" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="drive">Conduite</label>
				<input name="drive" type="radio" id="drive" value="1"/>
				<input name="drive" type="radio" id="drive" value="2"/>
				<input name="drive" type="radio" id="drive" value="3"/>
				<input name="drive" type="radio" id="drive" value="4"/>
				<input name="drive" type="radio" id="drive" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="etiquette">Étiquette</label>
				<input name="etiquette" type="radio" id="etiquette" value="1"/>
				<input name="etiquette" type="radio" id="etiquette" value="2"/>
				<input name="etiquette" type="radio" id="etiquette" value="3"/>
				<input name="etiquette" type="radio" id="etiquette" value="4"/>
				<input name="etiquette" type="radio" id="etiquette" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="stealth">Furtivité</label>
				<input name="stealth" type="radio" id="stealth" value="1"/>
				<input name="stealth" type="radio" id="stealth" value="2"/>
				<input name="stealth" type="radio" id="stealth" value="3"/>
				<input name="stealth" type="radio" id="stealth" value="4"/>
				<input name="stealth" type="radio" id="stealth" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="melee">Mélée</label>
				<input name="melee" type="radio" id="melee" value="1"/>
				<input name="melee" type="radio" id="melee" value="2"/>
				<input name="melee" type="radio" id="melee" value="3"/>
				<input name="melee" type="radio" id="melee" value="4"/>
				<input name="melee" type="radio" id="melee" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="performance">Représentation</label>
				<input name="performance" type="radio" id="performance" value="1"/>
				<input name="performance" type="radio" id="performance" value="2"/>
				<input name="performance" type="radio" id="performance" value="3"/>
				<input name="performance" type="radio" id="performance" value="4"/>
				<input name="performance" type="radio" id="performance" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="security">Sécurité</label>
				<input name="security" type="radio" id="security" value="1"/>
				<input name="security" type="radio" id="security" value="2"/>
				<input name="security" type="radio" id="security" value="3"/>
				<input name="security" type="radio" id="security" value="4"/>
				<input name="security" type="radio" id="security" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="survival">Survie</label>
				<input name="survival" type="radio" id="survival" value="1"/>
				<input name="survival" type="radio" id="survival" value="2"/>
				<input name="survival" type="radio" id="survival" value="3"/>
				<input name="survival" type="radio" id="survival" value="4"/>
				<input name="survival" type="radio" id="survival" value="5"/>
			</div>
		</div>
	</div>
	<div class="radio-list-title">
		<h1 class="header">Connaissances</h1>
		<div class="vg-field">
			<div class="radio-input">
				<label for="academics">Érudition</label>
				<input name="academics" type="radio" id="academics" value="1"/>
				<input name="academics" type="radio" id="academics" value="2"/>
				<input name="academics" type="radio" id="academics" value="3"/>
				<input name="academics" type="radio" id="academics" value="4"/>
				<input name="academics" type="radio" id="academics" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="finance">Finance</label>
				<input name="finance" type="radio" id="finance" value="1"/>
				<input name="finance" type="radio" id="finance" value="2"/>
				<input name="finance" type="radio" id="finance" value="3"/>
				<input name="finance" type="radio" id="finance" value="4"/>
				<input name="finance" type="radio" id="finance" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="computer">Informatique</label>
				<input name="computer" type="radio" id="computer" value="1"/>
				<input name="computer" type="radio" id="computer" value="2"/>
				<input name="computer" type="radio" id="computer" value="3"/>
				<input name="computer" type="radio" id="computer" value="4"/>
				<input name="computer" type="radio" id="computer" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="investigation">Investigation</label>
				<input name="investigation" type="radio" id="investigation" value="1"/>
				<input name="investigation" type="radio" id="investigation" value="2"/>
				<input name="investigation" type="radio" id="investigation" value="3"/>
				<input name="investigation" type="radio" id="investigation" value="4"/>
				<input name="investigation" type="radio" id="investigation" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="law">Loi</label>
				<input name="law" type="radio" id="law" value="1"/>
				<input name="law" type="radio" id="law" value="2"/>
				<input name="law" type="radio" id="law" value="3"/>
				<input name="law" type="radio" id="law" value="4"/>
				<input name="law" type="radio" id="law" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="medicine">Médecine</label>
				<input name="medicine" type="radio" id="medicine" value="1"/>
				<input name="medicine" type="radio" id="medicine" value="2"/>
				<input name="medicine" type="radio" id="medicine" value="3"/>
				<input name="medicine" type="radio" id="medicine" value="4"/>
				<input name="medicine" type="radio" id="medicine" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="linguistics">Linguistique</label>
				<input name="linguistics" type="radio" id="linguistics" value="1"/>
				<input name="linguistics" type="radio" id="linguistics" value="2"/>
				<input name="linguistics" type="radio" id="linguistics" value="3"/>
				<input name="linguistics" type="radio" id="linguistics" value="4"/>
				<input name="linguistics" type="radio" id="linguistics" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="occult">Occultisme</label>
				<input name="occult" type="radio" id="occult" value="1"/>
				<input name="occult" type="radio" id="occult" value="2"/>
				<input name="occult" type="radio" id="occult" value="3"/>
				<input name="occult" type="radio" id="occult" value="4"/>
				<input name="occult" type="radio" id="occult" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="politics">Politique</label>
				<input name="politics" type="radio" id="politics" value="1"/>
				<input name="politics" type="radio" id="politics" value="2"/>
				<input name="politics" type="radio" id="politics" value="3"/>
				<input name="politics" type="radio" id="politics" value="4"/>
				<input name="politics" type="radio" id="politics" value="5"/>
			</div>
		</div>
		<div class="vg-field">
			<div class="radio-input">
				<label for="science">Science</label>
				<input name="science" type="radio" id="science" value="1"/>
				<input name="science" type="radio" id="science" value="2"/>
				<input name="science" type="radio" id="science" value="3"/>
				<input name="science" type="radio" id="science" value="4"/>
				<input name="science" type="radio" id="science" value="5"/>
			</div>
		</div>
	</div>
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