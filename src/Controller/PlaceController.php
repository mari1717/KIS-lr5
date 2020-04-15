<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Place;
use App\Controller\Repository;
use App\Repository\PlaceRepository;

class PlaceController extends AbstractController
{
  public function create(Request $request) {
      $entityManager = $this->getDoctrine()->getManager();

      $place = new Place();
      $place->setName($request->get('name'));
      $place->setDateBirth($request->get('dateBirth'));
      $place->setCareer($request->get('career'));
      $place->setAge($request->get('age'));

      $entityManager->persist($place);
      $entityManager->flush();
      return $this->json(['id' => $place->getId()]);
  }

  public function show(int $id, PlaceRepository $repository) {
      $place = $repository->find($id);

      return $this->json(['name' => $place->getName(), 'id' => $place->getId(),
                'date_birth' => $place->getDateBirth(), 'career' => $place->getCareer(),
                'age' => $place->getAge()]);
  }

}
 ?>
