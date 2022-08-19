<?php
function random_str($length = 32, $complex = true)
{
    if($complex) {
        $keyspace = '!#$%&()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|';
    } else {
        $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    }
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
    <style>
        button {
            width: 100px;
            height: 50px;
        }
        input {
            width: 500px;
            height: 50px;
            font-size: large;
            text-align: center;
            margin:  0 25px 25px 25px;
        }
    </style>
</head>
<body>
<h2 align="center">Simple password (16 characters, letters and numbers)</h2>
<div align="center">
    <input id="password-simple" value="<?php echo random_str(16, false);?>">
</div>
<div align="center">
    <button onclick="reloadPage()">Generate</button>
    <button onclick="copyPassword('password-simple')">Copy</button>
</div>


<h2 align="center">Complex password (32 characters, letters, numbers, punctuation)</h2>
<div align="center">
    <input id="password" value="<?php echo random_str();?>">
</div>
<div align="center">
    <button onclick="reloadPage()">Generate</button>
    <button onclick="copyPassword()">Copy</button>
</div>

<script>
    function reloadPage() {
        document.location.reload();
    }

    function copyPassword(button = "password") {
        if(button == "password") {
            document.querySelector("#password").select();
        } else {
            document.querySelector("#password-simple").select();
        }
        document.execCommand('copy');
    }
</script>
