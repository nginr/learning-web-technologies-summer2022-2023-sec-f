<?php
function string2dob(string $dobString): array {
    $dobArray = explode(" / ", $dobString);
    $dob = array_map('intval', $dobArray);
    return $dob;
}

class User {
    public $name;
    public $username;
    public $email;
    public $password;
    public $imagepath;
    public $gender;
    public $dob;
    public $logged;

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
        $this->logged = false;
    }

    function dob2string() : string {
        return $this->dob[0] . " / " . $this->dob[1] . " / " . $this->dob[2];
    }

    function islogged() : bool {
        if ($this->logged == true) { return true; }
        else { return false; }
    }
};

function userlogged(array $users, string $uname) : ?int {
    for($i = 0; $i < sizeof($users); $i++) {
        $u = $users[$i];
        if ($u->islogged() == true) {
            return $i;
        }
    }
    return null;
}

function isuser(array $users, string $username) {
    for($i = 0; $i < sizeof($users); $i++) {
        $u = $users[$i];
        if ($u->username == $username) {
            return [true, $i];
        }
    }
    return [false, null];
}

?>
