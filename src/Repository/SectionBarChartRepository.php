<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionBarChart;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionBarChart|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionBarChart|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionBarChart[]    findAll()
 * @method SectionBarChart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionBarChartRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionBarChart::class);
    }
}
