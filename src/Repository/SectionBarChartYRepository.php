<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionBarChartY;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionBarChartY|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionBarChartY|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionBarChartY[]    findAll()
 * @method SectionBarChartY[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionBarChartYRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionBarChartY::class);
    }
}
