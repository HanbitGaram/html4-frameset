<?php
function generateHex($length=16,$b=false){
    $_ = "";
    for($i=0; $i<$length; $i++) $_ .= hex2bin(substr(str_shuffle("0123456789abcdef"),0,1).substr(str_shuffle("0123456789abcdef"),0,1));
    if($b!==false) return base64_encode($_);
    return $_;
}

echo "<h1>일반적인 사용법</h1>";

$hex = 'generateHex';
echo <<<DATA
<div class="colorscripter-code" style="color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table class="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color:#fafafa;border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px;border-right:2px solid #e5e5e5"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#666;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div><div style="line-height:130%">8</div><div style="line-height:130%">9</div><div style="line-height:130%">10</div><div style="line-height:130%">11</div><div style="line-height:130%">12</div><div style="line-height:130%">13</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">&lt;?php</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#999999">//&nbsp;키&nbsp;값은&nbsp;새로고침&nbsp;하면&nbsp;계속&nbsp;변합니다.</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">const&nbsp;HB_ENCRYPT_KEY&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span>&nbsp;<span style="color:#63a35c">"{$hex(16,true)}"</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">const&nbsp;HB_ENCRYPT_IV&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span>&nbsp;<span style="color:#63a35c">"{$hex(16,true)}"</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#a71d5d">function</span>&nbsp;hanbitgaram_aes_encrypt(<span style="color:#066de2">\$data</span>=<span style="color:#63a35c">""</span>){</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">return</span>&nbsp;<span style="color:#066de2">base64_encode</span>(openssl_encrypt(<span style="color:#066de2">\$data</span>,&nbsp;<span style="color:#63a35c">"aes-256-cbc"</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY),&nbsp;<span style="color:#0099cc">true</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_IV)));</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#999999">//&nbsp;출력이&nbsp;FALSE로&nbsp;뜰&nbsp;수&nbsp;있음</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#a71d5d">function</span>&nbsp;hanbitgaram_aes_decrypt(<span style="color:#066de2">\$data</span>=<span style="color:#63a35c">""</span>){</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">return</span>&nbsp;openssl_decrypt(<span style="color:#066de2">base64_decode</span>(<span style="color:#066de2">\$data</span>),&nbsp;<span style="color:#63a35c">"aes-256-cbc"</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY),&nbsp;<span style="color:#0099cc">true</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_IV));</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div></div><div style="text-align:right;margin-top:-13px;margin-right:5px;font-size:9px;font-style:italic"><a href="http://colorscripter.com/info#e" target="_blank" style="color:#e5e5e5text-decoration:none">Colored by Color Scripter</a></div></td><td style="vertical-align:bottom;padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none;color:white"><span style="font-size:9px;word-break:normal;background-color:#e5e5e5;color:white;border-radius:10px;padding:1px">cs</span></a></td></tr></table></div>
DATA;

echo "<h1>여러가지 목적으로 사용하기</h1>";
echo <<<DATA
<div class="colorscripter-code" style="color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table class="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color:#fafafa;border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px;border-right:2px solid #e5e5e5"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#666;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div><div style="line-height:130%">8</div><div style="line-height:130%">9</div><div style="line-height:130%">10</div><div style="line-height:130%">11</div><div style="line-height:130%">12</div><div style="line-height:130%">13</div><div style="line-height:130%">14</div><div style="line-height:130%">15</div><div style="line-height:130%">16</div><div style="line-height:130%">17</div><div style="line-height:130%">18</div><div style="line-height:130%">19</div><div style="line-height:130%">20</div><div style="line-height:130%">21</div><div style="line-height:130%">22</div><div style="line-height:130%">23</div><div style="line-height:130%">24</div><div style="line-height:130%">25</div><div style="line-height:130%">26</div><div style="line-height:130%">27</div><div style="line-height:130%">28</div><div style="line-height:130%">29</div><div style="line-height:130%">30</div><div style="line-height:130%">31</div><div style="line-height:130%">32</div><div style="line-height:130%">33</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">&lt;?php</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">const&nbsp;HB_ENCRYPT_KEY_IV_LIST&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'basic'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'KEY'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span>,</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'IV'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;],</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'jumin'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'KEY'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span>,</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'IV'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;],</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'card'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'KEY'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span>,</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'IV'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;],</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'passport'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'KEY'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span>,</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'IV'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;],</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'bio'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;[</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'KEY'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span>,</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#63a35c">'IV'</span>&nbsp;<span style="color:#0086b3"></span><span style="color:#a71d5d">=</span><span style="color:#0086b3"></span><span style="color:#a71d5d">&gt;</span>&nbsp;<span style="color:#63a35c">'{$hex(16,true)}'</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;],</div><div style="padding:0 6px; white-space:pre; line-height:130%">];</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#a71d5d">function</span>&nbsp;hanbitgaram_aes_encrypt(<span style="color:#066de2">\$type</span>=<span style="color:#63a35c">""</span>,&nbsp;<span style="color:#066de2">\$data</span>=<span style="color:#63a35c">""</span>){</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">if</span>(<span style="color:#0086b3"></span><span style="color:#a71d5d">!</span><span style="color:#066de2">isset</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>]))&nbsp;<span style="color:#a71d5d">return</span>&nbsp;<span style="color:#0099cc">false</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">return</span>&nbsp;<span style="color:#066de2">base64_encode</span>(openssl_encrypt(<span style="color:#066de2">\$data</span>,&nbsp;<span style="color:#63a35c">"aes-256-cbc"</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>][<span style="color:#63a35c">'KEY'</span>]),&nbsp;<span style="color:#0099cc">true</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>][<span style="color:#63a35c">'IV'</span>])));</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#a71d5d">function</span>&nbsp;hanbitgaram_aes_decrypt(<span style="color:#066de2">\$type</span>=<span style="color:#63a35c">""</span>,&nbsp;<span style="color:#066de2">\$data</span>=<span style="color:#63a35c">""</span>){</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">if</span>(<span style="color:#0086b3"></span><span style="color:#a71d5d">!</span><span style="color:#066de2">isset</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>]))&nbsp;<span style="color:#a71d5d">return</span>&nbsp;<span style="color:#0099cc">false</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a71d5d">return</span>&nbsp;openssl_decrypt(<span style="color:#066de2">base64_decode</span>(<span style="color:#066de2">\$data</span>),&nbsp;<span style="color:#63a35c">"aes-256-cbc"</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>][<span style="color:#63a35c">'KEY'</span>]),&nbsp;<span style="color:#0099cc">true</span>,&nbsp;<span style="color:#066de2">base64_decode</span>(HB_ENCRYPT_KEY_IV_LIST[<span style="color:#066de2">\$type</span>][<span style="color:#63a35c">'IV'</span>]));</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div></div><div style="text-align:right;margin-top:-13px;margin-right:5px;font-size:9px;font-style:italic"><a href="http://colorscripter.com/info#e" target="_blank" style="color:#e5e5e5text-decoration:none">Colored by Color Scripter</a></div></td><td style="vertical-align:bottom;padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none;color:white"><span style="font-size:9px;word-break:normal;background-color:#e5e5e5;color:white;border-radius:10px;padding:1px">cs</span></a></td></tr></table></div>
DATA;

// end