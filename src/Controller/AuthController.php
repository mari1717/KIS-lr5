<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Controller\Repository;
use App\Repository\UserRepository;

class AuthController extends AbstractController
{
  public function create(Request $request) {
      $entityManager = $this->getDoctrine()->getManager();

      $user = new User();
      $user->setLogin($request->get('login'));
      $user->setPassword($request->get('password'));

      $entityManager->persist($user);
      $entityManager->flush();
      return $this->json(['id' => $user->getId(), 'login' => $user->getLogin(), 'password' => $user->getPassword()]);
  }

  public function show(int $id, UserRepository $repository) {
      $user = $repository->find($id);

      return $this->json(['id' => $user->getId(), 'login' => $user->getLogin(), 'password' => $user->getPassword()]);
  }

}
 ?>
