@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Choisissez la répartition de vos points d'attributs</h2 class="header">
		</div>
	</div>
	<div class="segment row">
		<form action="" method="post" class="vg-form">
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
				<button type="submit" class="vg-button">Précédent</button>
				<button type="submit" class="vg-button">Suivant</button>
			</div>
		</form>
	</div>
@endsection