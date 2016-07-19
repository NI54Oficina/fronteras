/*
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
//var state;
var mes;
var file;

var idSession=11;
var activeChat=0;

var lastId=0;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
	this.state=0;
	this.instanse=false;
}

//gets the state of the chat
function getStateOfChat(idChat){
	if(!chats[idChat].instanse){
		 chats[idChat].instanse = true;
		 $.ajax({
			   type: "POST",
			   url: sendURL+"/id/"+idChat,
			   data: {
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",

			   success: function(data){
				   chats[idChat].state = data.state;
				   chats[idChat].instanse = false;
			   },
			});
	}
}

//Updates the chat
function updateChat(idChat){
	//console.log("entra server");
	 if(!chats[idChat].instanse){
		 chats[idChat].instanse = true;
	     $.ajax({
			   type: "POST",
			   url: sendURL+"/id/"+idChat,
			   data: {
			   			'function': 'update',
						'state': chats[idChat].state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            $('[chatid='+idChat+'] .chat-area').append($("<p>"+ data.text[i] +"</p>"));
                        }
						$('[chatid='+idChat+'] .chat-area').scrollTop(10000000);
						if(idChat!=activeChat){
							$('[idChat='+idChat+']').addClass("unreadChat");
						}
				   }
				   //document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   chats[idChat].instanse = false;
				   chats[idChat].state = data.state;

			   },
			});
	 }
	 else {
		 //setTimeout(updateChat(idChat), 1500);
	 }

}

var baseChat='<div class="page-wrap" chatid="{chatID}"><div class="chat-wrap"><div class="chat-area"></div></div><form class="send-message-area"><textarea placeholder="Escriba su mensaje aqui." class="sendie" maxlength="300"></textarea></form></div>';
var baseChatButton='<div class="chatSelector" idChat="{chatID}"><h3>{chatNombre}</h3><p>{chatMOTIVO}</p><button type="button" class="closeChat">Finalizar chat</button></div>';

function CheckNewChats(){
	$.post(checkURL+lastId,function(data){
		console.log(data);
		if(data!=""){
			var newIDs=data.split(",");
			console.log(newIDs);
			for(var a=0;a<newIDs.length;a++){
				if(parseInt(newIDs[a])<=parseInt(lastId)){
					continue;
				}
				lastId=newIDs[a];
				var currentLoopId=newIDs[a];
				$.post(dataURL+currentLoopId,function(data){
					console.log("entra data "+data);
					var chatData=data.split(";;;;;");
					var newChat= baseChat;
					newChat= newChat.replace("{chatID}",currentLoopId);
					$(".chatsContainer").append(newChat);
					$("[chatid="+currentLoopId+"]").hide();
					newChat= baseChatButton;
					newChat= newChat.replace("{chatID}",currentLoopId);
					newChat= newChat.replace("{chatNombre}",chatData[0]);
					newChat= newChat.replace("{chatMOTIVO}",chatData[1]);
					$(".adminLateral").append(newChat);

					var auxChat=new Chat();
					chats[currentLoopId]=auxChat;
					auxChat.getState(currentLoopId);
				});
			}
		}
	});
}

//send the message
function sendChat(message, nickname,idChat)
{
    updateChat(idChat);
     $.ajax({
		   type: "POST",
		   url: sendURL+"/id/"+idChat,
		   data: {
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat(idChat);
		   },
		});
}


function UpdateChats(){
	$.each(chats,function(key,value){
		chats[key].update(key);
	});
}

$("body").on("click",".chatSelector",function(){
	 ShowChat($(this).attr("idChat"));
});

function ShowChat(idChat){
	$(".page-wrap").hide();
	$('.chatSelector').removeClass("activeChat");
	$('[chatid='+idChat+']').css("display","inline-block");
	activeChat=idChat;
		$('[idChat='+idChat+']').removeClass("unreadChat");
		$('[idChat='+idChat+']').addClass("activeChat");

}
var alreadySent=false;
$("#datosUser").on('submit', function(e){
	  e.preventDefault();
	  if(alreadySent){
		  return;
	  }
	  alreadySent=true;
	  console.log("entra user");
    $(".title-inside-ayuda p").hide();
    $(".title-ayuda-mobile").hide();
	  $("#datosUser").hide();
	  $.post(registerURL,{nombre:$("#datosUser [name=nombre]").val(),email:$("#datosUser [name=email]").val(),motivo:$("#datosUser [name=motivo]").val()},function(data){
		  if(data!=""){
			  InitUserChat(data);
		  }
	  });
	  setInterval(function(){UpdateChats();},1000);
	  return false;
  });
  
  function SubmitChat(){
	  console.log("submit tap");
	  $(".title-inside-ayuda p").hide();
    $(".title-ayuda-mobile").hide();
	  $("#datosUser").hide();
	  $.post(registerURL,{nombre:$("#datosUser [name=nombre]").val(),email:$("#datosUser [name=email]").val(),motivo:$("#datosUser [name=motivo]").val()},function(data){
		  if(data!=""){
			  InitUserChat(data);
		  }
	  });
	  setInterval(function(){UpdateChats();},1000);
  }

  function InitUserChat(data){
		$(".chatUser").attr("chatid",data);
		$(".chatUser").show();
		var auxChat=new Chat();
		chats[data]=auxChat;
		auxChat.getState(data);
  }

 $("body").on("click",'.closeChat',function(){
	 console.log("entra close");
	var idToClose=$(this).parent().attr("idChat");
	var auxTarget=this;
	$(this).hide();
	$.post(deleteURL+idToClose,function(data){
		console.log("enviado");
		$(auxTarget).parent().hide();
	});
 });
