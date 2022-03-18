<?php

namespace App\Command;

use Symfony\Bundle\MakerBundle\Str;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Generate command for Symfony console component.
 * 
 * @author Samuel Tallet <samuel.tallet@gmail.com>
 */
class GenerateDocumentCommand extends Command
{

    /**
     * Returns the list of supported mapping types by Doctrine MongoDB ODM.
     * 
     * @see https://www.doctrine-project.org/projects/doctrine-mongodb-odm/en/current/reference/basic-mapping.html#doctrine-mapping-types
     */
    private function getSupportedFieldTypes(): array
    {

        return [
            'bin',
            'bin_bytearray',
            'bin_custom',
            'bin_func',
            'bin_md5',
            'bin_uuid',
            'boolean',
            'collection',
            'custom_id',
            'date',
            'date_immutable',
            'decimal128',
            'file',
            'float',
            'hash',
            'id',
            'int',
            'key',
            'object_id',
            'raw',
            'string',
            'timestamp'
        ];
    }

    /**
     * Configures the "generate:document" command.
     */
    public function configure(): GenerateDocumentCommand
    {

        $this->setName('generate:document')
            ->setDescription('Generate a PHP class for a MongoDB document.');

        return $this;
    }


    /**
     * Executes the "generate:document" command.
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {

        $style = new SymfonyStyle($input, $output);
        $style->title('Symfony MongoDB Document Maker');
        $collection = [];

        $collection['name'] = $style->ask('Enter the name of the MongoDB collection <comment>(e.g. user)</comment>');

        if (is_null($collection['name'])) {

            $style->error('You entered no collection name.');
            return 1;
        }

        $collection['is_embedded'] = $style->confirm('Does this MongoDB document will be embedded into another?', false);

        $fieldName = null;
        $fields = [];

        do {

            $fieldName = $style->ask(
                'Enter the name of a new MongoDB field <comment>(e.g. firstname)</comment>'
                    . ' or press enter if you want to stop adding fields'
            );

            if (!is_null($fieldName)) {

                // XXX Invalid choices are handled by $style->choice.
                $fieldEmbedCount = $style->choice('How many documents does the "' . $fieldName . '" MongoDB field embed?', ['zero', 'one', 'many'], 'zero');

                if ($fieldEmbedCount === 'one' || $fieldEmbedCount === 'many') {

                    $targetEmbeddedDocument = $style->ask('Enter the name of the collection to be embedded in the "' . $fieldName . '" MongoDB field');

                    if (is_null($targetEmbeddedDocument)) {

                        $style->error('You entered no collection name.');
                        return 2;
                    }

                    $fields[$fieldName]['embed_' . $fieldEmbedCount] = $targetEmbeddedDocument;
                } elseif ($fieldEmbedCount === 'zero') {

                    $fieldType = $style->ask(
                        'Enter the type of the "' . $fieldName . '" MongoDB field'
                            . ' <comment>(e.g. boolean, collection, date, int, string)</comment>'
                    );

                    if (!in_array($fieldType, $this->getSupportedFieldTypes())) {

                        $style->error(
                            'You entered an invalid field type.'
                                . ' See: https://www.doctrine-project.org/projects/doctrine-mongodb-odm/en/current/reference/basic-mapping.html#doctrine-mapping-types'
                        );
                        return 3;
                    }

                    $fields[$fieldName]['type'] = $fieldType;
                }
            }
        } while (!is_null($fieldName));


        $phpClassFilename = $this->generate($collection, $fields);

        $style->success(
            'Document successfully generated here: ' . $phpClassFilename
        );

        $phpClassFilename = $this->generateRepository($collection, $fields);


        $style->success(
            'Repository successfully generated here: ' . $phpClassFilename
        );

        return 0;
    }

    public function parseTemplate(string $templatePath, array $parameters): string
    {
        ob_start();
        extract($parameters, EXTR_SKIP);
        include $templatePath;

        return ob_get_clean();
    }

    public function generate($collection, $fields): string
    {

        if (!file_exists('src/Document')) {
            mkdir('src/Document', 0777, true);
        }

        $phpClassData = $this->parseTemplate('./skeleton/generate-document/Document.tpl.php', [
            "fields" => $fields,
            "className" => $collection['name']
        ]);


        $phpClassFilename =  __DIR__ . '/../Document/' . Str::asCamelCase($collection['name']) . '.php';

        if ($phpClassFilename === false) {
            throw new \Exception('Impossible to get the absolute path to the generated PHP class.');
        }

        if (file_put_contents($phpClassFilename, $phpClassData) === false) {
            throw new \Exception('Impossible to write the generated PHP class.');
        }

        return $phpClassFilename;
    }

    public function generateRepository($collection, $fields): string
    {

        if (!file_exists('src/Repository')) {
            mkdir('src/Repository', 0777, true);
        }


        $phpClassData = $this->parseTemplate('./skeleton/generate-document/Repository.tpl.php', [
            "className" => $collection['name']
        ]);

        $phpClassFilename =  __DIR__ . '/../Repository/' . Str::asCamelCase($collection['name']) . "Repository" . '.php';


        if ($phpClassFilename === false) {
            throw new \Exception('Impossible to get the absolute path to the generated PHP class.');
        }

        if (file_put_contents($phpClassFilename, $phpClassData) === false) {
            throw new \Exception('Impossible to write the generated PHP class.');
        }

        return $phpClassFilename;
    }
}
