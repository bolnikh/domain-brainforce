<?php namespace domain;

use Domain\User\User;
use \Codeception\Test\Unit;
use \Faker\Factory;

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


    public function testSet() {

        $faker = Factory::create();

        $u = new User($id = $faker->numberBetween(1, 9999), $login = $faker->word , $fio = $faker->name, $email = $faker->email );

        $this->assertEquals($u->getId(), $id);
        $this->assertEquals($u->getLogin(), $login);
        $this->assertEquals($u->getFio(), $fio);
        $this->assertEquals($u->getEmail(), $email);


        $u->setId($id = $faker->numberBetween(1, 9999));
        $u->setLogin($login = $faker->word);
        $u->setFio($fio = $faker->name);
        $u->setEmail($email = $faker->email );


        $this->assertEquals($u->getId(), $id);
        $this->assertEquals($u->getLogin(), $login);
        $this->assertEquals($u->getFio(), $fio);
        $this->assertEquals($u->getEmail(), $email);

    }

}