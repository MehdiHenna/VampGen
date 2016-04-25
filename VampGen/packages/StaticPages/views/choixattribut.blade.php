@extends(config('pages.pages_template'))
@section('content')
<form action="" method="post" class="vg-form">
	<div class="vg-field">
		<label for="nom">Physique</label>
		<select>
			<option>Fort</option>
			<option>Moyen</option>
			<option>Faible</option>
		</select>
	</div>
	<div class="vg-field">
		<label for="nom">Social</label>
		<select>
			<option>Fort</option>
			<option>Moyen</option>
			<option>Faible</option>
		</select>
	</div>
		<div class="vg-field">
		<label for="nom">Mental</label>
		<select>
			<option>Fort</option>
			<option>Moyen</option>
			<option>Faible</option>
		</select>
	</div>
</form>
@endsection