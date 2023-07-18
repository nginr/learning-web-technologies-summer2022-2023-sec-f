<?php

class UsersModel
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function appendUser($id, $password, $name, $type)
    {
        $user = "-$id|$password|$name|$type-";
        $data = $user . PHP_EOL;

        if (file_put_contents($this->filePath, $data, FILE_APPEND | LOCK_EX) !== false) {
            return true;
        }

        return false;
    }

    public function getUsers()
    {
        $users = array();

        if (file_exists($this->filePath)) {
            $contents = file_get_contents($this->filePath);
            $lines = explode(PHP_EOL, $contents);

            foreach ($lines as $line) {
                $line = trim($line);

                if (!empty($line)) {
                    $parts = explode("|", trim($line));
                    $id = substr($parts[0], 1);
                    $password = $parts[1];
                    $name = $parts[2];
                    $type = substr($parts[3], 0, -1);
                    $users[] = array(
                        'id' => $id,
                        'name' => $name,
                        'password' => $password,
                        'type' => $type
                    );
                }
            }
        }

        return $users;
    }
}
