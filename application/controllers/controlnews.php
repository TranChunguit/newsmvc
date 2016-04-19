<?php
include_once("application/models/modelnews.php");
include_once("includes/pagination.php");
class Controlnews
{
	public function __construct()
	{
		$this->model = new Modelnews();	
		 if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 	
	}
	public function loadlogin()
	{
		loadheader("frontend/hlogint.php");
	}
	public function loadlogout()
	{
		loadheader("frontend/hlogout.php");
	}
	public function loadhome()
		{	
			$now = getdate(); 
			$datepost = $now["year"] . "/" . $now["mon"]. "/".$now["mday"];	
			$limit = 4;			
			$total = $this->model->countHome($datepost);
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadhome";
			$data['listpage']=Pagination::pagesList($pages,$base_url);					
			$data['records']=$this->model->Mloadhome($start,$limit,$datepost);
			loadheader("frontend/header.php");	
			render("frontend/home.php",$data);
		}
	public function loadworld()
		{		
			
			$limit = 4;
			$total = $this->model->countWorld();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadworld";
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			$data['records']=$this->model->Mloadworld($start,$limit);
			loadheader("frontend/header.php");			
			render("frontend/world.php",$data);
		}
	public function loadsignin()
		{
			$data=array();
			loadheader("frontend/signin.php",$data);
		}
		public function signin()
		{
			$data = array();
			if(isset($_POST['signin']))
			{
				$user = addslashes($_POST['user']);
				$pass = addslashes($_POST['pass']);
				$email = addslashes($_POST['email']);
				$this->model->Msignin($user,$pass,$email);
				if($this->model==TRUE)
				{
					loadheader("frontend/header.php");
					loadheader("frontend/home.php");
				}
				else
				{
					echo"vui lòng đăng ký lại";
				}
			}
		}
	public function login()
		{
			$data=array();
			if(isset($_POST['login']))
			{	$username=addslashes($_POST['username']);
				$pass=addslashes($_POST['password']);
				$this->model->Mlogin($username,$pass);	
				if($this->model==TRUE)
				{
					$role = $_SESSION['data']['role'];				
					if($role==1)						
					{					
						redirect("index.php?c=Controladmin&m=loadhome");	
						
					}
						
					else
						if($role==0)
						{
							redirect("index.php?c=Controlnews&m=loadhome");
						}							
				}				
				else
				{
					echo "loi";
				}
			}
				 
		}
		
		public function logout()
		{
			if(isset($_SESSION['data']['username']))
			{
				unset($_SESSION['data']['username']);
			}
			redirect("index.php?c=Controlnews&m=loadworld");
		}
		public function loadpolitics()
		{			
				
			$limit = 4;
			$total = $this->model->countPolitics();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadpolitics";
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			$data['records']=$this->model->Mloadpolitics($start,$limit);
			loadheader("frontend/header.php");
			render("frontend/politics.php",$data);
		}
		public function loadbusiness()
		{			
			$limit = 4;
			$total = $this->model->countBusiness();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadbusiness";			
			$data['records']=$this->model->Mloadbusiness($start,$limit);
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			loadheader("frontend/header.php");
			render("frontend/business.php",$data);
		}
		public function loadtech()
		{
			$limit = 4;		
			$total = $this->model->countTech();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);	
			$base_url="index.php?c=controlnews&m=loadtech";			
			$data['records']=$this->model->Mloadtech($start,$limit);
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			loadheader("frontend/header.php");
			render("frontend/technology.php",$data);
		}
		public function loadsportrun()
		{
			$limit = 4;			
			$total = $this->model->countRun();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadsportrun";			
			$data['records']=$this->model->Mloadrunning($start,$limit);
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			loadheader("frontend/header.php");
			render("frontend/sports.php",$data);
		}
		public function loadsportbd()
		{
			$limit = 4;		
			$total = $this->model->countBad();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);	
			$base_url="index.php?c=controlnews&m=loadsportbd";			
			$data['records']=$this->model->Mloadbadminton($start,$limit);
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			loadheader("frontend/header.php");
			render("frontend/sports.php",$data);
		}
		public function loadsportft()
		{
			$limit = 4;			
			$total = $this->model->countFootbal();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadsportft";
			$data['listpage']=Pagination::pagesList($pages,$base_url);					
			$data['records']=$this->model->Mloadfootbal($start,$limit);
			loadheader("frontend/header.php");			
			render("frontend/sports.php",$data);
		}
		public function loadsport()
		{
			$limit = 4;			
			$total = $this->model->countSport();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadsport";			
			$data['listpage']=Pagination::pagesList($pages,$base_url);					
			$data['records']=$this->model->Mloadsport($start,$limit);
			loadheader("frontend/header.php");	
			render("frontend/sports.php",$data);
		}
		public function loadhealth()
		{
			$limit = 4;
			$total = $this->model->countHealth();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadhealth";
			$data['listpage']=Pagination::pagesList($pages,$base_url);
			$data['records']=$this->model->Mloadhealth($start,$limit);
			loadheader("frontend/header.php");			
			render("frontend/health.php",$data);
		}
		public function loadscience()
		{
			$limit = 4;			
			$total = $this->model->countScience();
			$start = Pagination::rowStart($limit);
			$pages = Pagination::tongtrang($limit,$total);
			$base_url="index.php?c=controlnews&m=loadscience";			
			$data['listpage']=Pagination::pagesList($pages,$base_url);					
			$data['records']=$this->model->Mloadscience($start,$limit);
			loadheader("frontend/header.php");			
			render("frontend/science.php",$data);
		}
		public function worlddetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mworlddetail();
			render("frontend/worlddetail.php",$data);
		}
		public function politicsdetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mpoliticsdetail();
			render("frontend/politicsdetail.php",$data);
		}
		public function businessdetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mbusinessdetail();
			render("frontend/businessdetail.php",$data);
		}
		public function healthdetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mhealthdetail();
			render("frontend/healthdetail.php",$data);
		}
		public function sciencedetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Msciencedetail();
			render("frontend/sciencedetail.php",$data);
		}
		public function sportdetail()
		{
			$id = $_GET['id'];
			loadheader("frontend/header.php");
			switch($id)
			{
				case 'SF':
				$data['records']=$this->model->Mfootbaldetail(); break;
				case 'SB':
				$data['records']=$this->model->Mbadmintondetail(); break;
				case 'SR':
				$data['records']=$this->model->Mrunningdetail();break;
				default:
				$data['records']=$this->model->Msportdetail();break;
			}
			render("frontend/sportdetail.php",$data);
		}
		
		public function techdetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mtechdetail();
			render("frontend/techdetail.php",$data);
			
		}
		public function homedetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Mhomedetail();
			render("frontend/homedetail.php",$data);
		}
		public function search()
		{
			if(isset($_REQUEST['submit']))
			{
				$search = addslashes($_POST['search']);
				if(empty($search))
				{
					redirect("index.php?c=controlnews&m=loadhome");
				}
				else
				{		
					$data['records']=$this->model->Msearch($search);
					loadheader("frontend/header.php");
					render("frontend/search.php",$data);
				}
			}
		}
		public function searchdetail()
		{
			loadheader("frontend/header.php");			
			$data['records']=$this->model->Msearchdetail();
			render("frontend/searchdetail.php",$data);
		}
		
}

