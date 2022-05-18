<?php

namespace Hippocampe\Bundle\PageBundle\Repository\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartRow;
use Doctrine\Persistence\ManagerRegistry;
use Hippocampe\Bundle\PageBundle\Repository\AbstractRepository;

/**
 * @method BarChartRow|null find($id, $lockMode = null, $lockVersion = null)
 * @method BarChartRow|null findOneBy(array $criteria, array $orderBy = null)
 * @method BarChartRow[]    findAll()
 * @method BarChartRow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarChartRowRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BarChartRow::class);
    }
}
