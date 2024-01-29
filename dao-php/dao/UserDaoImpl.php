<?php

// Dao's Concrete implementation
class UserDaoImpl implements UserDao
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new User($result['id'], $result['username'], $result['email']);
    }

    public function getAll()
    {
        $query = "SELECT * FROM users";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($results as $result) {
            $users[] = new User($result['id'], $result['username'], $result['email']);
        }

        return $users;
    }

    public function save(User $user)
    {
        $query = "INSERT INTO users (username, email) VALUES (:username, :email)";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':username', $user->getUsername());
        $statement->bindParam(':email', $user->getEmail());
        $statement->execute();
    }

    public function update(User $user)
    {
        $query = "UPDATE users SET username = :username, email = :email WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':username', $user->getUsername());
        $statement->bindParam(':email', $user->getEmail());
        $statement->bindParam(':id', $user->getId());
        $statement->execute();
    }

    public function delete(User $user)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $user->getId());
        $statement->execute();
    }
}

// Usage example
$pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
$userDao = new UserDaoImpl($pdo);

$user = $userDao->getById(1);
if ($user) {
    echo $user->getUsername(); // Output: The username of the user with ID 1
} else {
    echo "User not found.";
}