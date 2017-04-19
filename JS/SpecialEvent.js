//$(document).ready(function(){
//    $(".btn-modal").click(function(){
//        $("#myModal").modal();
//    });
   
//});

//test
var ticketsErr="1";
$("#psw").blur(function(){

	 var tickets=$("#psw").val();
	 
	 if(tickets == null){
	
	 $("#pswerror").html("* Please enter the number of tickets");
	 ticketsErr="1";

	 }

	 else {		
			//alert("bbb");	
			if (!(/(^[1-9]\d*$)/.test(tickets))) { 
				$("#pswerror").html("* Must be numbers");
				 ticketsErr="2";
			
			}

			else{
					$("#pswerror").html("");
							ticketsErr="0";
		}
	 }
	
}).keyup(function(){
	$(this).triggerHandler("blur");
	
}).focus(function(){
    $(this).triggerHandler("blur");
});






var nameErr="1";
$("#booking").blur(function(){
var name = $("#booking").val();

if (name == null){
    $("#bookingerror").html("* Please enter your name");
     nameErr="1";
    
}
else{
	
    if (!(/^(?!_)([A-Za-z ]+)$/.test(name))){
    	 $("#bookingerror").html("* Your name must be letters and white space");
    	 nameErr="2";
    } 

    else{
    	 $("#bookingerror").html("");
    	 nameErr="0"; 
    }
}
}).keyup(function(){
	$(this).triggerHandler("blur");
	
}).focus(function(){
    $(this).triggerHandler("blur");
});






var telepErr = "1";
$("#booking-telep").blur(function(){
var telep = $("#booking-telep").val();

 if (telep == null){
      $("#booking-teleperror").html("* Please enter your telephone");
      telepErr ="1";
 }
 else{

	 if (!(/(^[0-9]\d*$)/.test(telep))) { 

		 $("#booking-teleperror").html("* Your telephone must be numbers");
		 telepErr ="2";
	 }

	 else{
		 $("#booking-teleperror").html("");
		 telepErr ="0";
	 }

 }

}).keyup(function(){
	$(this).triggerHandler("blur");
	
}).focus(function(){
    $(this).triggerHandler("blur");
});




var emailErr = "1";
$("#usrname").blur(function(){
var email = $("#usrname").val();

if(email == null){
  $("#usrnameerror").html("* Please your email");
  emailErr ="1";
}     

else{
       if(!(/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/.test(email))){
     	  $("#usrnameerror").html("* Invalid email");
     	emailErr ="2";
       }

       else{
    	   $("#usrnameerror").html("");
        	emailErr ="0";

       }
       

}

}).keyup(function(){
	$(this).triggerHandler("blur");
	
}).focus(function(){
    $(this).triggerHandler("blur");
});


$(".submitbutton").click(function(){
	
	var genderErr = "3";
	var gender=$('input:radio[name="gender"]:checked').val();
	if(gender == null)
		{
		
		 $("#gendererror").html(" * Please select");
	     genderErr="1";
		
		}

	else{
		 $("#gendererror").html("");
		 genderErr="0"; 
		 
	}
	
	var tickets=$("#psw").val();
	var gender=$('input:radio[name="gender"]:checked').val();
	var name = $("#booking").val();
	var telep = $("#booking-telep").val();
	var email=$("#usrname").val();
	
	
//	 alert(tickets);
	//alert(gender);
	//alert(name);
	//alert(telep);
//	alert(email);
	 

	// alert(ticketsErr);
	// alert(genderErr);
	// alert(nameErr);
	// alert(telepErr);
	 //alert(emailErr);
	 

   // alert(ticketsErr);
    //alert(genderErr);
    
    var data = 'tickets=' +tickets +'&gender=' +gender +'&name=' +name +'&telep=' +telep +'&email=' +email;
  
	  if ((ticketsErr == "0")&&(genderErr=="0")&&(nameErr=="0")&& (telepErr=="0")&&(emailErr=="0")){
	    	 
	    	// $('form').submit();
	    	 //alert("Welcome");
	    	 // alert(data);
	    	 
	    	 $.ajax({url:"Model/TicketsModel.php", type:"POST", data: data, success:function(result){
	   		  
	   		  //alert("Ajax aaa");
	   		  alert(result)
	   		$("#myModal").modal('toggle');
	   		//$("#psw").reset();
	   		$("#psw").val("");
	   		//$('input:radio[name="gender"]:checked').val("");
	   		$(".gender").removeAttr("checked");  
	   		$("#booking").val("");
	   		$("#booking-telep").val("");
	   		$("#usrname").val("");
	   		
	   	 $	("#pswerror").html("");
		 $("#gendererror").html("");	 
    	 $("#bookingerror").html("");	 
    
    	  $("#booking-teleperror").html("");
    	  $("#usrnameerror").html("");
	   	  }});
	    	 
	    
	  }else{
         return false;
	  }
       
	  
  
});


	

