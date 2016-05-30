	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/chat.js"></script>
	
    <script type="text/javascript">
		var sendURL="/<?php echo $_SESSION["webRoot"]; ?>site/chatProcess";
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "Guest");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        //var chat =  new Chat();
    	$(function() {
    	
    		 //chat.getState(); 
    		 
    		 // watch textarea for key presses
             $(".sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }
			 });
    		 // watch textarea for release of key press
    		 $('.sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     var auxID= $(this).parent().parent().attr("chatId");
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chats[auxID].send(text, name,auxID);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
		
		var chats={};
		
		$(window).on("load",function(){
			
			$(".page-wrap").each(function(){
				var auxChat=new Chat();
				chats[$(this).attr("chatID")]=auxChat;
				auxChat.getState($(this).attr("chatId"));
				console.log("entraaaa chat");
				
			});
			setInterval(function(){UpdateChats();},1000);
		});
    </script>
	
	<div class="page-wrap" chatId="4">
    
        <h2>jQuery/PHP Chat</h2>
        
        <p id="name-area"></p>
        
        <div class="chat-wrap"><div class="chat-area"></div></div>
        
        <form class="send-message-area">
            <p>Your message: </p>
            <textarea class="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
	
	<div class="page-wrap" chatId="10">
    
        <h2>jQuery/PHP Chat</h2>
        
        <p id="name-area"></p>
        
        <div class="chat-wrap"><div class="chat-area"></div></div>
        
        <form class="send-message-area">
            <p>Your message: </p>
            <textarea class="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>