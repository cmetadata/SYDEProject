@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table>
	<tr>
		<td width="100%" align="center">
			<h1 class="title">Patient Bill Report</h1>
		</td>
	</tr>

	<tr>
		<td width="10%" align="left">Cost Center</td>
		<td width="20%" align="left">Customers Serviced</td>
		<td width="20%" align="left">Total Amount Earned</td>

	</tr> 

	<tr width="50%">
		<td width="10%" align="center">Rooms</td>
    	<td width="20%" align="center">5</td>
    	<td width="10%" align="center">450.00$</td>
    </tr>
	<tr width="50%">		
		<td width="10%" align="center">Laboratory</td>
    	<td width="20%" align="center">4</td>
    	<td width="10%" align="center">1,000.00$</td>
    </tr>
    <tr width="50%">		
		<td width="10%" align="center">Radiology</td>
    	<td width="20%" align="center">2</td>
    	<td width="10%" align="center">2,000.00$</td>
    </tr>
</table>

@endsection