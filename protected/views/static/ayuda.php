
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section ayuda">
<?php if(true){ ?>
<?php

$conf = new PermissionChecker;
$columnChat="col-lg-12 col-md-12 col-sm-12 col-xs-12";
$admin=$conf->CheckUrl("ayuda");
if($admin ){
	$columnChat="col-lg-8 col-md-6 col-sm-6 col-xs-12";
?>
<?php include("chat-admin.php"); ?>
<?php } ?>

	<div class="<?php echo $columnChat; ?> chatsContainer" style="text-align:center;">

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

		<?php include("chat-user.php") ?>


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

<?php } ?>
<?php if(false){ ?>
<h3>Pagina en construcción</h3>
<?php } ?>
