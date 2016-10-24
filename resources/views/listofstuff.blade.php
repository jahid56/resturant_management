  @include('adminheader')

<table class="table table-bordered">
	<b><div class="well">List of stuff</div></b>
	<thead>
		<tr>
			
			<th>Name</th>
			<th>Duty</th>
			<th>Moblie</th>
		
		</tr>
	</thead>
	
	<tbody>
@foreach($all as $key)
<tr>
<td>{{$key->name}}</td>
<td>{{$key->type}}</td>
<td>{{$key->mobile}}</td>
</tr>
@endforeach
</tbody>
</table>