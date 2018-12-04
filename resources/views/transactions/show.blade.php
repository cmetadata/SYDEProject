@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Transaction</h1>
	</div>

    <a class="btn btn-default new-button grey-back" onclick="getConfirmation();" >Delete Transaction</a>
    <a class="btn btn-default new-button grey-back" href="/rooms/edit">Edit Transaction</a>

@endsection