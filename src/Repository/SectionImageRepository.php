<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionImage[]    findAll()
 * @method SectionImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionImage::class);
    }
}
