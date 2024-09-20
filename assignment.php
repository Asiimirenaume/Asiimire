<?php

function call_name(): string{
  $name = "ASIIMIRE NAUME";

return $name;
}

function my_age($c_year, $dob): float|int{
  $age = $c_year - $dob;
return $age;
}

function home_address(): string{
  $address = "Uganda-Kabale-Rwakaraba";
  return $address;
}
print ("Good afternoon ".call_name()."! <br> You are born of 2003 and your home address is ".home_address()."<br>"."You are ".my_age(c_year: 2024, dob: 2003));

