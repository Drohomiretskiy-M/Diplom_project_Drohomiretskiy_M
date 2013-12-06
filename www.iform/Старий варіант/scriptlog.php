<?php
// Выводим HTML-заголовки:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Test Form PHP.SU</title>';
echo '</head>';
echo '<body>';
echo '<META HTTP-EQUIV=Refresh Content="0;URL=adminbd.html">';
if ($_POST['login']=="admin123" && $_POST['pasw']=="admin123" ) echo '<META HTTP-EQUIV=Refresh Content="0;URL=redagbd.html">';
else echo '<META HTTP-EQUIV=Refresh Content="0;URL=adminbd.html">';
echo '</body>';
echo '</html>';
?>