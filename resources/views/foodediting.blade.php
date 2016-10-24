@include('adminheader')
<div class="col-lg-6"> 
 {!!  Form::open(array('url' => 'foodedit','class'=>"form-horizontal"));!!}
 {!! csrf_field() !!}
<br/><br/>
@foreach($food as $foods)
<select name="type" class="form-control input-lg" >
@foreach($list as $lists)
	<option value="{{$lists->id}}">{{$lists->name}}</option>
@endforeach
</select><br/><br/>
<input type="hidden" name="id" class="form-control input-lg" value="{{$foods->id}}">
<input type="text" name="fname" class="form-control input-lg" value="{{$foods->name}}"><br/><br/>
<input type="text" name="fprice" class="form-control input-lg" value="{{$foods->price}}" ><br/><br/>
<button type="submit" class="btn btn-primary">Update</button>
@endforeach
{!!  Form::close(); !!}
</div>