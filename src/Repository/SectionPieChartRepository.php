<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionPieChart;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionPieChart|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionPieChart|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionPieChart[]    findAll()
 * @method SectionPieChart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionPieChartRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionPieChart::class);
    }
}
