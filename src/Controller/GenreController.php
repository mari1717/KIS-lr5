<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity;
use App\Controller\Repository;
use App\Repository\GenreRepository;

class GenreController  extends AbstractController
{
      public function create(Request $request) {
          $entityManager = $this->getDoctrine()->getManager();

          $genre = new Genre();
          $genre->setTitle($request->get('title'));
          $genre->setYear($request->get('year'));
          $genre->setRating($request->get('rating'));
          $genre->setСountry($request->get('country'));

          $entityManager->persist($genre);
          $entityManager->flush();
      }

      public function show(int $id, GenreRepository $repository) {
          $genre = $repository->find($id);

          return $this->json(['id' => $genre->getId(), 'title' => $genre->getTitle(),
                        'year' => $genre->getYear(), 'rating' => $genre->getRating(),
                        'country' => $genre->getCountry()]);
      }

}
 ?>
