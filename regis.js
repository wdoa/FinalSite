 $('.reg').click(function(){	
		  username=$(".login").val();
		  pas=$(".password").val();
		  fnm=$(".fname").val();
		  lnm=$(".lname").val();
		  $.ajax({
		   type: "POST",
		   url: "try.php",
			/*data: "login="+username+"ps="+pas+"fn="+fnm+"ln="+lnm,*/
			data: { login: username, 
                        ps: pas, fn: fnm, 
                        ln: lnm},
		   success: function(html){
                        console.log(html);    
			if(html=='notexist')    {
			 //$("#add_err").html("right username or password");
			 window.location="index.php";
			}
			else    {
			 $("#err").html("Username is already exist");
			}
		   },
		   beforeSend:function()
		   {
		//	$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html(" Loading...")
		   }
		  });
		});	