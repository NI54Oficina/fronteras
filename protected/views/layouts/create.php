<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/adminProductos'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<script>
$(document).ready(function(){
	console.log("ready");
	$(".boton-target").on("click",function(){
		if(!$(this).hasClass('selected-target')){
			$(this).addClass("selected-target");
		}else{
			$(this).removeClass("selected-target");
		}
	});
	
	$("#addPais").on("click",function(){
		if ( $( "#paises #"+$("#paisList option:selected").text() ).length ) {
			return;
		}
		$("#paises").append("<div class='paisBlock' id='"+$("#paisList option:selected").text()+"'>"+$("#paisList option:selected").text()+"</div>");
		if($("#producto_pais").val()==""){
			$("#producto_pais").val($("#paisList").val());
		}else{
			$("#producto_pais").val($("#producto_pais").val()+","+$("#paisList").val());
		}
		console.log($("#paisList").val(),$("#paisList option:selected").text());
	});
	
	
	
	$("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/producto/upload",
			success: function(data,response){ 
				
				$("#image_id").val(response);
				$("#label_imagen").css("color","lime");
				
			
			} 
			,uploadprogress: function(file){
				console.log($("div#dropzone-example .previewImage").attr('src'));
				$("#previewImage").append("<img src='"+$("div#dropzone-example .previewImage").attr('src')+"' onload='$(\"#dropzone-example\").hide();'>");
				
			}
	});
	
	$("#isCode").change(function(){
		if($("#isCode").is(":checked")){
			$("#partes-contenido-code").show();
			$("#partes-contenido").hide();
			
		}else{
			$("#partes-contenido-code").hide();
			$("#partes-contenido").show();

		}
	});
});

function CheckForm(){
	if($('#producto-form').valid()){

		var targets="";
		$(".boton-target").each(function(){
			if($(this).hasClass("selected-target")){
				targets+="1";
			}else{
				targets+="0";
			}
		});
		GetCkEditorInstance();
		var partes="";
		var partes_contenido="";
		var indexAuxParte=0;
		
		$(".partes-producto").each(function(){
			partes+=$(this).attr("parte-id")+";";
			if(!$("#isCode").is(":checked")){
				var parteinner=$(this).find('textarea').attr("id");
				partes_contenido+=myinstances[parteinner]+";;;;";
			}else{
				partes_contenido+=editorsCode[indexAuxParte].getValue()+";;;;";
				indexAuxParte++;
			}
		});
		//console.log(partes_contenido);
		$("#producto_partes").val(partes);
		$("#producto_partes_contenido").val(partes_contenido);
		
		
		$("#producto_target").val(targets);
		$("#producto-form").submit();
	}
}

var myinstances = [];
function GetCkEditorInstance(){
	for(var i in CKEDITOR.instances) {
		
		//if(CKEDITOR.instances[i].name==idTocheck){
		//	return CKEDITOR.instances[i].value;
		//}
		
		/* this  returns each instance as object try it with alert(CKEDITOR.instances[i]) */
		CKEDITOR.instances[i]; 
	   
		/* this returns the names of the textareas/id of the instances. */
		CKEDITOR.instances[i].name;

		/* returns the initial value of the textarea */
		CKEDITOR.instances[i].value;  
	 
	   /* this updates the value of the textarea from the CK instances.. */
	   CKEDITOR.instances[i].updateElement();

	   /* this retrieve the data of each instances and store it into an associative array with
		   the names of the textareas as keys... */
	   myinstances[CKEDITOR.instances[i].name] = CKEDITOR.instances[i].getData(); 

	}
	
}


function AgregarSeccion(){
	
	
		if(!$("#isCode").is(":checked")){
			if($("#parte-actual").val()&& !($("#parte"+$("#parte-actual").val()).length ) ){
			var toAppend="<div class='partes-producto' parte-id='"+$("#parte-actual").val()+"' id='parte"+ $("#parte-actual").val() +"'>"
			toAppend+="<label>"+$("#parte-actual option:selected").text()+"</label><span style='color:red;cursor:pointer;' onclick='Remove( "+$("#parte-actual").val()+" );' >x</span>";
			toAppend+="<textarea id='parteInner"+ $("#parte-actual").val() +"' style='width:100%;'>";
			
			toAppend+='</textarea></div><br>';
			$("#partes-contenido").append(toAppend);
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace( "parteInner"+$("#parte-actual").val() );
			}
		}else{
			console.log("entra el code~~");
			if(!codeAgregado){
				codeAgregado=true;
			var toAppend="<div class='partes-producto' parte-id='"+1+"' id='parte"+ 1 +"' >"
			toAppend+="<label>"+"Code"+"</label>";
			toAppend+="<div id='parteInner"+ 1+"' style='width:100%;height:300px;'>";
		
			toAppend+='</div></div><br>';
			$("#partes-contenido-code").append(toAppend);
			
			var editor = ace.edit("parteInner"+1);
			editor.setTheme("ace/theme/monokai");
			editor.getSession().setMode("ace/mode/html");
			editorsCode.push(editor);
			}
		}
         
}

var codeAgregado=false;

var editorsCode= [];

function Remove(indexParte){
	$("#parte"+indexParte).remove();
	codeAgregado=false;
}

</script>
<style>
.boton-target{
	width:9%;
	opacity:0.5;display:inline-block;
}
.boton-target img{
	width:100%;
}
.selected-target{
	opacity:1;
}

.dz-details img{
	max-height:100%;
}	
.dz-details{
	padding-top:10px;
	height:90%;
}

.dz-preview{
	height:100%;
}

.dz-filename, .dz-size, .dz-progress, .dz-success-mark, .dz-error-mark,.dz-error-message{
	display:none;
}

.paisBlock{
	padding:10px;
	background-color:#EFFDFF;
	width:auto;
	display:inline-block;
	margin:5px;
}

#paises{
	margin:10px;
}

</style>
<?php $this->endContent(); ?>