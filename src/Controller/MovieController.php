<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\MovieRepository;

class MovieController extends AbstractController
{
    public function create(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $movie = new Movie();
        $movie->setTitle($request->request->get('title'));
        $movie->setСountry($request->request->get('country'));
        $movie->setProducer($request->request->get('producer'));
        $movie->setGenre($request->request->get('genre'));
        $movie->setPremierWorld($request->request->get('premierWorld'));
        $movie->setPremierRf($request->request->get('premierRf'));
        $movie->setTime($request->request->get('time'));
        $movie->setDescription($request->request->get('description'));

        $entityManager->persist($movie);
        $entityManager->flush();
    }

    public function show(int $id, MovieRepository $repository) {
        $movie = $repository->find($id);

        return $this->json(['title' => $movie->getTitle(), 'id' => $movie->getId(),
          'country' => $movie->getCountry(), 'producer' => $movie->getProducer(),
           'genre' => $movie->getGenre(),'premier_world' => $movie->getPremierWorld(),
           'premier_rf' => $movie->getPremierRf(),'time' => $movie->getTime(),
           'description' => $movie->getDescription()]);
    }


}
 ?>
