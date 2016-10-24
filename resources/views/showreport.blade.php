
  @include('adminheader')
<table class="table table-bordered">
	<b><div class="well">List of report of past order (sorter by time)</div></b>
	<thead>
		<tr>
			<th>Reference id</th>
			<th>Bill</th>
			<th>Name</th>
			<th>Address</th>
			<th>Moblie</th>
			<th>Delivery type</th>
			<th>Which food</th>
			<th colspan="" rowspan="" headers="" scope="">Delivery time</th>
			
		</tr>
	</thead>
	
	<tbody>
@foreach($all as $key)
<tr><td>{{$f=$key->ref_id}}</td>
<td>{{$key->bill}}</td>
<td>{{$key->name}}</td>
<td>{{$key->address}}</td>
<td>{{$key->mobile}}</td>
<td>{{$key->d_type}}</td>


<?php $get=DB::select("select * from orderedfood where ref_id='$f'"); ?>
<td>
@foreach ($get as $next)

<?php $n=$next->food_id;
$pain=DB::select("select * from foods where id='$n'");
 ?>
@foreach ($pain as $another)
{{$another->name}} 
@endforeach

&nbsp&nbsp How many:- {{$next->how_many}}<br/>
@endforeach</td>
<td>{{$key->d_time}}</td>
</tr>
@endforeach
</tbody>
</table>