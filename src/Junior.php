<?php

namespace AlexanderZabornyi\DelegationTest;

class Junior
{
    /**
     * Джун пишет код
     *
     * @return string
     */
    public function writeBadCode(): string
    {
        return 'Some code from junior';
    }
}