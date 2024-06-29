<?php

class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function name()
    {
        return $this->name;
    }

    public function email($newEmail = null)
    {
        if ($newEmail !== null) {
            $this->email = $newEmail;
        }
        return $this->email;
    }

    public function changeName($newName)
    {
        $this->name = $newName;
    }
}
?>



