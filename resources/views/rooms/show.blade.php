@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Room</h1>
	</div>

    <a class="btn btn-default new-button grey-back" onclick="getConfirmation();" >Delete Room</a>
    <a class="btn btn-default new-button grey-back" href="/rooms/edit">Edit Room</a>

@endsection