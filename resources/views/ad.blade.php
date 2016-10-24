@include('menubar')
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<body style="background-color:#E6EFF2">
	

<div  style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-4">

	 {!!  Form::open(array('url' => 'new'));!!}
	  {!! csrf_field() !!}
	<label><p style="color:red"> {{$errors->first('need')}}</p></label>
	<label><p style="color:red"> {{ $errors->first('username')}}</p></label>
	<fieldset class="form-group">
	<label for="username"> Username </label>
	<input type="text" class="form-control" name="username"  value="{{ old('username') }}">
	</fieldset>
	<label><p style="color:red"> {{ $errors->first('password') }}</p></label>
	<fieldset class="form-group">
	<label for="address"> Password </label>
	<input type="password" class="form-control" name="password" value="">
	
	</fieldset>
	<button type="submit" class="btn btn-primary">Login</button>
	   {!!  Form::close(); !!}
</div>
</div>
</div>
</div>
</body>