  @include('adminheader')
 <div class="col-md-6">
 <table class="table">
 <thead>
		<tr>
			<th>Name</th>
			<th>time</th>
		</tr>
	</thead>
@foreach($get as $show)
<tr><td>{{$show->name}}</td>
<td>{{$show->c_time}}</td>
<td><a href="rece/{{$show->id}}">Details</a></td></tr>
@endforeach	
</table>