<?php

namespace AlexanderZabornyi\DelegationTest;

class TeamLead
{
    private $junior;

    /**
     * TeamLead constructor.
     *
     * @param Junior $junior
     */
    public function __construct(Junior $junior)
    {
        $this->junior = $junior;
    }

    /**
     * Тим-лидер делегирует написание кода джуну
     *
     * @return string
     */
    public function writeCode(): string
    {
        return $this->junior->writeBadCode();
    }
}