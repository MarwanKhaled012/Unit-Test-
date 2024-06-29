<?php
// UserTest.php

use PHPUnit\Framework\TestCase;

require_once './src/User.php'; 

class UserTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        // Initialize $user with initial name and email for each test
        $this->user = new User('Group_5 ', 'Group_5@gmail.com');
    }

    public function testGetName()
    {
        $this->assertEquals('Group_5 ', $this->user->name());
    }

    public function testSetEmail()
    {
        $this->user->email('nohasalah@iti.gov.eg');
        $this->assertEquals('nohasalah@iti.gov.eg', $this->user->email());
    }

    public function testGetEmail()
    {
        $this->assertEquals('Group_5@gmail.com', $this->user->email());
    }

    public function testSetName()
    {
        $this->user->changeName('Noha');
        $this->assertEquals('Noha', $this->user->name());
    }
}
?>
