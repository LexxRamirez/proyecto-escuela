<!DOCTYPE html>
<html leng="utf-8">
<head>
<title>..::CE</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/materialize.css">
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  
    <script>
         $(document).ready(function() {
         $('select').material_select();
      });
    </script>
</head>
<body>
<div id="log" style="width:100%; height:75px; margin: auto; background-color: #3668A7">
		<a href="logut.php" style="float:right; color:#000; padding:20px; font-size:17px;"><?php echo $_SESSION["usuario"];?> (Exit)</a>
</div>