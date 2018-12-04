@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Item</h1>
	</div>

    <a class="btn btn-default new-button grey-back" onclick="getConfirmation();" >Delete Item</a>
    <a class="btn btn-default new-button grey-back" href="/items/edit">Edit Item</a>

@endsection