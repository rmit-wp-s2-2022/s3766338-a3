<?php
class ValidateForm
{
  private $err = '';
  private $value;
  private $field;
  function __construct()
  {
  }

  function init($field)
  {
    $this->value = $_POST[$field];
    $this->field = $field;
    return $this;
  }

  function validateID()
  {
    $str = $this->value;
    $pattern = "/^[s][0-9]{7}$/i";
    if (preg_match($pattern, $str) == 0) {
      $this->err =  ' invalid ID ';
    }
    return $this;
  }

  function validateName()
  {
    $str = $this->value;
    $pattern = "/^[A-Z][a-zA-Z]{1,}$/i";
    if (preg_match($pattern, $str) == 0) {
      $this->err =  ' invalid format, must start with uppercase and only contain letter ';
    }
    return $this;
  }

  function validPhoneNumber()
  {
    $str = $this->value;
    $pattern = "/^04[0-9]{8}$/i";
    if (preg_match($pattern, $str)==0) {
      $this->err = ' phonenumber invalid, phonenumber must start with 04 and followed by 8 digits';
    }
    return  $this;
  }
  function echoError()
  {
    return strlen($this->err) ? $this->err : '';
  }
}

$validform = new ValidateForm();
$validID = $validform->init('id')->validateID()->echoError();
$validfirstname = $validform->init('firstname')->validateName()->echoError();
$validlastname = $validform->init('lastname')->validateName()->echoError();
$validmobilephone = $validform->init('mobilephone')->validPhoneNumber()->echoError();

if (!empty($validID)) {
  header('location:create.php?validID=' . $validID);
  exit;
} else {
  if (!empty($validfirstname)) {
    header('location:create.php?validfirstname=' . $validfirstname);
    exit;
  } else {
    if (!empty($validlastname)) {
      header('location:create.php?validlastname=' . $validlastname);
      exit;
    } else {
      if (!empty($validmobilephone)) {
        header('location:create.php?validmobilephone=' . $validmobilephone);
        exit;
      } else {
        header('location:index.php');
        exit;
      }
    }
  }
}
