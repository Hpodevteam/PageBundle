<?php

namespace Hippocampe\Bundle\PageBundle\Repository\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\LineChartRow;
use Doctrine\Persistence\ManagerRegistry;
use Hippocampe\Bundle\PageBundle\Repository\AbstractRepository;

/**
 * @method LineChartRow|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineChartRow|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineChartRow[]    findAll()
 * @method LineChartRow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineChartRowRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineChartRow::class);
    }
}
