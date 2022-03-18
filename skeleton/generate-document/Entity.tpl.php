<?= "<?php\n" ?>
<?php use Symfony\Bundle\MakerBundle\Str; ?>

namespace App\Document;
use App\Repository\<?= Str::asCamelCase($className) ?>Repository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @MongoDB\Document(repositoryClass="<?= Str::asCamelCase($className) ?>Repository::class")
*/
class <?=Str::asCamelCase($className)?>

{

    /**
    * @MongoDB\Id
    */
    private $id;

<?php foreach ($fields as $fieldName => $fieldMetadata) : ?>
    /**
<?php if (array_key_exists('type', $fieldMetadata)) : ?>
    * @MongoDB\Field(type="<?= $fieldMetadata['type'] ?>")
<?php elseif (array_key_exists('embed_one', $fieldMetadata)) : ?>
    * @MongoDB\EmbedOne(targetDocument=<?= Str::asCamelCase($fieldMetadata['embed_one']) ?>::class)
<?php elseif (array_key_exists('embed_many', $fieldMetadata)) : ?>
    * @MongoDB\EmbedMany(targetDocument=<?= Str::asCamelCase($fieldMetadata['embed_many']) ?>::class)
<?php endif; ?>
    */
    private $<?=$fieldName;?>;

<?php endforeach; ?>

    public function __construct()
    {
<?php foreach ($fields as $fieldName => $fieldMetadata) : ?>
<?php if (array_key_exists('embed_many', $fieldMetadata)) : ?>
        $this-><?=$fieldName?> = new ArrayCollection();
<?php endif; ?>
<?php endforeach; ?>

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
<?php foreach ($fields as $fieldName => $fieldMetadata) : ?>

    public function <?= array_key_exists('type', $fieldMetadata) && $fieldMetadata['type'] === 'boolean' ? 'is' : 'get' . Str::asCamelCase($fieldName)?>()
    {
        return $this-><?= $fieldName ?>;
    }

    public function set<?=Str::asCamelCase($fieldName)?>($<?=$fieldName?>)
    {
        $this-><?= $fieldName ?> = $<?= $fieldName ?>;
        return $this;
    }

<?php endforeach; ?>
}