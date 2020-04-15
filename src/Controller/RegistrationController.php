<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Controller\Repository;
use App\Repository\UserRepository;

class RegistrationController extends AbstractController
{

  public function create(Request $request) {
      $entityManager = $this->getDoctrine()->getManager();

      $user = new User();
      $user->setName($request->get('name'));
      $user->setLogin($request->get('login'));
      $user->setEmail($request->get('email'));
      $user->setPassword($request->get('password'));
      $user->setPhone($request->get('phone'));

      $entityManager->persist($user);
      $entityManager->flush();
      return $this->json(['id' => $user->getId(), 'name' => $user->getName(),
         'login' => $user->getLogin(), 'email' => $user->getEmail(),
         'password' => $user->getPassword(), 'phone' => $user->getPhone()]);
  }

  public function show(int $id, UserRepository $repository) {
      $user = $repository->find($id);

      return $this->json(['id' => $user->getId(), 'name' => $user->getName(),
         'login' => $user->getLogin(), 'email' => $user->getEmail(),
         'password' => $user->getPassword(), 'phone' => $user->getPhone()]);
  }

}
 ?>
