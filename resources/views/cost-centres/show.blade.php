@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Cost Centre</h1>
	</div>


    <a class="btn btn-default new-button grey-back" onclick="getConfirmation();" >Delete Cost Centre</a>
    <a class="btn btn-default new-button grey-back" href="/cost-centres/edit">Edit Cost Centre</a>

@endsection