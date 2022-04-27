<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MixedTapeController extends AbstractController{
    // #[Route('/home')]
    #[Route('/')]
    public function homepage(): Response
    {



$tracks =[

    ['song'=>'Gaggsta\'s  Paradise', 'artist'=> 'Coolio'],
    ['song'=>'Waterfalls' , 'artist' => 'TLC'],
    ['song'=>'Creep' , 'artist'=> 'Radiohead'],
    ['song'=>'Kiss from a Rose', 'artist'=>  'Seal'],
    ['song'=>'On Bended Knee', 'artist'=> 'Boys II Men'],
    ['song'=>'Fantasy', 'artist'=> 'Marian Carey'],
];

// dd($tracks);
// dump($tracks);


        // die("Mixed-Tipes:Surely not fancy looking page");
        // return new Response("Pink Floyd --- Another Brick In the wall");

return $this->render('mixed/homepage.html.twig',['title'=>'mixed 90s music','tracks'=>$tracks,]);

    }


    // #[Route('/browse/')]
    #[Route('/browse/{slug}')]
    // public function browse(): Response
    // public function browse(string $slug): Response --- "browse" will have error
    public function browse(string $slug=null): Response
    {

$genre = $slug ? u(str_replace('-','',$slug))->title(true):null;
// if ($slug){$title =u(str_replace('-','',$slug))->title(true);


// } else {


//         $title ="All Genres";

// }
        // $title =u(str_replace('-','',$slug))->title(true);
    //   return new Response('Genre: '.$title);
return $this->render('mixed/browse.html.twig', ['genre'=>$genre]);

    //   return new Response('Genre: '.$slug);
        // die("Mixed-Tipes:Surely not fancy looking page");
        // return new Response("Second Page Created");
    }




}


?>