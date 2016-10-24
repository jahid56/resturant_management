<?php

$k=0;
$i=1;
$plus=explode(",", $ok['p']);
foreach ($plus as $key ) {
	$k=$key+$k;
}?>
@include('menubar')
</br>
</br>
</br>
</br>
</br>
</br>

<body style="background-color:#E6EFF2">
<script type="text/javascript" charset="utf-8" async defer>
var Totalprice=0;
var main=0;
var atfirst=0;
var array=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
function inita(Iprice){
    
	atfirst=Iprice;
	Totalprice=Totalprice+atfirst+main;

	document.getElementById("getprice").innerHTML = ""+Totalprice;
}

function multiply(count,price,id){

		array[id-1]=price*(count-1);
		Totalprice=0;
		for(var i=0;i<30;i++){

			 Totalprice=Totalprice+array[i];
		}	
		Totalprice=Totalprice+atfirst+main;
		
		document.getElementById("getprice").innerHTML = ""+Totalprice;

}	
function homedelivery(){
	main=30;
	Totalprice=main+Totalprice;
	document.getElementById("getprice").innerHTML = ""+Totalprice;
}
function del(){
	main=0;
	Totalprice=Totalprice-30;
	document.getElementById("getprice").innerHTML = ""+Totalprice;
}

</script>
<div  style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-10">
<ul style="font-size: 15px;" class="list-group">
<h3 >Total Price:<span id="getprice"></span>Tk</h3><br/>
<?php $u=1; $sum=0;?>
{!!  Form::open(array('url' => 'final'));!!}
{!! csrf_field() !!}
@foreach ($out as $out) 
@foreach ($out as $user) 
<?php $sum=$sum+$user->price;?>
<label >
<li class="list-group-item"><span >Name:</span> {!! $user->name; !!}</li>
<li class="list-group-item">  <span >Price:</span>    {!! $user->price; !!}</li> 
<li class="list-group-item">

How many? &nbsp&nbsp&nbsp&nbsp

<input type="number" name="no[{!! $user->id !!}]" min="1" max="30" required value="1" onkeyup="multiply(this.value,{!! $user->price; !!},{!! $u!!})" onclick="multiply(this.value,{!! $user->price; !!},{!! $u++ !!})"></li>
</label>



<input type="hidden" name="ids[<?=$i?>]" value="{!! $user->id !!}">
<input type="hidden" name="types[<?=$i?>]" value="{!! $user->type_id !!}">

<?php $i++;?>
	@endforeach
@endforeach
	<body onload="inita({!! $sum !!})">
 </ul>
 <div  class="col-md-8">
<!-- <h3 >Total Price:&nbsp{!! $k; !!} Tk</h3><br/> -->

 
 	
 	<label style="font-size: 16px;">Delivery type: </label>
   <label style="font-size: 16px;" class="radio">
	<input type="radio"  name="delivery" onchange="homedelivery()" value="home" >
	<b>Home delivery <small class="text-muted">(Extra 30 taka will be charged after receiving item)</small></b></label>
	<label style="font-size: 16px;" class="radio">
	<input type="radio"  name="delivery" onchange="del()" value="pickup" checked>
	<b>Pickup delivery</b></label>
	<br/><br/>
	
	<input type="hidden" name="ref" value="{!! $ok['r'] !!}">

	<fieldset class="form-group">
	<label for="address"> Name </label>
	<input type="text" class="form-control" name="name" required value="">
	<small class="text-muted">Please write your full name</small>
	</fieldset>
	<fieldset class="form-group">
	<label for="address"> Address </label>
	<input type="text" class="form-control" name="add" required value="">
	<small class="text-muted">Please make sure your address is ok (limited to rajshahi)</small>
	</fieldset>
	<fieldset class="form-group">
	<label for="mb"> Mobile number </label>
	<input type="text" class="form-control" name="mobile" required value="" >
	<small class="text-muted">You will be notify throgh this mobile once you paid and also before delivery</small>
 	</fieldset>
 	<label for="dt">Date and Time</label>
            <fieldset class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name='time' required class="form-control input-lg" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </fieldset> 
        
        <script type="text/javascript">
           $(function() {
    $('#datetimepicker1').datetimepicker({

    });
  });
        </script>
	<input type="submit" class="btn btn-success" value="Proceed to payment" />
 	{!!  Form::close(); !!}
<!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<br/><br/><br/><br/>
<b style="font-size:18px;">Payment method description is in next page</b>
 </div>
</div>
 </div>
 </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</div>
<ul>
	<li></li>
</ul>

</body>