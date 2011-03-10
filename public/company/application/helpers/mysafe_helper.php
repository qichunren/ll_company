<?php    

function uhtml($str) 
{ 
    $farr = array( 
        "/\s+/", //过滤多余空白 
         //过滤 <script>等可能引入恶意内容或恶意改变显示布局的代码,如果不需要插入flash等,还可以加入<object>的过滤 
        "/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU",
        "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",//过滤javascript的on事件 
   ); 
   $tarr = array( 
        " ", 
        "＜\1\2\3＞",//如果要直接清除不安全的标签，这里可以留空 
        "\1\2", 
   ); 
  $str = preg_replace( $farr,$tarr,$str); 
   return $str; 
}

?>