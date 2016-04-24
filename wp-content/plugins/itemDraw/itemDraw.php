<?php
/*
Plugin Name: Item Draw
Plugin URL:
Version: 1.0
Author: Tom Will
Description: This plugin allows for a user to select preferences for items they wish to purchase.
*/

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'Item draw', 'Item Draw', 'manage_options', 'itemDraw/itemDraw.php', '', 'dashicons-tickets', 6  );
}
function myplguin_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To My Plugin</h2>
	</div>
	<?php
}

$conn = new mysqli('localhost', 'root', '', 'database') 
or die ('Cannot connect to db');

    $result = $conn->query("select id, name from table");

    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';

}

    echo "</select>";
    echo "</body>";
    echo "</html>";

?>

<html>
<head>
<title>My Page</title>
</head>
<body>
<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
<div align="center">
<select name="mydropdown">
<option value="Milk">Fresh Milk</option>
<option value="Cheese">Old Cheese</option>
<option value="Bread">Hot Bread</option>
</select>
</div>
</form>
</body>
</html>