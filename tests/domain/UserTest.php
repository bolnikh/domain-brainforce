<?php namespace domain;

use Domain\User\User;
use \Codeception\Test\Unit;

class UserTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreate()
    {
       $u = new User($id = 1, $login ='login1', $fio = 'fio1', $email = 'email1' );

       $this->assertEquals($u->getId(), $id);
       $this->assertEquals($u->getLogin(), $login);
       $this->assertEquals($u->getFio(), $fio);
       $this->assertEquals($u->getEmail(), $email);
    }
}