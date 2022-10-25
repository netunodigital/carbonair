<?php
$rss = new DOMDocument();
$rss->load('https://medium.com/feed/@carbonairenergy');
$list = array();
	
foreach ($rss->getElementsByTagName('item') as $node) {
$item = array ( 
'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
'descript' => $node->getElementsByTagName('encoded')->item(0)->nodeValue,
'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
);

array_push($list, $item);
}
	
echo json_encode($list)
?>
