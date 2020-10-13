<?php

declare(strict_types=1);

namespace App\Controller;

use App\DomainModel\FactoryGreeting;
use App\Http\Request;
use App\Http\Response;
use App\View\View;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends BaseController
{
    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function index(Request $request): Response
    {
         
        $factory = new FactoryGreeting();
        $greeting = $factory->createGreeting($request->get('lang'));

        return new Response($this->render('form.php', [
            '{greeting}' => $greeting->getGreeting($request->get('name')),
            '{flag}' => $greeting->getFlagImage(),
            ]));
    }
}
