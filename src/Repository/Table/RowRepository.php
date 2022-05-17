<?php

namespace Hippocampe\Bundle\PageBundle\Repository\Table;

use Hippocampe\Bundle\PageBundle\Entity\Table\Row;
use Doctrine\Persistence\ManagerRegistry;
use Hippocampe\Bundle\PageBundle\Repository\AbstractRepository;

/**
 * @method Row|null find($id, $lockMode = null, $lockVersion = null)
 * @method Row|null findOneBy(array $criteria, array $orderBy = null)
 * @method Row[]    findAll()
 * @method Row[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RowRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Row::class);
    }
}
