@include('adminheader')
 <div class="row">
 <div class="container" >
  <div class="col-lg-6">
  <br/>
  <br/>
  @if(Session::has('status'))
<b><span style="font-size:22px;"><div class="alert alert-success" role="alert" >{{ Session::get('status') }}</div></span></b>
@endif
{!!  Form::open(array('url' => 'typeadd' ,'class'=>"form-horizontal"));!!}
	  {!! csrf_field() !!}
<p style="font-size:20px;">Type:</p> 	  
<input type="text" class="form-control" name="type"><br/>
<button type="submit" class="btn btn-primary">Submit</button>
 {!!  Form::close(); !!}


<b><ul class="list-group">

@foreach($types as $type)
	<li class="list-group-item" value="{{$type->id}}"> {{$type->name}}</li>
@endforeach
</ul></b>
 </div>
</div>
</div>



