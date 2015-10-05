#!/usr/local/bin/php
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('application/helpers/MY_url_helper.php');
include('media/simpledom/simple_html_dom.php');
include('adodb/adodb.inc.php');
include('autopost/config.php');
$db = ADONewConnection($_config['dbdriver']);
$db->Connect($_config['server'],$_config['username'],$_config['password'],$_config['database']);
$db->Execute('SET character_set_results=utf8');
$db->Execute('SET collation_connection=utf8_unicode_ci');
$db->Execute('SET NAMES utf8');
$db->debug = true;

$links = get_link();
print_r($links);

if($links)
{
    foreach ($links as $key => $link)
    {
        //$db->debug =true;
        $html = file_get_html("http://intranet.m-society.go.th/".$link);
        $data['title'] = $html->find('h2',0)->plaintext;
			 // $data['detail'] = $html->find('div[class=single-getcontent]',0)->find('div[class=socialshare]',0)->outertext = '';
        $data['detail'] = $html->find('.detail',0)->innertext;
		$data['module'] = 'ข่าวประชาสัมพันธ์';
		$data['image'] = $html->find('.img_title img',0)->src;
		$data['url'] = $link;
        $data['slug'] = clean_url($data['title']);
        $data['created'] = time();
		$data['status'] = 'approve';
        $db->AutoExecute('infos',$data,'INSERT');
        print "<br>".++$key." ".$link." insert";
        unset($html);
        unset($data);
    }
    print "<br>".count($links)." records updated";
}
else
{
    print('<br>no data updated');
}



/*---------------------------------------function-----------------------------------------------*/
function get_link()
{
    global $db;
    $html = file_get_html('http://intranet.m-society.go.th/news/lists');
    foreach($html->find('.media > a') as $key => $data)
    {
        if($key == 0 )$next = $data->href;
        if (!preg_match("/^\//", $data->href)) 
        {
            $link = $data->href;
            $check = $db->GetOne('select url from infos where url = ?',array($link));
            if(!$check)
            {
                $feed[] =  $data->href;
            }
            else
            {
                if(isset($feed))
                {
                    sort($feed);
                    return $feed;
                }
                else
                {
                    return false;
                }
            }
                
        } 
    }
    if(isset($feed))
    {
        sort($feed);
        return $feed;
    }
    else
    {
        return false;
    }
}
?>