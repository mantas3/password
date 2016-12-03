<?php
function random_str($length = 32, $keyspace = '!#$%&()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;}
?>

<html>
<head>
    <title>Password generator</title>
</head>
<body>
<div align="center">
    <input id="password" style="width: 500px; height: 50px; font-size: large; text-align: center; margin: 25px" value="<?php echo random_str();?>">
</div>
<div align="center">
    <button id="generate-button" style="width: 100px; height: 50px">Generate</button>
    <button id="copy-button" style="width: 100px; height: 50px" data-clipboard-target="#password">Copy</button>
</div>
<script>
    document.querySelector("#generate-button").onclick = function() {
        document.location.reload();
    };
    document.querySelector("#copy-button").onclick = function() {
        document.querySelector("#password").select();
        document.execCommand('copy');
    };
</script>