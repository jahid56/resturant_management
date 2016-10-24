@include('adminheader')
<br/>
<a class="btn btn-primary" href="addfood">Add new food</a>
<a class="btn btn-primary" href="addtype">Add new Type</a>
  <br/>  <br/>
@foreach ($tql as $type)
<?php
$u[$type->id]=$type->name;
?>
@endforeach
@if(Session::has('status'))
<b><span style="font-size:22px;"><div class="alert alert-success" role="alert" >{{ Session::get('status') }}</div></span></b>
@endif
<table class="table table-bordered">

	<thead>
		<tr>
			<th>name</th>
			<th>type</th>
			<th>price</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($sql as $list)
		<tr>
			<td>{{$list->name}}</td>
			<td><?php echo $u[$list->type_id]; ?></td>
			<td>{{$list->price}}</td>
			
			<td><a href="editfood/{{$list->id}}">Edit</a></td>
			<td><a href="deletefood/{{$list->id}}">Delete</a></td>
		</tr>
	@endforeach
	</tbody>

</table>



</div>
</div>
</div>
</div>

