@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Choisissez la répartition de vos points d'attributs</h2 class="header">
		</div>
	</div>
	<div class="segment row">
		<form method="post" class="vg-form">
			{{csrf_field()}}
			<input type="hidden" name="page" value="choixattribut">
			<input type="hidden" name="page" value="{{$old->celerity}}" />
			<input type="hidden" name="page" value="{{$old->occultation}}" />
			<input type="hidden" name="page" value="{{$old->quietus}}" />
			<input type="hidden" name="sect" value="{{$old->sect}}" />
			<input type="hidden" name="clan" value="{{$old->clan}}" />
			<input type="hidden" name="name" value="{{$old->name}}" />
			<input type="hidden" name="chronicle" value="{{$old->chronicle}}" />
			<input type="hidden" name="nature" value="{{$old->nature}}" />
			<input type="hidden" name="demeanor" value="{{$old->demeanor}}" />
			<input type="hidden" name="concept" value="{{$old->concept}}" />
			<input type="hidden" name="sire" value="{{$old->sire}}" />
			<p class="info-etape">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, itaque, eius. Expedita sint est asperiores, perferendis doloribus placeat provident velit dicta cum iusto vero culpa, sed accusamus corrupti. Pariatur, voluptate?</p>
			<div class="vg-field">
				<label for="physical">Physique</label>
				<select class="select-field">
					<option value="fort">Fort</option>
					<option value="moyen">Moyen</option>
					<option value="faible">Faible</option>
				</select>
			</div>
			<div class="vg-field">
				<label for="social">Social</label>
				<select class="select-field">
					<option value="fort">Fort</option>
					<option value="moyen">Moyen</option>
					<option value="faible">Faible</option>
				</select>
			</div>
			<div class="vg-field">
				<label for="mental">Mental</label>
				<select class="select-field">
					<option value="fort">Fort</option>
					<option value="moyen">Moyen</option>
					<option value="faible">Faible</option>
				</select>
			</div>
			<div class="center-aligned">
				<button type="submit" formaction="/" class="vg-button">Précédent</button>
				<button type="submit" formaction="/attributes" class="vg-button">Suivant</button>
			</div>
		</form>
	</div>
	@endsection