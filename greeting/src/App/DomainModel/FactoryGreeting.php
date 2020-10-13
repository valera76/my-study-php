<?php

declare(strict_types=1);

namespace App\DomainModel;

use App\DomainModel\Greeting\BaseGreeting;
use App\DomainModel\Greeting\RuGreeting;
use App\DomainModel\Greeting\EnGreeting;
use App\DomainModel\Greeting\DeGreeting;
use App\DomainModel\Greeting\EsGreeting;
use App\DomainModel\Greeting\UzGreeting;
use Exception;

/**
 * Class FactoryGreeting
 * @package App\DomainModel
 */
class FactoryGreeting
{
   
     public function createGreeting(string $language): BaseGreeting
     {
        if ($language === 'ru') {
            return new RuGreeting();
        }
        
        if ($language === 'en') {
            return new EnGreeting();
        }
        
        if ($language === 'de') {
            return new DeGreeting();
        }
        
        if ($language === 'es') {
            return new EsGreeting();
        }
        
        if ($language === 'uz') {
            return new UzGreeting();
        }
        
        throw new Exception('Unexpected language');        
     }
}        
        

