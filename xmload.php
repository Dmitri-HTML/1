<?php
/* Установка внутренней кодировки этого скрипта в UTF-8 */
mb_internal_encoding("WINDOWS-1251");
$internal_enc = mb_internal_encoding();

header('Content-Type:text/html; charset=utf-8');
//header('Content-Type:text/html; charset=UTF-8');

echo $without_I = file_get_contents('without_I.html').'<br/>'.'<br>'; // Русские буквы. тег div & < ῴ
echo $with_I = file_get_contents('with_I.html').'<br/>'.'<br>'; //Русские буквы. И здесь есть буква И. тег div & < ῴ

echo  $without_I_utf8 = file_get_contents('without_I_utf8.html').'<br/>'.'<br/>'; //п»їР СѓСЃСЃРєРёРµ Р±СѓРєРІС‹. С‚РµРі div & < ῴ
echo  $with_I_utf8 = file_get_contents('with_I_utf8.html').'<br/>'.'<br/>'; //п»їР СѓСЃСЃРєРёРµ Р±СѓРєРІС‹. Р Р·РґРµСЃСЊ РµСЃС‚СЊ Р±СѓРєРІР° Р. С‚РµРі div & < ῴ бїґ

define('XMLHead', "");


$domdocument = new domDocument();

$domdocument->loadHTML(XMLHead . "<html><body>" . $without_I . "</body></html>");
echo 'without_I - OK'.'<br/>'; // without_I - OK
$domdocument->loadHTML(XMLHead . "<html><body>" . $with_I . "</body></html>");
echo 'with_I - OK'.'<br/>'; // with_I - OK

$domdocument->loadHTML(XMLHead . "<html><body>" . $without_I_utf8 . "</body></html>");
echo 'without_I_utf8 - OK'.'<br/>'; // without_I_utf8 - OK
$domdocument->loadHTML(XMLHead . "<html><body>" . $with_I_utf8 . "</body></html>");
echo 'with_I_utf8 - OK'.'<br/>';
/*
Warning: DOMDocument::loadHTML() [domdocument.loadHTML]: switching encoding: encoder error in Entity, line: 1 in ...xmload.php on line 26

Warning: DOMDocument::loadHTML() [domdocument.loadHTML]: Blank needed here in Entity, line: 1 in ...xmload.php on line 26

Warning: DOMDocument::loadHTML() [domdocument.loadHTML]: input conversion failed due to input error, bytes 0x98 0x20 0xD0 0xB7 in ...xmload.php on line 26

Warning: DOMDocument::loadHTML() [domdocument.loadHTML]: encoder errorparsing XML declaration: '?>' expected in Entity, line: 1 in ...xmload.php on line 26

Warning: DOMDocument::loadHTML() [domdocument.loadHTML]: Start tag expected, '<' not found in Entity, line: 1 in ...xmload.php on line 26 with_I_utf8 - OK
 */


?>

<div style="border: solid; width: 100px; height: 100px" contenteditable="true">qwe</div>

<img src="http://salimonenko.pw/comments/uploaded_pictures/NWfPL4rcqmI.jpg" class="comment_pictures">

