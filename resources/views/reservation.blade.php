<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Restaurant.com</title>
    <head>
  </head>
	  @include('menubar')
		</br>
</br>
</br>
</br>
</br>
</br>

<div style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-5">

     @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <b><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
 
  {!!  Form::open(array('url' => 'booking','class'=>"form-horizontal"));!!}
  
  <fieldset class="form-group">
    <label for="name">Name&nbsp&nbsp&nbsp<p style="color:red;">{{ $errors->first('name') }}</p></label>
    <input type="text" name="name" class="form-control input-lg" value="{{ old('name') }}" placeholder="Your full name">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="Email">Email address&nbsp&nbsp&nbsp<p style="color:red;">{{ $errors->first('email') }}</p></label>
    <input type="email" name="email" class="form-control input-lg"  placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
   <fieldset class="form-group">
    <label for="party">Party size&nbsp&nbsp&nbsp<p style="color:red;">{{ $errors->first('party') }}</p></label>
    <input type="number" name="party" min="2" max="50" class="form-control input-lg"  placeholder="Total person">
    <small class="text-muted">Once you select can't be changed</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="mobile">Mobile Number&nbsp&nbsp&nbsp<p style="color:red;">{{ $errors->first('mobile') }}</p></label>
    <input type="text" name="mobile" class="form-control input-lg"  placeholder="Your personal number">
    </fieldset>


    <fieldset class="form-group">
    <label for="dt">Date and Time&nbsp&nbsp&nbsp<p style="color:red;">{{ $errors->first('time') }}</p></label>
            
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="time" class="form-control input-lg" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </fieldset> 
        
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
 

  <button type="submit" class="btn btn-primary">Submit</button>
     
                {!!  Form::close(); !!}

</div>
</div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
