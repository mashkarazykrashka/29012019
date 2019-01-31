<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>date</title>
  
</head>

<body>
<pre>
<?php
function sortirovka($sort) 
{
	shiffle($sort);
	$n=count($sort);
	for ($k=$n; $k>=2; $k--) 
		{
			for ($i=0; $i<=$k-1; $i++) 
			{
				if ($sort[$i]<$sort[$i+1])
				{
					$b=$sort[$i+1];
					$sort[$i+1]=$sort[$i];
					$sort[$i]=$b;
				}
			}
		}
	return $sort;    
}
$new = array(2,8,14,22,7,111,97,15,72,6);
print_r(sortirovka($new));
$time_start = microtime(1);
for ($f=1; $f<=1000; $f++)
	{
		shiffle($new);
		sortirovka($new);
	}
$time_end = microtime (1);
$time1 = $time_end - $time_start;
echo "Сортировка массива из 10 элементов методом пузырька, выполненная 1000 раз занимает $time1 секунд.\n";
echo "<br>";
$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);
for ($f=1; $f<=1000; $f++)
	{
		sort($new);
	}
$time_end = microtime (1);
$time2 = $time_end - $time_start;
echo "Сортировка массива из 10 элементов с помощью встроенной функции sort, выполненная 1000 раз занимает $time2 секунд.\n";
echo "<br>";
$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
?>
</pre>
</body>

</html>
