@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table width="100%">
	<tr>
		<td align="center">
			<h1 class="title"><b>Patient Bill</b></h1>
		</td>
	</tr>
	<tr>
		<td align="center">
			<h3 class="title2">Mary Baker</h3>
		</td>
	</tr>
</table>

<table width="100%">
	<tr>
		<td align="center">Patient NO: 12345</td>
    </tr>
	<tr>
		<td align="center">Patient Address: 300 Oak St. Mounrtain View BC V1V 1V1</td>
    </tr>
</table>

<br>

<table>
	<tr>
		<td width="100%" align="right">
			<h4 class="title3">For Professional Services To:</h4>
		</td>
	</tr>
</table>

<hr/>

<table>

	<tr>
		<td width="10%"><b>Cost Center</b></td>
		<td width="10%"><b>Name</b></td>
		<td width="10%"><b>Date Charged</b></td>
		<td width="10%"><b>Item-Code</b></td>
		<td width="10%"><b>Description</b></td>
		<td width="10%"><b>Charge</b></td>
		<td width="10%"><b>Balance Due</b></td>
		
	</tr>

	<tr><td colspan="15"><hr/></td></tr>

	<tr>
		<td width="10%">100</td>
		<td width="10%">Room & Board</td>
		<td width="10%">10/10/2014</td>
		<td width="10%">2000</td>
		<td width="10%">Semi-Private Room</td>
		<td width="10%">200.00</td>
		<td width="10%"></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="10%"></td>
		<td width="10%">10/10/2014</td>
		<td width="10%">2005</td>
		<td width="10%">Television</td>
		<td width="10%">5.00</td>
		<td width="10%"></td>
	</tr>
	<tr>
		<td width="10%" colspan="5">Subtotal</td>
		<td width="10%" colspan="2">$205.00</td>
	</tr>
</table>

@endsection
