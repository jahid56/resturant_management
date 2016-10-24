@include('adminheader')
<table style="font-size:20px;" class="table">
@foreach($get as $data)

<tr><td colspan="" rowspan="" headers="">Name:&nbsp&nbsp&nbsp{{$data->name}}</td></tr>

<tr><td colspan="" rowspan="" headers="">Email:&nbsp&nbsp&nbsp{{$data->email}}</td></tr>

<tr><td colspan="" rowspan="" headers="">Phone:&nbsp&nbsp&nbsp{{$data->phone}}</td></tr>

<tr><td colspan="" rowspan="" headers="">Message:<br/><br/>{{$data->message}}</td></tr>

	
		

@endforeach
</table>
{!!  Form::open(array('url' => 'ok','class'=>"form-horizontal"));!!}
<input type="hidden" name="id" value="{{$data->id}}">
<input type="checkbox" name="status" value="1">Problem solved<br>
<input type="submit" name="" value="Submit">
{!!  Form::close(); !!}