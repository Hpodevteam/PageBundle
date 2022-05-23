<?php

namespace Hippocampe\Bundle\PageBundle\Repository\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartYRow;
use Doctrine\Persistence\ManagerRegistry;
use Hippocampe\Bundle\PageBundle\Repository\AbstractRepository;

/**
 * @method BarChartYRow|null find($id, $lockMode = null, $lockVersion = null)
 * @method BarChartYRow|null findOneBy(array $criteria, array $orderBy = null)
 * @method BarChartYRow[]    findAll()
 * @method BarChartYRow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarChartYRowRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BarChartYRow::class);
    }
}
