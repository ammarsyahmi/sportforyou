<?php
	$conn = mysqli_connect('localhost', 'root', '', 'sportforyou');

	if (mysqli_connect_errno()) {
	    echo "sambungan tidak berjaya".mysqli_connect_error();
		}else{
			echo "Sambungan Berjaya";
	}
	
?>