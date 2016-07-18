<?php

namespace App;

use App\Staff as Staff;
use App\Person as Person;

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        $this->staff->members();
    }
}