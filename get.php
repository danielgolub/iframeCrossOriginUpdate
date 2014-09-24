<?php
/*
 * Daniel Golub - www.DanielGolub.com
*/

// get the website content
$html = file_get_contents("http://danielgolub.com/");

// replace all the paths for assets
$html = str_replace("/style/", "http://danielgolub.com/style/", $html);
$html = str_replace('css/', "http://danielgolub.com/css/", $html);
$html = str_replace('js/', "http://danielgolub.com/js/", $html);
$html = str_replace("data/", "http://danielgolub.com/data/", $html);
$html = str_replace("/javascript/", "http://danielgolub.com/javascript/", $html);

// insert whatever is required (in this case jquery color animation, css file and js file)
$html = str_replace('</head>','<link rel="stylesheet" href="http://danielgolub.com/Projects/iframe/editor.css" /></head>', $html);
$html = str_replace('</body>','<script type="text/javascript" src="http://danielgolub.com/Projects/iframe/jquery.animate-colors-min.js"></script></body>', $html);
$html = str_replace('</body>','<script type="text/javascript" src="http://danielgolub.com/Projects/iframe/editor.js"></script></body>', $html);

// print the resulted context
echo $html;

?>