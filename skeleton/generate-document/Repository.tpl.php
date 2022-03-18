<?= "<?php\n" ?>
<?php use Symfony\Bundle\MakerBundle\Str; ?>

namespace App\Repository;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

class <?= Str::asCamelCase($className) ?>Repository extends DocumentRepository {

    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
        ->sort('name', 'ASC')
        ->getQuery()
        ->execute();
    }
} 
