<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
<head>  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<script>

$(document).ready(function() {
	$('.result').hide();
	$('#submit').click(function(){
		var username = $('.username').val();
		var data = 'username=' +username;
		$.ajax({
			type:"POST",
			url:"validate.php",
			data: data,
			success:function(html) {
				$('.result').show();
				$('.result').text(html);
			}
		});
		return false;
	});
});


</script>
</head>  
<body>  
<<form id="register" method="post" action="">
	<span class="tips">name：</span>
	<input type="text" name="username" class="username" />
		<span class="result"></span><br />
	<input type="submit" id="submit" />
</form>

</body>  





</html>  

