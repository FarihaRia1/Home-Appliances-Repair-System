<?php require_once "data_access.php"; ?>

<?php
	function users_GetAll()
	{
        $sql = "SELECT * FROM users";        
        $result = executeSQL($sql);
        
        $users = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $users[$i] = $row;
        }
       // var_dump($members);
        return $users;
    }
	
	function users_GetAllExperts()
	{
        $sql = "SELECT * FROM users WHERE Type='Expert'";        
        $result = executeSQL($sql);
        
        $users = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $users[$i] = $row;
        }
       // var_dump($members);
        return $users;
    }
	
	function users_GetByID($id)
	{
        $sql = "SELECT * FROM users WHERE ID='$id'";        
        $result = executeSQL($sql);
        
        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }
	
	function users_Insert($user)
	{
        $sql = "INSERT INTO users (ID, Name, Email, Password, Address, Type, PhoneNumber, Rating, MinimumPayment, SignInDate) VALUES (NULL,' $user[Name]', '$user[Email]', '$user[Password]', '', '$user[Type]', NULL, NULL, NULL, CURRENT_TIMESTAMP);";
        $result = executeSQL($sql);
        return $result;
    }
	
	function users_Update($user)
	{
        $sql = "UPDATE users SET Name = '$user[Name]', Email = '$user[Email]', Password = '$user[Password]', Address = '$user[Address]', Type = '$user[Type]', PhoneNumber = '$user[PhoneNumber]', Rating = '$user[Rating]', MinimumPayment = '$user[MinimumPayment]' WHERE users.ID = $user[ID];";
        $result = executeSQL($sql);
        return $result;
    }
	
	function users_Delete($id)
	{
        $sql = "DELETE FROM users WHERE ID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
?>