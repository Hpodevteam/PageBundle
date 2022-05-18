<?php

namespace Hippocampe\Bundle\PageBundle\Repository\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\PieChartRow;
use Doctrine\Persistence\ManagerRegistry;
use Hippocampe\Bundle\PageBundle\Repository\AbstractRepository;

/**
 * @method PieChartRow|null find($id, $lockMode = null, $lockVersion = null)
 * @method PieChartRow|null findOneBy(array $criteria, array $orderBy = null)
 * @method PieChartRow[]    findAll()
 * @method PieChartRow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PieChartRowRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PieChartRow::class);
    }
}
