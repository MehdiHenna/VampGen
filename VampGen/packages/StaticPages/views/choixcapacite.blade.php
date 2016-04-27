@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Choisissez la répartition de vos points de capacités</h2 class="header">
		</div>
	</div>
	<div class="container center-aligned segment">
		<form action="/choixcapacite" method="post" class="vg-form">
		{{csrf_field()}}
{{-- 		<input type="hidden" name="page" value="clan" />
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
			<input type="hidden" name="sire" value="{{$old->sire}}" /> --}}
			<p class="info-etape">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, itaque, eius. Expedita sint est asperiores, perferendis doloribus placeat provident velit dicta cum iusto vero culpa, sed accusamus corrupti. Pariatur, voluptate?</p>
			<div class="vg-field">
				<label for="talents">Talents</label>
				<select class="select-field">
					<option name="talents" value="fort">Fort</option>
					<option name="talents" value="moyen">Moyen</option>
					<option name="talents" value="faible">Faible</option>
				</select>
			</div>
			<div class="vg-field">
				<label for="skills">Compétences</label>
				<select class="select-field">
					<option name="skills" value="fort">Fort</option>
					<option name="skills" value="moyen">Moyen</option>
					<option name="skills" value="faible">Faible</option>
				</select>
			</div>
			<div class="vg-field">
				<label for="knowledges">Connaissances</label>
				<select class="select-field">
					<option name="knowledges" value="fort">Fort</option>
					<option name="knowledges" value="moyen">Moyen</option>
					<option name="knowledges" value="faible">Faible</option>
				</select>
			</div>
			<div class="center-aligned">

				<button type="submit" formaction="/clan" class="vg-button">Précédent</button>
				<button type="submit" formaction="/choice-capacities" class="vg-button">Suivant</button>

			</div>
		</form>
	</div>
@endsection