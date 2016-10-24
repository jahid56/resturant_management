<!DOCTYPE html>
<html>

	<meta charset="utf-8">
		<title>Restaurant.com</title>
		   @include('menubar')

</br>
</br>
</br>
</br>
<body style="background-color:#E6EFF2">
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
  <script type="text/javascript">

    var foodcart = [];
   
    function displayfoodcart(){
        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
        
        while(orderedProductsTblBody.rows.length>0) {
            orderedProductsTblBody.deleteRow(0);
        }
       var cart_total_price=0;

       
        for(var product in foodcart){
               
            var row=orderedProductsTblBody.insertRow();
             
            //var cellno=row.insertCell(0) 
            var cellName = row.insertCell(0);
            var celltype = row.insertCell(1);
            var cellPrice = row.insertCell(2);
            var remove=row.insertCell(3);
            
            cellPrice.align="right";
            
            
            cellName.innerHTML = foodcart[product].Name;
            celltype.innerHTML = foodcart[product].type;
            cellPrice.innerHTML = foodcart[product].Price;
            remove.innerHTML=remove.innerHTML+"<input type='button' class='btn btn-danger' value='Remove' onclick='removefromcart()' />"
            cart_total_price+=foodcart[product].Price;
            

        }
       
        document.getElementById("cart_total").innerHTML="Total Price:   "+cart_total_price;
    }

    function AddtoCart(id,name,type,price){
      
       var singleProduct = {};
       
       document.getElementById(id).disabled = true;
       singleProduct.Id=id;
       singleProduct.Name=name;
       singleProduct.type=type;
       singleProduct.Price=price;
       
       foodcart.push(singleProduct);
       
       displayfoodcart();
    }  
    function removefromcart(id,name,type,price){

        var pro={};

        pro.Id=id;
        pro.Name=name;
        pro.type=type;
        pro.price=price;

        foodcart.pop(pro);

        displayfoodcart();
    }

    function passData() {

    var id="";
    var name = "";
    var type = "";
    var price = "";

    for(var product in foodcart){
        id += foodcart[product].Id+",";
        name += foodcart[product].Name + ",";
        type += foodcart[product].type + ",";
        price += foodcart[product].Price + ",";    
    }
    document.getElementById("hidId").value = id;
    document.getElementById("hidName").value = name;
    document.getElementById("hidType").value = type;
    document.getElementById("hidPrice").value = price;
    }

    //Add some products to our shopping cart via code or you can create a button with onclick event
    //AddtoCart("Table","Big red table",50);
    //AddtoCart("Door","Big yellow door",150);
    //AddtoCart("Car","Ferrari S23",150000);


</script>
<div class="container-fluid">
<div class="row">
  <div class="container" >
  <div class="col-md-6">
<b style="color:red;">{{ $errors->first('hidId') }} </b><br/> <br/>

 <form>
 <b><select class="form-control input-md"  name="users" onchange="showUser(this.value)">
 <option value="">Select A type of food</option>
  @foreach ($lists as $list)
  <option value="{{$list->id}}">{{$list->name}}</option>
  @endforeach
   </select></b>
</form>
<br>

<div id="txtHint"><b>Food will be listed here...</b></div>
</div>

<div class="col-md-6">
 <b><span style="color:green">Multiple of same food have option in next page</span></b>
 <br/><br/>
<table style='font-weight: bold; font-size: 16px; background-color: #EDF1F2;' class="table table-bordered" class="table table-condensed" id="orderedProductsTbl">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Type
                        </td>
                        <td>
                            Price
                            
                        </td>

                    </tr>

                </thead>
                <tbody id="orderedProductsTblBody">

                </tbody>

                <tfoot>
                    <tr>
                      {!!  Form::open(array('url' => 'buying'));!!}
                       <td colspan="3" align="right" value="Total Price" id="cart_total">

                        </td>

                    </tr>

                </tfoot>
            </table>

            <input type="hidden" id="hidId" name="hidId" value="">
            <input type="hidden" id="hidName" name="hidName" value="">
            <input type="hidden" id="hidType" name="hidType" value="">
            <input type="hidden" id="hidPrice" name="hidPrice" value="">
            <input type="submit" class="btn btn-success" onclick="passData()" style=" float:right" value="Buy" />
             {!!  Form::close(); !!}
            
</div>
</div>
</div>
</div>

