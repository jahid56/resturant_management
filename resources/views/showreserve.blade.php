  @include('adminheader')
<table class="table table-bordered">
	<b><div class="well">List of reservation</div></b>
	<thead>
		<tr>
			
			
			<th>Name</th>
			<th>E-mail</th>
			<th>Moblie</th>
			<th>Total person</th>
			<th>Reference id</th>
			<th>Time</th>
				
		</tr>
	</thead>
	
	<tbody>
	
@foreach($get as $show)
<tr>
	<td>{{$show->name}}</td>
	<td>{{$show->email}}</td>
	<td>{{$show->mobile}}</td>
	<td>{{$show->size}}</td>
	<td>{{$show->ref}}</td>
	<td>{{$show->when}}</td>
</tr>
@endforeach
