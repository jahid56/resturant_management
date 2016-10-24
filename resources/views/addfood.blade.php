  @include('adminheader')
 <div class="row">
 <div class="container" >
  <div class="col-lg-6">
    <br/>
{!!  Form::open(array('url' => 'foodadd','class'=>"form-horizontal"));!!}
	  {!! csrf_field() !!}
<div class="form-group">
<select class="form-control input-lg" name="type">
@foreach($types as $type)
	<option value="{{$type->id}}"> {{$type->name}}</option>
@endforeach
</select><br/><br/>
 Name:<input class="form-control input-lg" type="text" class="form-control" required name="name" value="" placeholder=""><br/><br/>
 Price:<input class="form-control input-lg" type="text" class="form-control" required name="price" value="" placeholder=""><br/><br/>
<button type="submit" class="btn btn-primary">Submit</button>
  </div>
  {!!  Form::close(); !!}
</div>
 </div>
 </div>
