<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosCkEditor_Form_TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['auto_inline' => false, 'configs' => ['main_config' => ['language' => 'fr', 'toolbar' => [0 => ['name' => 'styles', 'items' => [0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Blockquote', 5 => '-', 6 => 'Link', 7 => 'Unlink', 8 => '-', 9 => 'RemoveFormat', 10 => '-', 11 => 'NumberedList', 12 => 'BulletedList', 13 => '-', 14 => 'Outdent', 15 => 'Indent', 16 => '-', 17 => '-', 18 => 'JustifyLeft', 19 => 'JustifyCenter', 20 => 'JustifyRight', 21 => 'JustifyBlock', 22 => '-', 23 => 'Image', 24 => 'Table', 25 => 'Iframe', 26 => '-', 27 => 'TextColor', 28 => 'BGColor']], 1 => ['name' => 'commands', 'items' => [0 => 'Styles', 1 => 'Format', 2 => 'FontSize', 3 => '-', 4 => 'Source']]], 'contentsCss' => [0 => 'build/app.css'], 'disallowedContent' => 'h1', 'filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => [], 'stylesSet' => 'custom_content', 'coreStyles_bold' => ['element' => 'b'], 'coreStyles_italic' => ['element' => 'i']]], 'styles' => ['custom_content' => [0 => ['name' => 'Titre H2', 'element' => 'h2', 'styles' => [], 'attributes' => []], 1 => ['name' => 'Titre H3', 'element' => 'h3', 'styles' => [], 'attributes' => []], 2 => ['name' => 'Titre H4', 'element' => 'h4', 'styles' => [], 'attributes' => []], 3 => ['name' => 'Paragraphe', 'element' => 'p', 'styles' => [], 'attributes' => []], 4 => ['name' => 'Séparateur', 'element' => 'hr', 'styles' => [], 'attributes' => []], 5 => ['name' => 'Texte en vert', 'element' => 'span', 'attributes' => ['class' => 'green'], 'styles' => []], 6 => ['name' => 'Texte en jaune', 'element' => 'span', 'attributes' => ['class' => 'yellow'], 'styles' => []]]], 'enable' => true, 'async' => false, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'plugins' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]));
    }
}
