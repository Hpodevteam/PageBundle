<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionTable;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionTable[]    findAll()
 * @method SectionTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionTableRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionTable::class);
    }
}
