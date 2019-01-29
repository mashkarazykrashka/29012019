<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>date</title>
  
</head>

<body>
<pre>
<?php

$arr = array("0" =>"Мячик", "1" => "Кукла", "2" => "Пирожек", "3" => "Крыса", "4" => "Дьявол");
print_r($arr);
sort($arr);
print_r($arr);

function sortirovka($sort) 
    {
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

$new = array(2,8,14,22,7);
print_r(sortirovka($new));



?>
</pre>


</body>

</html>