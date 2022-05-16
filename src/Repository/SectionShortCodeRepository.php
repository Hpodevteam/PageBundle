<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionShortCode;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionShortCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionShortCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionShortCode[]    findAll()
 * @method SectionShortCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionShortCodeRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionShortCode::class);
    }
}
