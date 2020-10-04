<?php

class User
{
  protected $username;
  private $useremail;
  public $userrole = 'member';

  public function __construct($username, $useremail)
  {
    $this->username = $username;
    $this->useremail = $useremail;
  }

  public function __destruct()
  {
    echo "the yser $this->username was removed </br>";
  }

  public function addFriend()
  {

    return  $this->username . ' new friend added';
  }
  public function message()
  {
    return $this->useremail . ' user ' . $this->username . ', admin has sent a message';
  }

  // GETTERS
  public function get_email()
  {
    return  $this->useremail;
  }


  //SETTERS
  public function set_email($useremail)
  {
    if (stripos($useremail, '@') > 0) {
      $this->useremail = $useremail;
      return 'email has been set';
    } else {
      return 'invalid email';
    }
  }
}

class AdminUser extends User
{
  public $userlevel;
  public $userrole = 'admin';
  public function __construct($username, $useremail, $userlevel)
  {
    // $this->username = $username;
    // $this->useremail = $useremail;
    parent::__construct($username, $useremail);
    $this->userlevel = $userlevel;
    // this->username acces
    $this->useremail = $useremail;
  }

  public function message()
  {
    return $this->useremail . ' user ' . $this->username . ', admin has sent a message';
  }
}


$sasha = new User('Sasha', 'sasha@sasha.com');
$slavko = new User('Slavko', 'Slavko@slavko.com');
$sale_admin = new AdminUser('Sale', 'sale@damin.com', 5);
//echo $sasha->username . '</br>';
//echo $sasha->useremail . '</br>';
echo $sasha->userrole . '</br>';


echo $sasha->addFriend() . '</br>';
//print_r(get_class_vars('User'));
//print_r(get_class_methods('User'));

//echo $sasha->set_email('joshi@joma.com').'</br>';
//echo $slavko->get_email();
//unset($sasha);
//echo '</br>';

echo $sale_admin->get_email() . '</br>';
echo $sale_admin->userlevel . '</br>';
echo $sale_admin->userrole . '</br>';
//echo $sasha->message() . '</br>';
echo $sale_admin->message() . '</br>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OO_PHP</title>
</head>

<body>

</body>

</html>