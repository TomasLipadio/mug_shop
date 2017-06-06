<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="content">
               <div id="catalog">
                  <h2 class="post_ttl2">АВТОРИЗАЦИЯ</h2>
                  <div id="basket" style="background:none;">
                     <?php
				$login     = htmlspecialchars($_POST['login']);
				$password  = htmlspecialchars($_POST['password']);
				$logins    = file('files/loginsF2j7Jed82hQ3BkLw2oQnsK.txt', FILE_IGNORE_NEW_LINES);
				$passwords = file('files/passwordsIo7x9R2u7RWn1Jq7G2S1k2.txt', FILE_IGNORE_NEW_LINES);
				for ($i = 0; $i < count($logins); $i++) {
					if ($login == $logins[$i] && $password == $passwords[$i]) {
					$_SESSION['login'] = $login;
					if ($_SESSION['login'] == 'jenya' && $password == '12345') {
						$_SESSION['adminmode'] = 'activated';
					}
					echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
					exit;
					}
				}
				echo '<p align="center" style="font-size:28px;color:#540099;"><b>Ошибка ввода, Попробуйте снова</b></p>';
			?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>
