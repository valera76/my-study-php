<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

use App\DomainModel\Greeting\BaseGreeting;

/**
 * Class EsGreeting
 * @package App\DomainModel\Greeting
 */

class EsGreeting extends BaseGreeting
{
    private const GREETING = 'Hola';
    private const FLAG = '/images/flags/flag_es.jpg';
    
    public function getGreeting(string $name): string
    {
        return self::GREETING . ', ' . $name;
    }
    
    public function getFlagImage()
    {
        return self::FLAG;
    }
}

