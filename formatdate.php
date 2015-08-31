<?php
//format MySQL datetime value into a more readable string
function formatDate($val)
{
   $arr = explode('-', $val);
  return @date('j M Y', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
 // return @date('H i s Y m j', mktime(0,0,0,0,0,0, $arr[4], $arr[3],$arr[5], $arr[1], $arr[2], $arr[0]));
}
function profileDate($val)
{
   $arr = explode('-', $val);
  return date('D d M', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
}
function displayDate($val)
{
	 $arr = explode('-', $val);
  return @date('l, j M Y', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
}

echo formatDate(date('l, jS F Y'));
echo profileDate(time());
echo displayDate(time());
echo date('l, j M Y <br>');

if('31 Aug 2015' == date('j M Y'))
{
echo true;	
}
else{ echo false;}
?>
