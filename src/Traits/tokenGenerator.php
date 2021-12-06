<?php

namespace App\Traits;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;

trait tokenGenerator{
    
    public function generateToken($entity)
    {
        $em = $this->getDoctrine()->getManager();
        $uuid = Uuid::uuid4()->getHex();

        if (null !== $em->getRepository(get_class($entity))->findOneBy(['id' => $uuid])) {
            $uuid = $this->generate($em, $entity);
        }

        return $uuid;
    }

}