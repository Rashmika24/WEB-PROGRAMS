<?php
<?php
$file='count.txt';
$count=strval(file_get_contents(file));
file_put_contents($file,$count+1); 
echo("You are visitor number:$count");
?>
<body>
    <h1>Welcome to the website</h1>
</body>
