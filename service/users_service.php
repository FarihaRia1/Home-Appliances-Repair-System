<?php require_once "../data/users_data_access.php"; ?>

<?php

	function isUniqueEmail($Email){
        $users  = users_GetAll();
        $isUnique = true;
        foreach($users as $user){
            if($user['Email']==$Email){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
	
	function dateDifference($stDate)
	{
		$datetime1 = new DateTime("$stDate");//start time
		$date=date('m/d/Y h:i:s a', time());
		$datetime2 = new DateTime("$date");//end time
		$interval = $datetime1->diff($datetime2);
		return $interval->format('%Y years %m months %d days');
	}

?>