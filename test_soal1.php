$data = array (1, 2, 4, 3, 10, 11, 20, 5, 100, 200);

$check;
foreach ($data as $check)
{
  echo $check;
  if ($check == 5)
    {
      echo "Fizz";
    }
  else if ($check == 11)
    {
      echo "Buzz";
    }
  echo "\n";
}
