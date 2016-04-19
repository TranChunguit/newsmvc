<?php
class Pagination
{
	static public function tongtrang($limit,$total)
	{
		$pages = ceil($total/$limit);
		return $pages;
	}
	static public function rowStart($limit)
	{
		$page = isset($_GET['page'])?$_GET['page']:1;
		if(isset($page))
		{
			return $start = ($page-1)*$limit;
		}
		else
		{
			return $start = 0;
		}
	}
	static function  pagesList($pages,$base_url)
    {
      	$curpage = isset($_GET['page'])?intval($_GET['page']):1;
		if($curpage>3)
		{
			$frompage=$curpage-3;
		}
		else
		{
				$frompage=1;
		}
		if($curpage+3<$pages)
		{
			$topage=$curpage+3;
		}
		else{
			$topage=$pages;
		}
		
        $page_list = "";
		if($frompage>1)
		{
				$page_list .= "<a href=".$base_url."&page=1><<</a>";
		}
        for ($i=$frompage; $i<=$topage; $i++)
        {
            if ($i == $curpage)
            {
               $page_list .= "<b>".$i."</b>";
			  
            }
            else
            {
				$page_list .= "<a href=".$base_url."&page=".$i." > ".$i."</a>";
            }
            $page_list .=" ";
        }
		if($topage<$pages)
		{
			   $page_list .= "<a href=".$base_url."&page=".$pages." >>></a>";
		}
		$page_list .= "\n";
           
        return $page_list;
    }
}
