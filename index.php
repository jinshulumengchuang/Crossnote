<?php
$mycontent = file_get_contents('note.txt');
echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title>Cross Note</title>
<div class="mdui-appbar  mdui-appbar-fixed">
<div class="mdui-toolbar mdui-color-indigo">
<a  class="mdui-typo-title">Cross Note</a>
<div class="mdui-toolbar-spacer"></div>
<a onclick="mysave()" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">save</i></a>
</div>
</head>
<body class="mdui-appbar-with-toolbar">
</div>
</div>
<div class="mdui-container" style="height: 100%;width: auto">
<div class="mdui-textfield">
  <textarea class="mdui-textfield-input" rows=8 id="note" ></textarea>
</div>
</div>
<script>
document.getElementById("note").value=`$mycontent`
function mysave() {
  var myxhr= new XMLHttpRequest()
  myxhr.open('POST', 'upload.php' , true)
  myxhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  myxhr.send('mycontent=' + document.getElementById("note").value)
}
</script>
<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
</body>
</html>
EOF;
?>
