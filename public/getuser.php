<?php 
$q = intval($_GET['q']);
$conn = mysqli_connect('localhost','root','','resdata');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql= mysqli_query($conn,"SELECT name FROM foodtypes WHERE id = $q");
$result = mysqli_query($conn,"SELECT * FROM foods WHERE type_id = $q");
$type = mysqli_fetch_array($sql);
$t=$type['name'];
?>
<form action="buying" method="POST" accept-charset="utf-8">
<b>
<table style='font-size: 16px; background-color: #EDF1F2;'  class='table table-bordered'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
	$id=$row['id'];
	$name=$row['name'];
	$price=$row['price'];
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
       ?>     
<td><input id='<?=$id?>'type="button" class="btn btn-primary" value="Add to cart"  onclick="AddtoCart('<?=$id?>','<?=$name?>','<?=$t?>',<?=$price?>)"/></td>
</tr>
<?php }?>
</table>
</b>

</form>