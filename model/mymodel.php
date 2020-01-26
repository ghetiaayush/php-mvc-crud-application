<?php
session_start(); 
class MyModel
{
	public $conn = "";
	public function __construct()
	{
		$this->conn = mysqli_connect("localhost","root","","mvc_databse");
	}
	
	public function login($tbl1,$data)
	{
		//echo 
		$email = $data['email'];
		//echo "<br>";
		//echo 
		$password = $data['password'];
		$role = 'admin';
		
		//echo 
		$sql = "select  * from $tbl1 where email = '$email' and password = '$password' and role = '$role'";
		//exit;
		//$result = $conn->mysqli_query($sql);
		$result = $this->conn->query($sql);
		
		//echo "<pre>";
		//print_r($result);
		//exit;
		if($result->num_rows >= 1)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	public function insert($tbl1,$data)
	{
		
		//insert into user(fname,lname,email,password,role,) value ('','','');
		//print_r($data);
		$key = array_keys($data);
		/*echo */$key1 = implode(',',$key);

		
		$value = array_values($data);
		/*echo */$value = implode("','", $value);
		//$value = "'" . implode("','", $data) . "'";

		
		/*echo*/ $sql = "insert into $tbl1($key1) values ('$value')"; 
		//exit;
		$result = $this->conn->query($sql);
		if ($result > 0)
		{
			return 1;
		}
		else
		{
			return 0;		
		}
	}
	public function select($tbl,$where='')
	{
		$select = "SELECT * FROM $tbl ";

		if($where != '')
		{
			$keys = array_keys($where);
			print_r($keys);
			$values = array_values($where);
			print_r($values);

			foreach ($where as $key => $value)
			{
				$select .= "where ".$key." = ".$value."AND"; 
			}
			$select = rtrim($select,"AND");
		}
		
		//echo 
		
		// /exit;
		$result = $this->conn->query($select);
		
		if($result->num_rows >=1)
		{
			while($data = mysqli_fetch_assoc($result))
			{
				$allData[] = $data;
			}
			//echo "<pre>";
			//print_r($allData);
			return $allData;
		}
		else
		{
			return 0;
		}
	}
	public function delete($tbl,$id)
	{
		echo $sql = "delete from $tbl where user_id = $id";
		$result = $this->conn->query($sql);
		if($result)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function update($tbl,$data,$id,$where)
	{
		$keys = array_keys($data);
		//print_r($keys);
		$val = array_values($data);
		//print_r($val);

		$sql = 'Update '.$tbl.' Set ';
		foreach($data as $key => $values)
		{
			$sql .= $key."="."'$values'".",";
		}
		$sql = rtrim($sql,',');
		$sql .= " Where ";
		foreach($where as $key => $values)
		{
			$sql .= $key." ="."'$values'".",";
		}
		$sql = rtrim($sql,',');
		// echo $sql;
		// exit;

		$result = $this->conn->query($sql);
		if($result)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

}
?>