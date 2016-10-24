<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Restaurant.com</title>
    <!--  <script src="http://maps.googleapis.com/maps/api/js"></script> -->
     </head>       
    <script>
    var myCenter=new google.maps.LatLng(24.37114,88.640467);

    function initialize()
    {
    var mapProp = {
      center:myCenter,
      zoom:15,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker=new google.maps.Marker({
      position:myCenter,
      });
    marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@include('menubar')
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active" >
      <img src="14.jpg" alt="Chania" style="height: 700px; width: 1800px;">
    </div>

    <div class="item">
      <img src="8.jpg" alt="Chania" style="height: 700px; width: 1800px;">
    </div>

    <div class="item">
      <img src="9.jpg" alt="Flower" style="height: 700px; width: 1800px;">
    </div>

    <div class="item">
      <img src="11.jpg" alt="Flower" style="height: 700px; width: 1800px;">
    </div>
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
  
<br/>
<br/>



<div style="font-size: 20px; font-style: bold" class="container">
    <div class="row">
        <div class="col-sm-6">
                         <div class="panel panel-success">
                            <div class="panel-heading">
                              <h2 class="panel-title">Hours</h2>
                            </div>
                            <div class="panel-body">
         
                  <table class="table">
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>9:00 AM – 10:00 PM</td>
      </tr>
    </table>
     </div>
    </div>
   </div>
        <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-12">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                              <h3 class="panel-title">Location</h3>
                            </div>
                            <div class="panel-body">
                             <div id="googleMap" style="width:400px;height:280px;"></div>
                            </div>
                          </div>
                        </div>  
                
                </div>  
        </div>          
    </div>      
</div>
