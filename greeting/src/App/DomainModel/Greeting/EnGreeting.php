<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

use App\DomainModel\Greeting\BaseGreeting;

/**
 * Class EnGreeting
 * @package App\DomainModel\Greeting
 */

class EnGreeting extends BaseGreeting
{
    private const GREETING = 'Hello';
    private const FLAG = '/images/flags/flag_en.jpg';
    
    public function getGreeting(string $name): string
    {
        return self::GREETING . ', ' . $name;
    }
    
    public function getFlagImage()
    {
        return self::FLAG;
    }
}

