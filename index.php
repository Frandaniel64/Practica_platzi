<?php
require ("mail.phps");
function validate($name,$email,$subject,$message){
 return !empty($name) &&  !empty($email) 
                      && !empty($subject)
 &&!empty($mensaje);

}
$status="";
if(isset($_POST["form"])){
    if(validate(...$_POST)){
        $name = $_POST['name'];
        $email = $_['email'];
        $subject = $_['mensaje'];

        
        $status="success";
        
    }else{
        $status="danger";
    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php if($status == "danger"): ?>  
<div class="aler danger">
    <span>Surgio un Problema</span>
</div>
<?php endif; ?>
 
<?php if($status=="success"):?>
<div class="aler success">
    <span>enviado con exito</span>
</div>
<?php endif; ?>


<form action="" method="$_POST">
<h1>Contacto</h1>
<div>
    <label for="">Name</label>
    <input type="text" name="name" id="name">
</div>

<div>
    <label for="">Correo</label>
    <input type="text" name="correo" id="correo">
</div>

<div>
    <label for="">Mensaje</label>
    <input type="text" name="Mensaje" id="mensaje">
</div>

<div>
    <button type="submit">
        Enviar
    </button>
</div>

</form>


</body>
</html>