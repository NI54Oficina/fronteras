
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
<?php if(false){ ?>
<?php

$conf = new PermissionChecker;
$columnChat="col-lg-12 col-md-12 col-sm-12 col-xs-12";
$admin=$conf->CheckUrl("ayuda");
if($admin ){
	$columnChat="col-lg-8 col-md-8 col-sm-12 col-xs-12";
?>
<div class="col-lg-4 adminLateral" style="background-color:red;color:white;">Modo Admin
<a href="<?php echo Yii::app()->getBaseUrl(true)."/ar/chat/admin/"; ?>">Historial</a>
<?php 

$Criteria = new CDbCriteria();
$Criteria->condition = "abierto = 1";

$chats= Chat::model()->findAll($Criteria);

	foreach($chats as $chat){
	?>
		<div class="chatSelector" idChat="<?php echo $chat->id; ?>"><h3><?php echo $chat->nombre; ?></h3>
		<p><?php echo $chat->motivo; ?></p>
		<a href="<?php echo Yii::app()->getBaseUrl(true)."/ar/chat/view/".$chat->id; ?>" target="_blank">Ver detalles</a>
		<button type="button" class="closeChat">Finalizar chat</button>
		</div>
	<?php } ?>

</div>
<?php } ?>
	
	<div class="<?php echo $columnChat; ?> chatsContainer" style="text-align:center;">
	 <h1>  - AYUDA -</h1>

	 <?php include("chat-screen.php"); ?>
	 <?php 
	 if($admin){
	 foreach($chats as $chat){ ?>
			
		
		<div class="page-wrap" chatid="<?php echo $chat->id; ?>">
    
        
        
			<div class="chat-wrap"><div class="chat-area"></div></div>
        
			<form class="send-message-area">
				<textarea class="sendie" maxlength="300"></textarea>
			</form>
    
		</div>
		
	 <?php } }else{ ?>
		 
		Ingrese sus datos para comenzar a chatear
		<form id="datosUser">
		<label>Nombre:</label>
		<input name="nombre" required /><br>
		<label>Email:</label>
		<input name="email" required /><br>
		<label>Motivo:</label>
		<textarea name="motivo" required ></textarea>
		<input type="submit" />
		</form>
		
		<div class="page-wrap chatUser" chatid="-1" style="display:none">
    
        
        
        <div class="chat-wrap"><div class="chat-area"></div></div>
        
        <form class="send-message-area">
            <p>Your message: </p>
            <textarea class="sendie" maxlength="300" ></textarea>
        </form>
    
		</div>
		
		 
	 <?php } ?>
	 </div>
</section>


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/chat.js"></script>
	
    <script type="text/javascript">
		var sendURL="/<?php echo $_SESSION["webRoot"]; ?>site/chatProcess";
		var registerURL="/<?php echo $_SESSION["webRoot"]; ?>ar/site/chatInit";
		<?php 
		if($admin){ ?>
		var deleteURL="/<?php echo $_SESSION["webRoot"]; ?>site/chatFinish/id/";
		var checkURL="/<?php echo $_SESSION["webRoot"]; ?>site/lastChat/id/";
		var dataURL="/<?php echo $_SESSION["webRoot"]; ?>site/chatData/id/";
		<?php } ?>
        // ask user for name with popup prompt    
        var name = "";
        
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
             $('body').on('keydown',".sendie",function(event) {  
             
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
    		 $('body').on('keyup',".sendie",function(e) {	
    		 					 console.log("sendie entraaa");
    			  if (e.keyCode == 13) { 
    			  console.log("sendie entra enterrrr");
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     var auxID= $(this).parent().parent().attr("chatid");
					 console.log("sendie entra id "+auxID);
					 console.log("sendie entra chats "+chats[auxID]);
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
				if($(this).attr("chatid")!="-1"){
					var auxChat=new Chat();
					chats[$(this).attr("chatid")]=auxChat;
					auxChat.getState($(this).attr("chatid"));
					lastId=$(this).attr("chatid");
					console.log("entraaaa chat");
					$(this).hide();
				}
			});
			setInterval(function(){UpdateChats();},1000);
			<?php 
			if($admin){ ?>
			setInterval(function(){CheckNewChats();},5000);
			<?php } ?>
		});
    </script>
	
<style>
.chat-area{
	height:200px;
	overflow:auto;
	width:100%;
	padding:10px;
	text-align:left;
	background-color:#ebebeb;
}
.chat-area span{
	padding:10px;background-color:blue;color:white;	display:inline-block;
	margin-right:10px;
}
.chat-area p{
	margin:10px 0;
	display:block;	
}
.chat-wrap,.page-wrap{
	width:100%;	
}
.sendie{
	width:100%;	
}

.unreadChat{
	background-color:green;
}
.activeChat{
	background-color:blue;
}
</style>
<?php } ?>
<h3>Pagina en construcción</h3>