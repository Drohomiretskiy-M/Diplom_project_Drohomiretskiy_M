<?php
// Выводим HTML-заголовки:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Test Form PHP.SU</title>';
echo '</head>';
echo '<body>';
if ($_POST['vubir']=="qqq") echo '<META HTTP-EQUIV=Refresh Content="0;URL=in.html">';
if ($_POST['vubir']=="bd") echo '<META HTTP-EQUIV=Refresh Content="0;URL=adminbd.html">';
if ($_POST['vubir']=="grup") echo '<META HTTP-EQUIV=Refresh Content="0;URL=group.html">';
if ($_POST['vubir']=="doctor") echo '<META HTTP-EQUIV=Refresh Content="0;URL=doctor.html">';
if ($_POST['vubir']=="auditor") echo '<META HTTP-EQUIV=Refresh Content="0;URL=auditor.html">';
echo '</body>';
echo '</html>';
?>