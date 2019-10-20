<?php

$str = "<html>
    <head>
<title>Test</title>
    </head>
    <body>
<B>12345</B>
<I>qwerty</i>
<pre>jljl</pre>
    </body>
   </html>";

$body = preg_split('~<body>~', $str)[1];
$body = preg_split('~</body>~', $body)[0];

$res = preg_replace(
    ['~<[^/>]+>~', '~</[^>]+>~'],
    ["", "</br>"],
    $body);

echo preg_replace('~'.$body.'~', $res, $str);
