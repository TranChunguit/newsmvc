<?php
include_once("application/models/modeladmin.php");
include_once("includes/pagination.php");
class Controladmin
{
	public function __construct()
	{
		$this->model = new Modeladmin();
	 if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 		
	}
	public function loadhome()
	{
		loadheader("backend/header.php");			
		$data['records']=$this->model->Mloadhome();
		render("backend/home.php",$data);
	}
	public function loadaccountadmin()
		{
			loadheader("backend/header.php");			
			$data['records']=$this->model->Mloadaccountadmin();
			render("backend/accountadmin.php",$data);
		}
		public function loadaccountmember()
		{
			loadheader("backend/header.php");			
			$data['records']=$this->model->Mloadaccountmember();
			render("backend/accountmember.php",$data);
		}
		public function loadcategorynews()
		{
			loadheader("backend/header.php");			
			$data['records']=$this->model->Mloadcategory();
			render("backend/categorynews.php",$data);
		}
		public function loadnews()
		{
			$limit = 8;			
			$total = $this->model->countNews();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controladmin&m=loadnews";			
			$data['listpage']=Pagination::pagesList($pages,$base_url);					
			$data['records']=$this->model->Mloadnews($start,$limit);
			loadheader("backend/header.php");					
			render("backend/news.php",$data);
		}
		public function insertnews()
		{
				if(isset($_POST['insert']))
			{
				$title = $_POST['title'];
				$content = $_POST['content'];		
					if($_FILES['image']['name']!=NULL)				
					{
						if($_FILES['image']['type']=="image/jpeg"||$_FILES['image']['type']=="image/png"||$_FILES['image']['type']=="image/gif")
						{
								$path="public/images/";
								$tmp_name = $_FILES['image']['tmp_name'];
								$name = $_FILES['image']['name'];
								$type=$_FILES['image']['type'];
								$size=$_FILES['image']['size'];
								$time = date("Ymdhis");
								move_uploaded_file($tmp_name,$path.$time.$name);
								$image=$path.$time.$name;
								
						}
					}
					else
					{
						$image="";
					}
				$category = $_POST['categorynews'];
				$id = $_SESSION['data']['id'];
				$summary = $_POST['summary'];	
				$now = getdate(); 
				$datepost = $now["year"] . "/" . $now["mon"]. "/".$now["mday"];
				$data = array(
				'title' => $title,
				'content' => $content,
				'image' => $image,
				'categorynews' => $category,
				'id' => $id,
				'datepost' =>(string)$datepost,	
				'summary' => $summary
				);
				$table = 'news';
				$this->model->Minsertnews($table,$data,$tf=false);
				redirect("index.php?c=Controladmin&m=loadnews");
			}
		}
		public function loadinsertnews()
		{
			loadheader("backend/header.php");
			loadheader("backend/insertnews.php");
		}	
		public function loadinsertaccount()
		{
			loadheader("backend/header.php");
			loadheader("backend/insertaccount.php");
		}	
		public function insertaccountadmin()
		{
			if(isset($_POST['insert']))
			{				
				$username = $_POST['username'];
				$pass = md5($_POST['pass']);
				$email = $_POST['email'];
				$role = 1;				
				$this->model->Minsertaccount($username,$pass,$email,$role);
				redirect("index.php?c=Controladmin&m=loadaccountadmin");
			}
		}
		public function insertaccountmember()
		{
			if(isset($_POST['insert']))
			{				
				$username = $_POST['username'];
				$pass = md5($_POST['pass']);
				$email = $_POST['email'];
				$role = 0;				
				$this->model->Minsertaccount($username,$pass,$email,$role);
				redirect("index.php?c=Controladmin&m=loadaccountmember");
			}
		}		
		public function loadupdateaccount()
		{
			$a['records']= $this->model->Mloadupdateaccount();
			loadheader("backend/header.php");
			render("backend/updateaccount.php",$a);
			
		}
		public function updateaccount()
		{
			if(isset($_POST['update']))
			{
				$id = $_POST['id'];
				$username = $_POST['username'];
				$pass = md5($_POST['pass']);
				$email = $_POST['email'];
				$role = $_POST['role'];				
				$this->model->Mupdateaccount($id,$username,$pass,$email,$role);
				if($role==1)
				{
					redirect("index.php?c=Controladmin&m=loadaccountadmin");
				}
				else
					if($role==0)
				{
					redirect("index.php?c=Controladmin&m=loadaccountmember");
				}
				
			}
		}
		public function deleteaccount()
		{
			$id = $_GET['id'];
			$this->model->Mdeleteaccount($id);
			if($role==1)
				{
					redirect("index.php?c=Controladmin&m=loadaccountadmin");
				}
				else
					if($role==0)
				{
					redirect("index.php?c=Controladmin&m=loadaccountmember");
				}
				
		}
		public function loadupdatenews()
		{
			$a['records'] = $this->model->Mloadupdatenews();
			loadheader("backend/header.php");
			render("backend/updatenews.php",$a);			
		} 
		public function deletenews()
		{
			$id = $_GET['id'];
			$this->model->Mdeletenews($id);
			redirect("index.php?c=Controladmin&m=loadnews");
		}
		public function updatenews()
		{
			if(isset($_POST['update']))
			{
				$idnews = $_POST['idnews'];
				$title = $_POST['title'];
				if($_FILES['image']['name']!=NULL)				
					{
						if($_FILES['image']['type']=="image/jpeg"||$_FILES['image']['type']=="image/png"||$_FILES['image']['type']=="image/gif")
						{
								$path="public/images/";
								$tmp_name = $_FILES['image']['tmp_name'];
								$name = $_FILES['image']['name'];
								$type=$_FILES['image']['type'];
								$size=$_FILES['image']['size'];
								$time = date("Ymdhis");
								move_uploaded_file($tmp_name,$path.$time.$name);
								$image=$path.$time.$name;
								
						}
					}
					else
					{
						$image = $_POST['imagetxt'];
					}
				$content = $_POST['content'];
				$summary = $_POST['summary'];
				$now = getdate(); 
				$id = $_SESSION['data']['id'];
				$datepost = $now["year"] . "/" . $now["mon"]. "/".$now["mday"];
				$this->model->Mupdatenews($idnews,$title,$image,$content,$summary,$datepost,$id);
				redirect("index.php?c=Controladmin&m=loadnews");
			}
		}
}
