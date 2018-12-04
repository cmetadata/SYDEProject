@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table width="100%">
	<tr>
		<td align="center">
			<h1 class="title"><b>Patient Bill Report</b></h1>
		</td>
	</tr>
</table>

<br/>

<table width="100%">
	<tr>
		<td align="center">
			<h3 class="title2">Mary Baker</h3>
		</td>
	</tr>
</table>

<table width="100%">
	<tr>
		<td align="center"><b>Patient NO:</b> 12345</td>
    </tr>
	<tr>
		<td align="center"><b>Patient Address:</b> 300 Oak St. Mounrtain View BC V1V 1V1</td>
    </tr>
    <tr>
		<td align="center"><b>Date:</b>10/07/2014</td>
    </tr>
    <tr>
		<td align="center"><b>Date Admitted:</b>10/04/2014</td>
    </tr>
    <tr>
		<td align="center"><b>Discharge Date:</b>10/06/2014</td>
    </tr>
</table>

<br>

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
		<td width="10%">10/04/2014</td>
		<td width="10%">2000</td>
		<td width="10%">Semi-Private Room</td>
		<td width="10%">200.00</td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="10%"></td>
		<td width="10%">10/04/2014</td>
		<td width="10%">2005</td>
		<td width="10%">Television</td>
		<td width="10%">5.00</td>
		<td width="10%"></td>
	</tr>
	<tr>
		<td width="10%" colspan="5" align="right"><b>Subtotal</b></td>
		<td width="10%" colspan="2" align="right">205.00</td>
	</tr>
	<tr>
		<td width="10%">110</td>
		<td width="10%">Laboratory</td>
		<td width="10%">10/04/2014</td>
		<td width="10%">1580</td>
		<td width="10%">Glucose</td>
		<td width="10%">25.00</td>
		<td width="5%"></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="10%"></td>
		<td width="10%">10/05/2014</td>
		<td width="10%">1585</td>
		<td width="10%">Culture</td>
		<td width="10%">20.00</td>
		<td width="10%"></td>
	</tr>
	<tr>
		<td width="10%" colspan="5" align="right"><b>Subtotal</b></td>
		<td width="10%" colspan="2" align="right">45.00</td>
	</tr>
</table>

@endsection
