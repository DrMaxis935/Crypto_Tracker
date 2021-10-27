<?php

namespace App\Repository;

use App\Entity\Wallet;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\TransactionRequiredException;

class WalletRepository extends EntityRepository
{
    /**
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     * @throws ORMException
     */
    public function getWalletById($id)
    {
        return $this->getEntityManager()->find($id);
    }

    /**
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     * @throws ORMException
     */
    public function createWallet()
    {
        $entityManager = $this->getEntityManager();

        $wallet = new Wallet();
        $wallet->setUsername('Toto');

        $entityManager->persist($wallet);

        $entityManager->flush();
    }
}