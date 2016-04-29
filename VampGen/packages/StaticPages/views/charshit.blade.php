@extends(config('pages.pages_template'))
@section('content')
<div class="center-aligned ">
	<div class="segment attached top">
		<h2 class="header inverted">Fiche personnage</h2 class="header">
	</div>
</div>
<div class="center-aligned">
		<div class="segment">
			<div class="column">
				<div class="vg-field">
					<div>Nom: {{Session::get("name")}}</div>
					<div>Joueur: {{Session::get("name")}}</div>
					<div>Chronique: {{Session::get("name")}}</div>
				</div>
				<div class="vg-field">
					<div>Nature: {{Session::get("name")}}</div>
					<div>Attitude: {{Session::get("name")}}</div>
					<div>Concept: {{Session::get("name")}}</div>
				</div>
				<div class="vg-field">
					<div>Clan: {{Session::get("name")}}</div>
					<div>Generation: {{Session::get("name")}}</div>
					<div>Sire: {{Session::get("name")}}</div>
				</div>
			</div>
			<hr>
			<div class="column">
				<div class="vg-field">Coucou</div>
				<div class="vg-field">Coucou</div>
				<div class="vg-field">Coucou</div>
			</div>
			<hr>
			<div class="column">
				<div class="vg-field">Coucou</div>
				<div class="vg-field">Coucou</div>
				<div class="vg-field">Coucou</div>
			</div>
		</div>
	</div>
</div>
@endsection