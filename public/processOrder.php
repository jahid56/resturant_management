<html>
<head>
<script>
window.onload=function(){
  document.getElementById("button").style.display='none';

}
function showButton(){
  document.getElementById("button").style.display='block';
}
</script>
</head>
<body>
<input type="button" id="button" value="New Button"/>
Change the text in Input Box. Then Button will be show<br/><br/>
<input type="text" id="userText" value="Change the text" onchange="showButton()"/>
</body>
</html>