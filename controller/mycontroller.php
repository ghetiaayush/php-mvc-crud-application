<?php
include 'model/mymodel.php';
class MyController extends MyModel
{
	public function __construct()
	{
		parent::__construct();

		
		if(isset($_SERVER['PATH_INFO'])) 
		{
		$action = $_SERVER['PATH_INFO'];

			switch($action)
			{	
				
				/*case '/dashboard':
				include 'view/admin/header.php';
				include 'view/admin/view_dashboard.php';
				break;
				
				case '/adminlogin':
				include 'view/admin/header.php';
				include 'view/admin/view_dashboard.php';
				include 'view/admin/admin_login.php';
				if(isset($_REQUEST['btn']))
				{
					$data = $_REQUEST;
					array_pop($data);
					//print_r($data);
					
					$result = $this->login('user',$data);

					echo "<pre>";
					print_r($result);
				

					if($result)
					{
						echo "Success";
					}
					else
					{
						echo "Fail";
					}
				}
				break;*/
				
				case '/insertuser':
				include 'view/admin/header.php';
				include 'view/admin/view_dashboard.php';
				if(isset($_REQUEST['btn']))
				{
					$data = $_REQUEST;
					array_pop($data);
					//print_r($data);
					
					$result = $this->insert('user',$data);
					if($result)
					{
					?>
						<script>window.locaion.href = 'dashboard';</script>
	                <?php 
	                }
				}
				include 'view/admin/insert_user.php';
				break;

				case '/viewuser':
				include 'view/admin/header.php';
				include 'view/admin/view_dashboard.php';

				$result = $this->select('user');
				//echo "<pre>";
				//print_r($result);

				include 'view/admin/view_user.php';
				break;

				case '/deleteuser':
				echo $id = $_REQUEST['id'];

				$result = $this->delete('user',$id);
				if($result)
				{
				?>
					<script>
						window.location.href = 'viewuser';
					</script>
				<?php
				}
				break;

				case '/edituser':
				
				$id = $_REQUEST['id'];
				$where = array('user_id'=>$id);
				//print_r($where);
				$data = $this->select('user',$where);
				$data = $data[0];
				//echo "<pre>";
				//print_r($data);
				//exit;
				include 'view/admin/edit_user.php';

				if(isset($_REQUEST['update_btn']))
				{
					$data = $_POST;
					array_pop($data);
					print_r($data);
					$where = array('user_id'=>$id);
					$result = $this->update('user',$data,$id,$where);
				}
				if($result)
				{
				?>
					<script>
						window.location.href = 'viewuser';
					</script>
				<?php
				}
				break;
			}
		}
		else
		{
			header("location:http://localhost/tops/mvc/adminlogin");
		}	
	}
}
$obj = new MyController();
?>