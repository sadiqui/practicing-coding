<?php

require_once 'User.php';
require_once 'UserDao.php';
require_once 'UserDaoImpl.php';

class UserController {
  private $userDao;

  public function __construct(UserDao $userDao) {
    $this->userDao = $userDao;
  }

  public function getUserById($id) {
    $user = $this->userDao->getById($id);

    if ($user) {
      return $user;
    } else {
      return null;
    }
  }

  public function getAllUsers() {
    return $this->userDao->getAll();
  }

  public function createUser($username, $email) {
    $user = new User(null, $username, $email);
    $this->userDao->save($user);
    return $user;
  }

  public function updateUser($id, $username, $email) {
    $user = $this->userDao->getById($id);

    if ($user) {
      $user->setUsername($username);
      $user->setEmail($email);
      $this->userDao->update($user);
      return $user;
    } else {
      return null;
    }
  }

  public function deleteUser($id) {
    $user = $this->userDao->getById($id);

    if ($user) {
      $this->userDao->delete($user);
      return true;
    } else {
      return false;
    }
  }
}

// Usage example
$pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
$userDao = new UserDaoImpl($pdo);
$userController = new UserController($userDao);

$user = $userController->getUserById(1);
if ($user) {
  echo $user->getUsername(); // Output: The username of the user with ID 1
} else {
  echo "User not found.";
}