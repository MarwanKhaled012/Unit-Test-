<?php
// create class user content two private parameters name and email using only class
class User
{
    private $name;
    private $email;


    // method run begin the class call tack two private parameters name and email
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // method name return  name
    public function name()
    {
        return $this->name;
    }
    
    // method email return email if newEmail is provided, otherwise return current email

    public function email($newEmail = null)
    {
        if ($newEmail !== null) {
            $this->email = $newEmail;
        }
        return $this->email;
    }

    // method changeEmail change email if newEmail is provided, otherwise do nothing
    public function changeName($newName)
    {
        $this->name = $newName;
    }
}

// group 5

?>



