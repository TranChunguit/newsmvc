<?php
header('Content-Type: text/html; charset=UTF-8');
class Modeladmin
{
	public function __construct()
	{
		$this->db= new Connectdb();
		$this->db->connect();
	}
	public function Mloadhome()
	{	$now = getdate(); 
		$datepost = $now["year"] . "/" . $now["mon"]. "/".$now["mday"];
		$sql="select * from news,category,account where news.categorynews=category.categorynews and news.id = account.id and datepost = '$datepost'limit 10";
		return $this->db->db_get_all($sql);
	}
	public function Mloadaccountadmin()
	{
		$sql = "select id,username, pass, email from account where role=1";
		return $this->db->db_get_all($sql);
	}
	public function Mloadaccountmember()
	{
		$sql = "select id,username, pass, email from account where role=0";
		return $this->db->db_get_all($sql);
	}
	public function Mloadcategory()
	{
		$sql = "select categorynews, categoryname from category ";
		return $this->db->db_get_all($sql);
	}
	public function Mloadnews($start,$limit)
	{
		$sql = "select idnews,title, content, image, categoryname, username, datepost, summary 
		from news,category,account where news.categorynews=category.categorynews and news.id = account.id
		limit $start,$limit;";
		return $this->db->db_get_all($sql);
	}
	public function countNews()
	{
		$sql = "select title from news";
		return $this->db->count_row($sql);
	}
	public function Minsertnews($table,$data,$tf=false)
	{	
		echo $this->db->db_insert($table,$data,$tf=false);
	}
	public function Minsertaccount($username,$pass,$email,$role)
	{
		$data = array('username'=>$username,'pass'=>$pass,'email'=>$email,'role'=>$role);
		$table = 'account';
		return $this->db->db_insert($table,$data,$tf=false);
	}	
	public function Mloadupdateaccount()
	{
		$id = $_GET['id'];
		$sql = "select * from account where id = '$id'";
		return $this->db->db_get_all($sql);
	}
	public function Mupdateaccount($id,$username,$pass,$email,$role)
	{
		$data = array('username'=>$username,'pass'=>$pass,'email'=>$email,'role'=>$role);
		$table = 'account';		
		$id = array('id'=>$id);
		foreach ($id as $idaccount=>$value)
		{
			$where = $idaccount."=".$value;
		}
		$this->db->db_update($table,$data,$where,$tf=FALSE);
	}
	public function Mdeleteaccount($id)
	{
		$table = "account";
		$id = array('id'=>$id);
		foreach($id as $idaccount=>$value)
		{
			$where = $idaccount."=".$value;
		}
		return $this->db->db_delete($table, $where);
	}
	public function Mloadupdatenews()
	{
		$id = $_GET['idnews'];
		$sql = "select * from news,category,account 
		where news.categorynews = category.categorynews
		and account.id=news.id and idnews = '$id'";
		return $this->db->db_get_all($sql);
	}
	public function Mdeletenews($id)
	{
		$table = "news";
		$id = array('idnews'=>$id);
		foreach($id as $idnews=>$value)
		{
			$where = $idnews."=".$value;
		}
		return $this->db->db_delete($table,$where);
	}
	public function Mupdatenews($idnews,$title,$image,$content,$summary,$datepost,$id)
	{
		$data = array('title'=>$title,'image'=>$image,'content'=>$content,'summary'=>$summary,'datepost'=>$datepost,'id'=>$id);
		$table = 'news';
		$idnews = array('idnews'=>$idnews);
		foreach ($idnews as $idnewss=>$value)
		{
			$where = $idnewss."=".$value;
		}
		$this->db->db_update($table,$data,$where,$tf=FALSE);
	}
}