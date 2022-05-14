<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionText2Col;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionText2Col|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionText2Col|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionText2Col[]    findAll()
 * @method SectionText2Col[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionText2ColRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionText2Col::class);
    }
}
