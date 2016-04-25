@extends(config('pages.pages_template'))
@section('content')

<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Choisissez votre clan et votre secte</h2 class="header">
	</div>
</div>
<div class="container center-aligned segment">
	<form action="" method="post" class="vg-form">
		<div class="column">
			<div class="vg-field">
				<p class="radio-list-title">Clans</p>
				<div class="radio-input">
					<input name="clan" type="radio" id="brujah" checked="checked" value="">
					<label for="brujah">Brujah</label>
				</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="assamite" value="assamite">
						<label for="assamite">Assamite</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="tremere" value="tremere">
						<label for="tremere">Tremere</label>
					</div>
				<div class="radio-input">	   			
						<input name="clan" type="radio" id="lasombra" value="lasombra">
						<label for="lasombra">Lasombra</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="followers_of_set" value="followers_of_set">
						<label for="followers_of_set">Disciple de Seth</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="malkavian" value="malkavian">
						<label for="malkavian">Malkavien</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="ventrue" value="ventrue">
						<label for="ventrue">Ventrue</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="toreador" value="toreador">
						<label for="toreador">Toreador</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="tzimisce" value="tzimisce">
						<label for="tzimisce">Tzimisce</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="nosferatu" value="nosferatu">
						<label for="nosferatu">Nosferatu</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="giovanni" value="giovanni">
						<label for="giovanni">Giovanni</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="gangrel" value="gangrel">
						<label for="gangrel">Gangrel</label>
					</div>
				<div class="radio-input">
						<input name="clan" type="radio" id="ravnos" value="ravnos">
						<label for="ravnos">Ravnos</label>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="vg-field">
				<p class="radio-list-title">Secte</p>
				<div class="radio-input">
					<input name="sect" type="radio" id="camarilla" checked="checked" value="camarilla">
					<label for="camarilla">Camarilla</label>
				</div>
				<div class="radio-input">
					<input name="sect" type="radio" id="sabbat" value="sabbat">
					<label for="sabbat">Sabbat</label>
				</div>
				<div class="radio-input">
					<input name="sect" type="radio" id="independant" value="independant">
					<label for="independant">Independants</label>
				</div>
			</div>
		</div>
		<button class="vg-button">Précédent</button><button class="vg-button">Suivant</button>
	</form>
</div>
@endsection