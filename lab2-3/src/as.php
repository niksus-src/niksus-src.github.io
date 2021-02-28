<html>
<body>
<?PHP
$nums=$_POST['num'];
$num = explode(" ", $nums);
$res=0;
for ($i=0; $i <6 ; $i++) { 
	switch ($num) {
    case ($num[$i]<0 && $num[$i+1]>0): ++$res; break; 
    case ($num[$i]>0 && $num[$i+1]<0): ++$res; break;
	}
}

echo '<b>'.'Результат:'.$res;
?>
</body>
</html>
