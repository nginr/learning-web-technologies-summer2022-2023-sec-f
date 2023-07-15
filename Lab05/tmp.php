<?php
class User {
    public $name;
    public $username;
    public $email;
    public $password;
    public $imagepath;
    public $gender;
    public $dob;

    function __construct($name, $username, $email, $password, $imagepath,
        $gender, $dob)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->imagepath = $imagepath;
        $this->gender = $gender;
        $this->dob = $dob;
    }

    function dob2string() : string {
        return $this->dob[0] . " / " . $this->dob[1] . " / " . $this->dob[2];
    }
}

    $admin = new User("admin no: 1", "admin", "admin@mail.com", "admin", "assets/logo.png",
        "male", array(12, 2, 1989));
    $Bob = new User("Bob W Jobs", "bob", "bob@mail.com", "bob", "assets/logo.png",
        "male", array(24, 9, 1998));
    $users = array($admin, $Bob);


function isuser(array $users, string $username, string $email): array {
    foreach ($users as $key=>$u) {
        if ($u->username == $username && $u->email == $email) {
            return array(true, $key);
        }
    }
    return array(false, null);
}

isuser($users, "bob", "bob@mail.com");

?>
