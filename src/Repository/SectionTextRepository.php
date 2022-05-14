<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionText;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionText|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionText|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionText[]    findAll()
 * @method SectionText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionTextRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionText::class);
    }
}
