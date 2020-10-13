<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

use App\DomainModel\Greeting\BaseGreeting;

/**
 * Class UzGreeting
 * @package App\DomainModel\Greeting
 */

class UzGreeting extends BaseGreeting
{
    private const GREETING = 'Assalom alleykum';
    private const FLAG = '/images/flags/flag_uz.jpg';
    
    public function getGreeting(string $name): string
    {
        return self::GREETING . ', ' . $name;
    }
    
    public function getFlagImage()
    {
        return self::FLAG;
    }
}

