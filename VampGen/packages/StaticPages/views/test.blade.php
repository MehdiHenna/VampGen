@extends(config('pages.pages_template'))
@section('content')
<div class="segment attached top center-aligned">
	<h3 class="header inverted">Title</h3>
</div>
<div class="segment">
	<h3>Quelle capacité est la plus <em class="value-talent">forte</em> ?</h3>
	<label>Talent</label>
	<input type="radio" class="talent" value="talent" name="capacite">
	<label>Connaissance</label>
	<input type="radio" class="talent" value="connaissance" name="capacite">
	<label>Compétences</label>
	<input type="radio" class="talent" value="competence" name="capacite">
</div>
@endsection