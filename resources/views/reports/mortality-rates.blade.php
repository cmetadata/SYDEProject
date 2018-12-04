@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table width="100%">
	<tr>
		<td align="center">
			<h1 class="title"><b>Mortality Rates</b></h1>
		</td>
	</tr>
</table>

<table>
	<br>

	<tr>
		<td width="5%" align="left">First Name</td>
		<td width="15%" align="left">Last Name</td>
		<td width="15%" align="left">Age</td>	
		<td width="15%" align="left">Gender</td>
		<td width="30%" align="left">Cause Of Death</td>
	</tr> 

	<br>
	<hr>

	<tr>
		<td width="15%" align="left">Rose</td>
		<td width="15%" align="left">Melange</td>
		<td width="15%" align="left">34</td>	
		<td width="30%" align="left">Complications from surgery</td>
	</tr>

	<br>

	<tr>
		<td width="15%" align="left">James</td>
		<td width="15%" align="left">Thompson</td>
		<td width="15%" align="left">52</td>	
		<td width="30%" align="left">Flu</td>
	</tr>

	<br>

	<tr>
		<td width="15%" align="left">Alex</td>
		<td width="15%" align="left">Mooney</td>
		<td width="15%" align="left">20</td>	
		<td width="30%" align="left">Infection</td>
	</tr>

	<br>

	<tr>
		<td width="70%" align="left">Total Deaths</td>
		<td width="30%" align="right">3</td>
	</tr>

</table>
@endsection