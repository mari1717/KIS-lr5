<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Actor;
use App\Entity\ActorInMovie;
use App\Controller\Repository;
use App\Repository\ActorRepository;

class ActorController extends AbstractController
{

    public function createActorInMovie(Request $request) {
      $entityManager = $this->getDoctrine()->getManager();

      $actor = new ActorInMovie();
      $actor->setMovieId($request->get('movie_id'));
      $actor->setActorId($request->get('actor_id'));

      $entityManager->persist($actor);
      $entityManager->flush();
      return $this->json(['movie_id' => $actor->getMovieId(), 'actor_id' => $actor->getActorId()]);
    }

    public function create(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $actor = new Actor();
        $actor->setName($request->get('name'));
        $movie->setСareer($request->get('career'));
        $movie->setHeight($request->get('height'));
        $movie->setPlace($request->get('place'));
        $movie->setDateBirth($request->get('date_birth'));
        $movie->setGenre($request->get('genre'));
        $movie->setTotalMovies($request->get('totalMovies'));

        $entityManager->persist($actor);
        $entityManager->flush();
    }

    public function show(int $id, ActorRepository $repository) {
        $actor = $repository->find($id);

        return $this->json(['id' => $actor->getId(), 'name' => $actor->getName(),
           'career' => $actor->getCareer(), 'height' => $actor->getHeight(),
           'place' => $actor->getPlace(), 'date_birth' =>  $actor->getDateBirth(),
           'genre' => $actor->getGenre(), 'total_movies' => $actor->getTotalMovies()]);
    }


}


?>
