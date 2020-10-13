<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

use App\DomainModel\Greeting\BaseGreeting;

/**
 * Class DeGreeting
 * @package App\DomainModel\Greeting
 */

class DeGreeting extends BaseGreeting
{
    private const GREETING = 'Hallo';
    private const FLAG = '/images/flags/flag_de.jpg';
    
    public function getGreeting(string $name): string
    {
        return self::GREETING . ', ' . $name;
    }
    
    public function getFlagImage()
    {
        return self::FLAG;
    }
}

