<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/favicon.png" type="image/png">
      <title>MAGICMAG - Интернет-магазин оригинальных кружек</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
	  <script>function confirmDelete() {
		if (confirm("Вы подтверждаете удаление?")) {
			return true;
		} else {
			return false;
		}
	}
	</script>
   </head>