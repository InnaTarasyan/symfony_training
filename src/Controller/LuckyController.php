<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
       * @Route("/lucky/number/{max}")
     */
    public function number($max)
    {
        $number = random_int(0, $max);

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));

    }
}