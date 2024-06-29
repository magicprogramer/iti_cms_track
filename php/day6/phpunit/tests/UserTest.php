<?php
require 'H:/xamp/htdocs/cms/iti_cms_track/php/day6/phpunit/src/user.php';

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User("ahmed", "ahmed@gmail.com");
        $this->assertTrue("ahmed" == $user->name && "ahmed@gmail.com" == $user->email);
        $this->assertEquals("ahmed", $user->getname());
        $this->assertEquals( "ahmed@gmail.com", $user->getemail());
        $this->assertEquals("karim", $user->setname("karim"));
        $this->assertEquals("karim@gmail.com", $user->setemail("karim@gmail.com"));
    }
}
