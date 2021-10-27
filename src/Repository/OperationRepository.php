<?php

namespace App\Repository;

use App\Entity\Currency;
use App\Entity\Operation;
use App\Entity\Wallet;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\TransactionRequiredException;

class OperationRepository extends EntityRepository
{
    /**
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     * @throws ORMException
     */
    public function getOperationById($id)
    {
        return $this->getEntityManager()->find($id);
    }

    /**
     * @throws ORMException
     */
    public function createOperation($walletId, $amount, $operationType, $currencyId)
    {
        $entityManager = $this->getEntityManager();

        $operation = new Operation();
        $operation->setAmount(10);
        $operation->setOperationType('BUY');

        $wallet = $entityManager->getRepository(Wallet::class)->find($walletId);
        $currency = $entityManager->getRepository(Currency::class)->find($currencyId);

        $operation->setWallet($wallet);
        $operation->setCurrency($currency);

        $entityManager->persist($operation);

        $entityManager->flush();
    }
}