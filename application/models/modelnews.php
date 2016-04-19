<?php
header('Content-Type: text/html; charset=UTF-8');
class Modelnews 
{
	public function __construct()
	{
		$this->db= new Connectdb();
		$this->db->connect();
		 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	}
	public function Mlogin($username,$password)
		{
			$query = mysql_query("select id,username,pass,email,role from account where username='$username'");
			if(mysql_num_rows($query)==0)
			{
				echo"tên đăng nhập không tồn tại.<a href='javascript: history.go(-1)'>Trở lại</a>";
			}
			else
			{
				$password=md5($password);
				$row = mysql_fetch_array($query);			
				if($password==$row['pass'])
				{
					$data = array();
					$data['id']=$row['id'];
					$data['username']=$row['username'];
					$data['pass']=$row['pass'];
					$data['email']=$row['email'];
					$data['role']=$row['role'];
					$_SESSION['data']=$data;
					return true;
				}
				else
				{
					echo "mật khẩu không đúng.<a href='javascript: history.go(-1)'>Trở lại</a>";
				}
				
			}
		}
		public function Msignin($user,$pass,$email)
		{
			//kiểm tra nhập đầy đủ thông tin đăng nhập
			if(!$user||!$pass||!$email)
			{
				echo "vui lòng nhập đầy đủ thông tin.<a href='javascript: history.go(-1)'>Trở lại</a>";
				exit;
			}
			//mã hóa mật khẩu
			$pass = md5($pass);
			//kiểm tra định dạng email có đúng không
			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
				{
					echo "email này không hợp lệ, vui lòng nhập email khác.<a href='javascript: history.go(-1)'>Trở lại</a>";
					exit;
				}
				//kiểm tra email đã có người dùng chưa
				if(mysql_num_rows(mysql_query("select email from account where email='$email'"))>0)
				{
					echo "email này đã có người dùng,vui lòng chọn email khác.<a href='javascript: history.go(-1)'>Trở lại</a>";
					exit;
				}
				//lưu thông tin thành viên vào bảng
				$add = mysql_query("insert into account(username,pass,email,role) value('$user','$pass','$email',0)");
				if($add)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		
		public function Mloadworld($start,$limit)
		{$sql="select idnews,title,image,summary 
			from news,category where news.categorynews = category.categorynews and news.categorynews='W'limit $start,$limit";		
			return $this->db->db_get_all($sql);
		}
		public function Mloadhome($start,$limit,$datepost)
		{
			$sql = "select idnews, title, image,summary from news where datepost='$datepost' limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countHome($datepost)
		{
			$sql="select idnews
			from news where datepost='$datepost' limit 10";
			return $this->db->count_row($sql);
		}
		public function countWorld()
		{
			$sql="select idnews
			from news,category where news.categorynews = category.categorynews and news.categorynews='W'";
			return $this->db->count_row($sql);
		}
		public function Mloadpolitics($start,$limit)
		{
			$sql="select idnews,title,image,summary from news,category where news.categorynews = category.categorynews and news.categorynews='P'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countPolitics()
		{
			$sql="select idnews from news,category where news.categorynews = category.categorynews and news.categorynews='P'";
			return $this->db->count_row($sql);
		}
		public function Mloadbusiness($start,$limit)
		{
			$sql="select idnews,title,image,summary from news,category where news.categorynews = category.categorynews and news.categorynews='B'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countBusiness()
		{
			$sql="select idnews
			from news,category where news.categorynews = category.categorynews and news.categorynews='B'";
			return $this->db->count_row($sql);
		}
		public function Mloadtech($start,$limit)
		{
			$sql="select idnews,title,image,summary from news,category where news.categorynews = category.categorynews and news.categorynews='T'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countTech()
		{
			$sql="select idnews
			from news,category where news.categorynews = category.categorynews and news.categorynews='T'";
			return $this->db->count_row($sql);
		}
		public function Mloadsport($start,$limit)
		{
			$sql="select idnews,title,image,summary,news.categorynews from news,category where news.categorynews = category.categorynews and news.categorynews='SP'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countSport()
		{
			$sql="select idnews from news where categorynews='SP'";
			return $this->db->count_row($sql);
		}
		public function Mloadfootbal($start,$limit)
		{
			$sql="select idnews,title,image,summary,news.categorynews from news,category where news.categorynews = category.categorynews and news.categorynews='SF'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countFootbal()
		{
			$sql="select idnews from news where categorynews='SF'";
			return $this->db->count_row($sql);
		}
		public function Mloadbadminton($start,$limit)
		{
			$sql="select idnews,title,image,summary,news.categorynews from news,category where news.categorynews = category.categorynews and news.categorynews='SB'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countBad()
		{
			$sql="select idnews from news where categorynews='SB'";
			return $this->db->count_row($sql);
		}
		public function Mloadrunning($start,$limit)
		{
			$sql="select idnews,title,image,summary,news.categorynews from news,category where news.categorynews = category.categorynews and news.categorynews='SR'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countRun()
		{
			$sql="select idnews from news where categorynews='SR'";
			return $this->db->count_row($sql);
		}
		public function Mloadscience($start,$limit)
		{
			$sql="select idnews,title,image,summary from news,category where news.categorynews = category.categorynews and news.categorynews='S'
			limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countScience()
		{
			$sql="select idnews from news where categorynews='S'";
			return $this->db->count_row($sql);
		}
		public function Mloadhealth($start,$limit)
		{
			$sql="select idnews,title,image,summary 
			from news,category where news.categorynews = category.categorynews and news.categorynews='H'limit $start,$limit";
			return $this->db->db_get_all($sql);
		}
		public function countHealth()
		{
			$sql="select idnews from news where categorynews='H'";
			return $this->db->count_row($sql);
		}
		public function Mhealthdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='H'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Msciencedetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='S'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mrunningdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='SR'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mbadmintondetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='SB'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mfootbaldetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='SF'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Msportdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='SP'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mtechdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='T'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mbusinessdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='B'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mpoliticsdetail()
		{
			
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='P'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mworlddetail()
		{
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,category,account where news.categorynews = category.categorynews and news.categorynews='W'
			and news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Msearch($search)
		{
			$sql = " select idnews,title,image,summary from news where title like '%$search%'";
			return $this->db->db_get_all($sql);
		}
		public function Msearchdetail()
		{
			$id = $_GET['idnews'];
			$sql="select title,image,content,username,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,account where news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
		public function Mhomedetail()
		{
			$id = $_GET['idnews'];
			$sql="select title,image,content,username ,DATE_FORMAT(datepost,'%e %M, %Y') as datepost from news,account where news.id = account.id and idnews='$id'";
			return $this->db->db_get_all($sql);
		}
}