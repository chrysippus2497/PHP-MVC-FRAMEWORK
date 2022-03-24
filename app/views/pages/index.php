<?php
	/*echo SITENAME;*/
	/*echo $data['title'];*/
	foreach ($data['users'] as $user) {
		echo "Username: " . $user->user_name;
		echo "</br>";
		echo "Email: " . $user->user_email;
		echo "</br>";
	}