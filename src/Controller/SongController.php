<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SongController extends AbstractController{


#[Route('/api/songs/{id<\d+>}', methods:['GET'], name:'api_songs_get_one')]


// #[Route('/api/songs/{id}', methods:['GET'])]
// #[Route('/api/songs/{id}', name:'app_songs',methods:['GET'])]
// public function getSong($id):Response{
// public function getSong(int $id, LoggerInterface $logger):Response{
public function getSong(int $id, LoggerInterface $logger):Response{
// dd($id);

// $song=['id'=>$id,'name'=>'Old Finnish Song', 'url' => 'https://unelmamusic.s3.eu-central-1.amazonaws.com/uploads/tracks/2036026912_839752378_1109660472.mp3?response-content-disposition=filename%3DLoituma%20-%20Ievan%20Polkka.mp3&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJ5F66J5X724NSRAQ%2F20220425%2Feu-central-1%2Fs3%2Faws4_request&X-Amz-Date=20220425T143811Z&X-Amz-SignedHeaders=host&X-Amz-Expires=432000&X-Amz-Signature=003f989a79ee89dec20cca736243225c48dfec00f34986b8df49bb1fe7aef5f2',];
$song=['id'=>$id,'name'=>'Old Finnish Song', 'url' => 'https://www.supla.fi/episode/30b638c1-f084-4370-8352-08892239dd8e',];
// $song=['id'=>$id,'name'=>'Old Finnish Song', 'url' => 'https://soundcloud.com/captainzaman/chris-rea-the-road-to-hell',];
// $song=['id'=>$id,'name'=>'Old Finnish Song', 'url' => '/Symfony/symffirstproj/public/chris_rea-the_road_to_hell_part_ii.mp3',];


// $logger->info('Return API responce for song'.$id);
// return new JsonResponse($song);

// return $this->json($song);
return new JsonResponse($song);

}




}