
function post(url,data,successCallback,failCallback)//QUITAR DE AQUÍ
{
    console.log(url);
    $.ajax({
        'url':url,
        type:'POST',
        'data':data,
        cache:false,
        contentType:false,
        processData:false,
         
        //dataType:"json"
        success:successCallback, 
        error: failCallback
    });
}

function contactoEnviarMensajeBtn_click()
{
    console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('ocupacion',   $("input[name='ocu']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('asunto',  $("select[name='asun']").val() );
    formData.append('mensaje',   $("textarea[name='men']").val() );

	post('send-form',formData,function(data){
        swal({
            title:"¡ LISTO !",
            text:"¡ Gracias por tu mensaje, nos comunicaremos con usted lo antes posible",
            type: "success",
            confirmButtonColor: '#55b7e6',
        });
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}
function contactoEnviarMobile_click()
{
    console.log("enviando mensaje movil");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombreM']").val() );
    formData.append('ocupacion',   $("input[name='ocuM']").val() );
    formData.append('email',   $("input[name='emailM']").val() );
    formData.append('asunto',  $("select[name='asunM']").val() );
    formData.append('mensaje',   $("textarea[name='menM']").val() );

	post('send-form',formData,function(data){
        swal({
            title:"¡ LISTO !",
            text:"¡ Gracias por tu mensaje, nos comunicaremos con usted lo antes posible",
            type: "success",
            confirmButtonColor: '#55b7e6',
        });
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}


function contactoEnviarDatos(){
    console.log("enviando datos");
    var phone = $("input[name='tel']");
    var tel =  "";
    if (phone.val() === "") {
        tel = "No hay";
    }
    else{
        tel = phone.val();
    }
    console.log(tel);
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('ocupacion',   $("input[name='ocu']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('telefono', tel );
    formData.append('asunto',   $("select[name='asun']").val() );
    formData.append('mensaje',   $("textarea[name='men']").val() );

	post('send-data.php',formData,function(data){
		console.log("Exito al enviar datos");
		console.log(data);
	},function(data){
		console.log("Error al enviar datos");
		console.log(data);
    });	
    return false;
}
function contactoEnviarDatosMobile(){
    console.log("enviando datos");
    var phone = $("input[name='telM']");
    var tel =  "";
    if (phone.val() === "") {
        tel = "No hay";
    }
    else{
        tel = phone.val();
    }
    console.log(tel);
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombreM']").val() );
    formData.append('ocupacion',   $("input[name='ocuM']").val() );
    formData.append('email',   $("input[name='emailM']").val() );
    formData.append('telefono', tel );
    formData.append('asunto',   $("select[name='asunM']").val() );
    formData.append('mensaje',   $("textarea[name='menM']").val() );

	post('send-data.php',formData,function(data){
		console.log("Exito al enviar datos");
		console.log(data);
	},function(data){
		console.log("Error al enviar datos");
		console.log(data);
    });	
    return false;
}

