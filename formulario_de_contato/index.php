<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
<title>Onfiak DEV 1</title>
</head>
<body>
		<form id="formularioenvio">
		<div class="form-row bd-example" id="capacityform">
        	<div class="text-center">
            	Preencha os dados abaixo para enviar o cadastro.<br /><br />
            </div>
        	<div class="form-group col-md-10">
                <label for="nome">Nome*:</label>	 
                <input type="text" class="form-control" name="nome" onclick="startTime()"  />
            </div>

            <div class="form-group col-md-2">
                <label for="idade">Idade*:</label> 	 
                <input type="number" class="form-control" name="idade"  />
            </div>

            <div class="form-group col-md-8">
                <label for="email">Email*:</label> 	 
                <input type="email" class="form-control" name="email"  />
            </div>

            <div class="form-group col-md-4">
                <label for="telefone">Telefone:</label> 
                <input type="phone" class="form-control" name="telefone"  />
            </div>

            <div class="form-group col-md-12">
                <div id="mensagem" class="alert alert-danger" role="alert"></div>
            </div>
            
            <div class="form-group col-md-6">
            <input type="submit" class="btn btn-primary" name="enviar" onclick="endTime()"] value="Enviar"/>
            </div>

            <div class="form-group col-md-6">
            <input type="reset" class="btn btn-primary" name="cancelar" value="Cancelar"/> 
            </div>
        </div>
        </form>
</body>
</html>
