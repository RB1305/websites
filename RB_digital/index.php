<?php
include('libs/config.php');
?>
<?php
$views = $_GET['view'] ?? 'index';

include ($config['base']['path'].'/views/layout/main.php');
?> // qwqwqwqwqwqqwqwq