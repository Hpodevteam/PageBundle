<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Hippocampe\Bundle\PageBundle\Entity\SectionTextImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionTextImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionTextImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionTextImage[]    findAll()
 * @method SectionTextImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionTextImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionTextImage::class);
    }
}
