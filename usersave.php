<header>
<?php
	if( isset( $_POST['add_txt'] ) ){
	$file = $_POST['filename'];
    $buffer = $_POST['data'];

    if (file_exists($file)) {
            $buffer = file_get_contents($file) . "\n" . $buffer;
    }

    $success = file_put_contents($file, $buffer);
	echo 'Данные добавлены<br/>';
	
	echo $buffer;}
	if( isset( $_POST['edit_txt'] ) ){
	$file = $_POST['filename'];
    $buffer = $_POST['data'];
    $success = file_put_contents($file, $buffer);
	echo 'Данные изменены<br/>';
	echo $buffer;
	}
	if( isset( $_POST['show_txt'] ) ){
		$file = file_get_contents($_POST['filename']);
		echo $file;
	}

?>
</header>