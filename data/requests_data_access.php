<?php require_once "data_access.php"; ?>

<?php
	function requests_GetAll()
	{
        $sql = "SELECT * FROM requests";        
        $result = executeSQL($sql);
        
        $requests = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $requests[$i] = $row;
        }
       // var_dump($members);
        return $requests;
    }
	
	function requests_GetByID($id)
	{
        $sql = "SELECT * FROM requests WHERE RequestID='$id'";        
        $result = executeSQL($sql);
        
        $request = mysqli_fetch_assoc($result);
        
        return $request;
    }
	
	function requests_insert($request)
	{
        $sql = "INSERT INTO requests (RequestID, CustomerID, ExpertID, ServiceType, ServiceAddress, ProblemDescription, PaymentDescription, RequestingDate, Payment, Status) VALUES (NULL, '$request[CustomerID]', '$request[ExpertID]', '$request[ServiceType]', '$request[ServiceAddress]', '$request[ProblemDescription]', 'Not Paid', CURRENT_TIMESTAMP, NULL, 'Pending');";
        $result = executeSQL($sql);
        return $result;
    }
	
	function requests_update($request)
	{
        $sql = "UPDATE requests SET CustomerID = '$request[CustomerID]', ExpertID = '$request[ExpertID]', ServiceType = '$request[ServiceType]', ProblemDescription = '$request[ProblemDescription]', PaymentDescription = '$request[PaymentDescription]', Payment = '$request[Payment]', Status = '$request[Status]' WHERE requests.RequestID = $request[RequestID];";
        $result = executeSQL($sql);
        return $result;
    }
	
	function requests_Delete($id)
	{
        $sql = "DELETE FROM requests WHERE RequestID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function requests_GetByExpertID($id)
	{
        $sql = "SELECT * FROM requests WHERE ExpertID='$id'";        
        $result = executeSQL($sql);
        
        $requests = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $requests[$i] = $row;
        }
       // var_dump($members);
        return $requests;
    }
	
	function requests_GetByExpertIDCompleted($id)
	{
        $sql = "SELECT * FROM requests WHERE ExpertID='$id' AND Status='Completed'";        
        $result = executeSQL($sql);
        
        $requests = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $requests[$i] = $row;
        }
       // var_dump($members);
        return $requests;
    }
	
	function requests_GetByExpertIDPending($id)
	{
        $sql = "SELECT * FROM requests WHERE ExpertID='$id' AND Status='Pending' OR Status='Confirmed' OR Status='OnGoing' ORDER BY RequestingDate DESC";        
        $result = executeSQL($sql);
        
        $requests = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $requests[$i] = $row;
        }
       // var_dump($members);
        return $requests;
    }
	
	function requests_GetByCustomerIDPending($id)
	{
        $sql = "SELECT * FROM requests WHERE CustomerID='$id' AND Status='Pending' OR Status='Confirmed' OR Status='OnGoing' ORDER BY RequestingDate DESC";        
        $result = executeSQL($sql);
        
        $requests = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $requests[$i] = $row;
        }
       // var_dump($members);
        return $requests;
    }
?>