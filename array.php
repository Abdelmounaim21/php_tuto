  
<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
 $arr= array(23,232,313,43,54);

echo "arr[2]:". $arr[2];

echo "<br/>";
echo "arr". print_r($arr);

echo "<br/>";
$arr[2]=314;
echo "arr[2]:". $arr[2];
$arr[]=555;
echo "<br/>";
echo "arr". print_r($arr);

$items= array(1,"hussein",3.4 );
echo "<br/>";
echo "items[1]:". $items[1];

$itemsarray= array(1,"hussein",array(1,44,32,43 ) );
echo "<br/>";
echo "itemsarray[0]:". $itemsarray[1];
echo "<br/>";
echo "itemsarray[2][1]:". $itemsarray[2][1];
echo "<br/>";
echo "itemsarrayIn:".  print_r($itemsarray[2]);
 ?>
</br>
 Max number: <?php    echo max($arr );   ?>
 </br>
 Min number: <?php    echo min($arr );   ?>
 </br>
 Count number: <?php    echo count($arr);   ?>
  <br/>
  Arry order sort <?php sort($arr); echo print_r($arr );   ?>
    <br/>
  Arry rever sort <?php rsort($arr); echo print_r($arr);   ?>

  <br/>
  Is 23 in array <?php echo in_array(23, $arr);     ?>
   <br/>
  Is 12 in array <?php echo in_array(12, $arr);     ?>
</body>
</html>