@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Patient Bill</h1>
	</div>

    <a class="btn btn-default new-button grey-back" onclick="getConfirmation();" >Delete Bill</a>
    <a class="btn btn-default new-button grey-back" href="/patient-bills/edit">Edit Bill</a>

@endsection