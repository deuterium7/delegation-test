<?php

namespace AlexanderZabornyi\DelegationTest\Tests;

use AlexanderZabornyi\DelegationTest\Junior;
use AlexanderZabornyi\DelegationTest\TeamLead;
use PHPUnit\Framework\TestCase;

class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new Junior();
        $teamLead = new TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}