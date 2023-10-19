<?php
require "dbconnect.php";
require "menu.php";
?>

<?php
echo '<main class="container" style="margin-top: 100px">';
switch ($_GET['page']) {
    case 'c':
        require "categories.php";
        break;
}
echo '</main>';

require "footer.php";
