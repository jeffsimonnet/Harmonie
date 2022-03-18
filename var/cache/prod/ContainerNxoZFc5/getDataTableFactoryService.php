<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataTableFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Omines\DataTablesBundle\DataTableFactory' shared autowired service.
     *
     * @return \Omines\DataTablesBundle\DataTableFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Omines\\DataTablesBundle\\DataTableFactory'] = new \Omines\DataTablesBundle\DataTableFactory($container->parameters['datatables.config'], new \Omines\DataTablesBundle\Twig\TwigRenderer(($container->services['twig'] ?? $container->load('getTwigService'))), new \Omines\DataTablesBundle\DependencyInjection\Instantiator(['Omines\\DataTablesBundle\\Adapter\\AdapterInterface' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Extension\\MongoDBAdapterCustom' => [false, 'App\\Extension\\MongoDBAdapterCustom', 'getMongoDBAdapterCustomService', true],
            'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter' => [false, 'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter', 'getArrayAdapterService', true],
            'Omines\\DataTablesBundle\\Adapter\\Doctrine\\FetchJoinORMAdapter' => [false, 'Omines\\DataTablesBundle\\Adapter\\Doctrine\\FetchJoinORMAdapter', 'getFetchJoinORMAdapterService', true],
            'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter' => [false, 'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter', 'getORMAdapterService', true],
        ], [
            'App\\Extension\\MongoDBAdapterCustom' => '?',
            'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter' => '?',
            'Omines\\DataTablesBundle\\Adapter\\Doctrine\\FetchJoinORMAdapter' => '?',
            'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter' => '?',
        ]), 'Omines\\DataTablesBundle\\Column\\AbstractColumn' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Omines\\DataTablesBundle\\Column\\TwigColumn' => [false, 'Omines\\DataTablesBundle\\Column\\TwigColumn', 'getTwigColumnService', true],
            'Omines\\DataTablesBundle\\Column\\TwigStringColumn' => [false, 'Omines\\DataTablesBundle\\Column\\TwigStringColumn', 'getTwigStringColumnService', true],
        ], [
            'Omines\\DataTablesBundle\\Column\\TwigColumn' => '?',
            'Omines\\DataTablesBundle\\Column\\TwigStringColumn' => '?',
        ]), 'Omines\\DataTablesBundle\\DataTableTypeInterface' => ($container->privates['datatables.type_locator'] ?? ($container->privates['datatables.type_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))), 'Omines\\DataTablesBundle\\Exporter\\DataTableExporterInterface' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Omines\\DataTablesBundle\\Exporter\\Csv\\CsvExporter' => ['privates', 'Omines\\DataTablesBundle\\Exporter\\Csv\\CsvExporter', 'getCsvExporterService', true],
            'Omines\\DataTablesBundle\\Exporter\\Excel\\ExcelExporter' => ['privates', 'Omines\\DataTablesBundle\\Exporter\\Excel\\ExcelExporter', 'getExcelExporterService', true],
        ], [
            'Omines\\DataTablesBundle\\Exporter\\Csv\\CsvExporter' => '?',
            'Omines\\DataTablesBundle\\Exporter\\Excel\\ExcelExporter' => '?',
        ])]), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), new \Omines\DataTablesBundle\Exporter\DataTableExporterManager(new \Omines\DataTablesBundle\Exporter\DataTableExporterCollection(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Omines\\DataTablesBundle\\Exporter\\Excel\\ExcelExporter'] ?? ($container->privates['Omines\\DataTablesBundle\\Exporter\\Excel\\ExcelExporter'] = new \Omines\DataTablesBundle\Exporter\Excel\ExcelExporter()));
            yield 1 => ($container->privates['Omines\\DataTablesBundle\\Exporter\\Csv\\CsvExporter'] ?? ($container->privates['Omines\\DataTablesBundle\\Exporter\\Csv\\CsvExporter'] = new \Omines\DataTablesBundle\Exporter\Csv\CsvExporter()));
        }, 2)), ($container->services['translator'] ?? $container->load('getTranslatorService'))));
    }
}
