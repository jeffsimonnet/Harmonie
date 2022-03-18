<?php

namespace App\Service;

use App\Document\Admin;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserManager
{

    private $documentManager;
    private $passwordEncoder;

    public function __construct(DocumentManager $dm, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->documentManager = $dm;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function createAdmin($email, $password): ?Admin
    {
        $admin = new Admin();
        $admin->setEmail($email);
        $admin->setPassword($this->passwordEncoder->encodePassword($admin, $password));
        $admin->setRoles(["ROLE_ADMIN"]);

        return $admin;
    }

    public function getAdmin($email)
    {
        return $this->documentManager->getRepository(Admin::class)->findOneBy(['email' => $email]);
    }

    public function persistUser($user)
    {
        try {
            $this->documentManager->persist($user);
            $this->documentManager->flush();
        } catch (\Doctrine\DBAL\DBALException $e) {
            return null; // TODO is it sufficient to handle the error?
        }
    }

    public function removeUser($user)
    {
        try {
            $this->documentManager->remove($user);
            $this->documentManager->flush();
        } catch (\Doctrine\DBAL\DBALException $e) {
            return null; // TODO is it sufficient to handle the error?
        }
    }

    // From: https://symfony.com/doc/current/security/guard_authentication.html
    // Note this returns a Response (which is the result of onAuthenticationSuccess of the authenticator, it is usually a redirect to the logged in user home)
    public function connectUser($user, $request, $guardHandler, $authenticator, $area) {
        return $guardHandler->authenticateUserAndHandleSuccess(
            $user,          // the User object you just created
            $request,       // the login depends on the route used
            $authenticator, // authenticator whose onAuthenticationSuccess you want to use
            $area           // the name of your firewall in security.yaml
        );
    }
}
