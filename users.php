<?php
require_once "./db.php";
session_start();
class Users
{

  private $conn;

  public function __construct()
  {
    $database = new Connection();
    $this->conn = $database->connect();
    return $this->conn;
  }

/*

- The login method first fetches the data using the email as a match
- After it has been fetched, it gets the pass word and match it against the one the use entered
*/
  private function login($email, $password)
  {
    $sql = "SELECT * FROM `users` WHERE `Email` = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$email]);
    $userData = $stmt->fetchObject();
    if ($userData) {
       //password_verify takes the entered password and match it against the one in the database
      if (password_verify($password, $userData->Password)) {
        //Login successful, set your sessions
        // $_SESSION['userId'] = $userData->ID;
        $_SESSION['userLoggedIn'] = $userData->Email;
        echo "You are logged in as $email";
      } else {
        echo "Incorrect Password";
        return false;
      }
    } else {
      echo "Incorrect email";
      return false;
    }
  }

  public function executeLogin($email, $password)
  {
    return $this->login($email, $password);
  }






  ///////////////////////////////////////////// REGISTER NEW USER //////////////////////////////////////
  private function saveNewUser($fname, $lname, $email, $password, $role)
  {
    if (!$this->checkEmailExist($email)) {
      // PASSWORD HASHING
      $password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (FirstName, LastName, Email, `Password`, `Role`) VALUES (?, ?, ?,?, ?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$fname, $lname, $email, $password, $role]);
    } else {
      echo "Email already registered";
    }
  }


  // Verifies if email already exist, before it creates a new account for that email
  private function checkEmailExist($em)
  {
    $sql = "SELECT 1 FROM `users` WHERE email = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$em]);
    return $stmt->fetchColumn();
  }

// A public method to call outside of this class
  public function executeReg($fname, $lname, $email, $password, $role)
  {
    $this->saveNewUser($fname, $lname, $email, $password, $role);
  }
}
