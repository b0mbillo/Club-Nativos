<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link  rel="icon"   href="img/img1.jpg" type="image/png" />
    <title>CLUB NATIVOS</title>
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body class="img">
<nav class="navbar navbar-expand-lg bg-success navbar-dark">
      
        <img src="img/icon.svg" width="50px" width="50px" alt="">
        
        <a class="navbar-brand" href="#">NATIVOS</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="nosotros.php">NOSOTROS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="incripcion.php">INSCRIPCIONES</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="reglamentos.php">REGLAMENTOS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contactenos.php">CONTACTENOS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../test/calendar/index.html">CALENDARIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="galeria.php">GALERIA</a>
              </li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                INGRESO
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">ADMIN</a>
                <a class="dropdown-item" href="#">APRENDIZ</a>
                
              </div>
            </li>
            
          </ul>
         
        </div>
      </nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
		
    	<div class="col-md-4">
			
		</div>
	    
		<div class="col-md-4">
		<!-- color del contenedor -->
		<form>
    		<div id="login-form" class="form-container" data-form-container style="color: black; background:#f8f8ff;">
			<div class="row">
			<div class="form-title">
					<span>Ingresar.</span>
				</div>
			</div>
			<div class="input-container">
				<div class="row">
					<span class="req-input valid" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input your email."> </span>
						<input type="email" data-min-length="8" placeholder="Email" value="testing@gmail.com">
					</span>
				</div>
				<div class="row">
					<span class="req-input input-password invalid">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Password must be at least 8 characters long."> </span>
						<input type="password" data-min-length="8" placeholder="Password">
					</span>
				</div>
				
				<div class="row" style="display:none">
					<span class="req-input confirm-password">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Password Must Match Initial Password Field."> </span>
						<input type="password" data-min-length="8" placeholder="Confirm Password">
					</span>
				</div>
				
				<div class="row">
					<a class="create-account"> Crea tu cuenta </a>
				</div>
				
				<div class="row submit-row">
					<button type="button" class="btn btn-block submit-form invalid" ><a href="formulario.php">Ingresar</button>
				</div>
				<div class="oauth-buttons">
					<span><i class="fa fa-facebook"></i> </span>
					<span><i class="fa fa-google-plus"></i> </span>
					<span><i class="fa fa-linkedin"></i> </span>
					<span><i class="fa fa-twitter"></i> </span>
				</div>
					
				
			</div>
			</div>
		
			</form>
		</div>
	
	</div>
</div>
<script type="text/javascript">
$(function(){
  
    $('[data-toggle="tooltip"]').tooltip(); 
	
	$(".req-input input, .req-input textarea").on("click input", function(){
		validate($(this).closest("[data-form-container]"));
	});
    
	//This is for the on blur, if the form fields are all empty but the target was one of the fields do not reset to defaul state
	var currentlySelected;
	$(document).mousedown(function(e) {
        currentlySelected = $(e.target);
    });
	
	//Reset to form to the default state of the none of the fields were filled out
	$(".req-input input,  .req-input textarea").on("blur", function(e){
		var Parent = $(this).closest("[data-form-container]");
		//if the target that was clicked is inside this form then do nothing
		if(typeof currentlySelected != "undefined" && currentlySelected.parent().hasClass("req-input") && Parent.attr("id") == currentlySelected.closest(".form-container").attr("id"))
			return;
		
		var length = 0;
		Parent.find("input").each(function(){
			length += $(this).val().length;
		});
		Parent.find("textarea").each(function(){
			length += $(this).val().length;
		});
		if(length == 0){
			var container = $(this).closest(".form-container");
			resetForm(container);
		}
	});
	
	$(".create-account").on('click', function(){
		if($(".confirm-password").is(":visible")){
			$(this).text("Create an Account");
			$(this).closest("[data-form-container]").find(".submit-form").text("Login");
			$(".confirm-password").parent().slideUp(function(){
				validate($(this).closest("[data-form-container]"));
			});
		} else {
			$(this).closest("[data-form-container]").find(".submit-form").text("Create Account");
			$(this).text("Already Have an Account");
			$(".confirm-password").parent().slideDown(function(){
				validate($(this).closest("[data-form-container]"));
			});
		}
		
	});
	
	$("[data-toggle='tooltip']").on("mouseover", function(){
		console.log($(this).parent().attr("class"));
		if($(this).parent().hasClass("invalid")){
			$(".tooltip").addClass("tooltip-invalid").removeClass("tooltip-valid");
		} else if($(this).parent().hasClass("valid")){
			$(".tooltip").addClass("tooltip-valid").removeClass("tooltip-invalid");
		} else {
			$(".tooltip").removeClass("tooltip-invalid tooltip-valid");
		}
	});
	
})

function resetForm(target){
	var container = target;
	container.find(".valid, .invalid").removeClass("valid invalid")
	container.css("background", "");
	container.css("color", "");
}

function setRow(valid, Parent){
	var error = 0;
	if(valid){
		Parent.addClass("valid");
		Parent.removeClass("invalid");
	} else {
		error = 1;
		Parent.addClass("invalid");
		Parent.removeClass("valid");
	}
	return error;
}

function validate(target){
	var error = 0;
	target.find(".req-input input, .req-input textarea, .req-input select").each(function(){
		var type = $(this).attr("type");
		
		if($(this).parent().hasClass("confirm-password") && type == "password"){
			var type = "confirm-password"; 
		}
		
		var Parent = $(this).parent();
		var val = $(this).val();
		
		if($(this).is(":visible") == false)
			return true; //skip iteration
		
		switch(type) {
			case "confirm-password":
				var initialPassword = $(".input-password input").val();
				error += setRow(initialPassword  == val && initialPassword.length > 0, Parent);
				break;
			case "password":
			case "textarea":
			case "text":
				var minLength = $(this).data("min-length");
				if(typeof minLength == "undefined")
					minLength = 0;
				error += setRow(val.length >= minLength, Parent);
				break; 
			case "email":
				error += setRow(validateEmail(val), Parent);
				break;
			case "tel":
				error += setRow(phonenumber(val), Parent);
				break;			
		}	
	});
	
	var submitForm = target.find(".submit-form");
	var formContainer = target;
	var formTitle = target.find(".form-title");
	if(error == 0){
		formContainer.css("background", "#C8E6C9");
		formContainer.css("color", "#2E7D32");
		submitForm.addClass("valid");
		submitForm.removeClass("invalid");
        return true;
	} else {		
		// color del contenedor dentro de crear cuenta
		formContainer.css("background", "white");
		formContainer.css("color", "f8f8ff");
		submitForm.addClass("invalid");
		submitForm.removeClass("valid");
        return false;
	}
}
function phonenumber(inputtxt) {  
	if(typeof inputtxt == "undefined")
		return;
	var phoneno = /^\d{10}$/;  
	if((inputtxt.match(phoneno))) {  
		return true;  
	}  
	else {  
		return false;  
	}  
}  

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
</script>
</body>
</html>
