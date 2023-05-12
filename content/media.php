<?php
$anime = <<<ANIME
XWkBIBSXVEI
rU3OMG5bSiA
H1hprCJF_s4
7-FZ8i-ebKE
87ISEyqfdQU
Iym5eVHEbyA
ocI-dOLQiu4
3rGYVCHlla8
pyrbuxnHGyI
u4oxW2QvL50
42Wecm9lYRM
ANIME;
$animeList = "";
$_ = explode(PHP_EOL,$anime);
//sort($_);
foreach($_ as $k=>$v){
    $s = "";
    if($k%2===0) $s='style="background:#ccc"';
    $animeList .= "<tr><td {$s}>".($k+1)."</td><td {$s}><iframe width=\"100%\" height=\"500px\" src=\"https://www.youtube.com/embed/{$v}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; allowfullscreen; fullscreen\" allowfullscreen></iframe></td></tr>";
}
$template = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>내 버츄얼 목록</title>
    </head>
    <body>
    <p><br /></p>
    <h1 style="text-align:center;">내 버츄얼 목록</h1>
    <h3 style="text-align:center;">내가 만든 버츄얼 영상</h3>
    <p>
        이서현의 영상은 PHP계열에서 최고로 통합니다.<br />
        이 언어를 쓰는 사람이 없거든요.
    </p>
    <p><br /></p>
        <table width="100%" border="1" style="text-align:center">
            <tr>
                <th>번호</th>
                <th>영상</th>
            </tr>
            {$animeList}
       </table>
       <hr />
        Copyright 한빛가람 All Rights Reserved. <br />
        전자우편 : <a href="mailto:github.external@netko.kr">github.external@netko.kr</a>
    </body>
</html>
HTML;

file_put_contents("media.html", $template);
