<?php
# Q1---------
echo "Q1--------------------------------------------------------------------------------<br>";
function arrayAverage($n)
{
    $arr=array_rand(range(1,10),$n);
     print_r($arr);
      echo "<br>";
    return (array_sum($arr)/count($arr));
}
$n=7;
$result = arrayAverage($n);
echo $result."<br>";



# Q2---------
echo "Q2--------------------------------------------------------------------------------<br>";
function fillArray($arr1)
{
    $arr2 =array_chunk($arr1,5);
    print_r($arr2);
}
$arr1=[1,2,3,4,5,6,7,8,9,10];
 fillArray($arr1);
echo"<br>";



# Q3---------
echo "Q3--------------------------------------------------------------------------------<br>";
function largestAndSmallest($arr)
{
    sort($arr);
    echo "Smallest number is: ".min($arr)."<br>";
    echo "Largest number is: ".max($arr);
}
$arr= [ 1,10,5,2,11];
$result = largestAndSmallest($arr);
echo $result."<br>";




# Q4---------
echo "Q4--------------------------------------------------------------------------------<br>";
function greaterAndSmaller($arr,$n)
{
    array_push($arr,$n);
    sort($arr);
   $pos =array_search($n,$arr);
    echo"Numbers Smaller than ($n)=  ".$pos."<br>";
    echo"Numbers Greater then ($n)= ".count($arr)-$pos-1;
}
$arr= [ 1,10,5,2,11];
$result = greaterAndSmaller($arr,3);

echo $result."<br>";

# Q5---------
echo "Q5--------------------------------------------------------------------------------<br>";
function firstCapitalized($arr)
{
    for($i=0;$i<count($arr);$i++)
    {
        $arr[$i]=ucwords($arr[$i]);
       
    }
     print_r($arr);
}
$arr= ["eraasoft", "backend", "group313"];
$result = firstCapitalized($arr);
echo "<br>";



# Q6---------
echo "Q6--------------------------------------------------------------------------------<br>";
function moveZeros($arr)
{
    $l=1;
    $r=0;
    while($l<count($arr)&&$r<$l)
    {
        if($arr[$l]!=0 && $arr[$r]==0)
        {
            $arr[$r]=$arr[$l];
            $arr[$l]=0;
            $r++;
            $l++;
        }
        
        else if ($arr[$l]==0 )
        {
            $l++;
        }
        else if ($arr[$r]!=0 )
        {
        if($r+1<$l)
                $r++;
            else
            $l++;
        }
        
        
    }
     return $arr;
}
$arr= [0,1,0,3,12];
$result = moveZeros($arr);
print_r($result);
echo "<br>";



# Q7---------
echo "Q7--------------------------------------------------------------------------------<br>";
function stringSearch($arr)
{
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]=="Bob")
        {
            return $i;

        }
    }
     return -1;
}
$arr= ["Alice", "Bob", "Charlie", "Dave"];
$result = stringSearch($arr);
echo $result."<br>";

$arr=  ["Alice", "Charlie", "Dave"];
$result = stringSearch($arr);
echo $result."<br>";




# Q8---------
echo "Q8--------------------------------------------------------------------------------<br>";
function secondLargestNum($arr)
{
    $max=min($arr);
    $second=$max;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]>$max)
        {
             $second=$max;
             $max=$arr[$i];

        }
    }
     return $second;
}
$arr= [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = secondLargestNum($arr);
echo $result."<br>";



# Q9---------
echo "Q9--------------------------------------------------------------------------------<br>";
function found($arr, $num)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($num == $arr[$i]) {
            echo $arr[$i] . "<br>";
            return 1;
        }
    }
    return "Not found";
}

function positiveOrNegative($num)
{
    if ($num >= 0) {
        return "Positive";
    } else {
        return "Negative";
    }
}

function numberOfDigits($num)
{
    $n = 0;
    while ($num) {
        $n++;
        $num = (int)($num / 10); 
    }
    return $n;
}

function oddOrEven($num)
{
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

function isPalindrome($num)
{
    $num = strval($num); 
    for ($i = 0, $j = strlen($num) - 1; $j != $i; $j--, $i++) {
        if ($num[$i] != $num[$j]) {
            return "Not palindrome";
        }
    }
    return "Palindrome";
}

function isPrime($num)
{
    if (oddOrEven($num) == "Even") {
        return "Not prime";
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return "Not prime";
        }
    }
    return "Prime";
}

function NumberCharacteristics($arr, $num)
{
    $result = found($arr, $num);
    if ($result == 1) {
        echo positiveOrNegative($num) . "<br>";
        echo "Number of digits= " . numberOfDigits($num) . "<br>";
        echo isPrime($num) . "<br>";
        echo oddOrEven($num) . "<br>";
        echo isPalindrome($num) . "<br>";
    } else {
        echo $result . "<br>";
    }
}

$arr = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140]; 
$n = 545;
NumberCharacteristics($arr, $n);


?>