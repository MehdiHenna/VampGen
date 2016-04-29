@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Choississez vos points</h2 class="header">
	</div>
</div>
<form action="" method="post" class="vg-form">
	<div class="segment">
		<div class="column">
			<div class="vg-field">Conscience/Conviction :</div>
			<div class="vg-field">Maitrise de soi/Instinct :</div>
			<div class="vg-field">Courage :</div>
		</div>
		<hr>
		<div class="column">
			<div class="vg-field">Volonté :</div>
			<div class="vg-field">Humanité :</div>
		</div>
		<hr>
		<div class="column">
			<div class="vg-field">Réserve de sang :</div>
		</div>
		<div class="center-aligned">
			<button type="submit" class="vg-button">Précédent</button>
			<button type="submit" class="vg-button">Suivant</button>
		</div>
	</div>
</form>
@endsection