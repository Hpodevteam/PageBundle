<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionLineChart;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionLineChart|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionLineChart|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionLineChart[]    findAll()
 * @method SectionLineChart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionLineChartRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionLineChart::class);
    }
}
