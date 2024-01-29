<?php

// Dao Interface
interface UserDao
{
    public function getById($id);
    public function getAll();
    public function save(User $user);
    public function update(User $user);
    public function delete(User $user);
}