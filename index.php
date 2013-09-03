<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Load remote content into object element</title>

    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="jquery.xdomainajax.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   $("#page1").click(function(){
		   	$('#result').load('page1.html');
		     //alert("Thanks for visiting!");
		   }); 
		 });
	</script>
<style type="text/css">
#result img{
width:200px;
height:auto;
}
</style>


  </head>
  <body>

	 
<a href="http://design78.net" class="ajaxtrigger">zaladuj design 78</a>
<div id="target"></div>


	<ul>
	<li><a id="page1" href="#">About</a></li>
</ul>
tu bedzie page1.html albo design78.net
<hr />
<div id="result" style="clear:both;"></div>
  </body>
</html>
