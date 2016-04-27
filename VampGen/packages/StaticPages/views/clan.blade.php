@extends(config('pages.pages_template'))
@section('content')

<div class="">
	<div class="segment attached top">
		<h2 class="header inverted">Choisissez votre clan et votre secte</h2 class="header">
		</div>
	</div>

</div>
<div class="container center-aligned segment">
	<form method="post" class="vg-form">
		<div class="segment">
		{{csrf_field()}}
		<input type="hidden" name="page" value="clan">
		<input type="hidden" name="name" value="{{old('name')}}" />
		<input type="hidden" name="chronicle" value="{{old('chronicle')}}" />
		<input type="hidden" name="nature" value="{{old('nature')}}" />
		<input type="hidden" name="demeanor" value="{{old('demeanor')}}" />
		<input type="hidden" name="concept" value="{{old('concept')}}" />
		<input type="hidden" name="sire" value="{{old('sire')}}" />
				<div class="column">
					<div class="vg-field">
						<p class="radio-list-title">Clans</p>
						<div class="radio-input">
							<input name="clan" type="radio" id="brujah" checked="checked" value="Brujah">
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

			</div>
			<div class="center-aligned">
				<button type="submit" formaction="/character" formmethod="get" class="vg-button">Précédent</button>
				<button type="submit" formaction="/disciplines" class="vg-button">Suivant</button>
			</div>
		</form>
	</div>
	@endsection
	