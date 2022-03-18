<?php

namespace App\Controller;

use App\Form\Custom\DeleteButtonType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;

abstract class AbstractBaseController extends AbstractController
{
    protected $dm;

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }
    
    protected function getCurrentUrl($extraParams = [])
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $this->generateUrl($request->attributes->get('_route'), $this->getRouteParams($extraParams));
    }

    protected function getRouteParams($extraParams = [])
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return array_merge($request->attributes->get('_route_params'), $extraParams);
    }

    protected function generateUrlWithSameParams(string $route, array $parameters = [], int $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH): string
    {
        $parameters = $this->getRouteParams($parameters);
        return $this->generateUrl($route, $parameters, $referenceType);
    }

    protected function redirectToRouteWithSameParams(string $route, array $parameters = [], int $status = 302): RedirectResponse
    {
        $parameters = $this->getRouteParams($parameters);
        return $this->redirectToRoute($route, $parameters, $status);
    }

    /**
     * Blocks are forms inserted into pages. They need to define their action url, thus this method.
     */
    protected function createFormBlock(string $type, $data = null, array $options = [], array $actionExtraParams = []): FormInterface
    {
        if (empty($options['action'])) $options['action'] = $this->getCurrentUrl($actionExtraParams);
        return $this->createForm($type, $data, $options);
    }

    protected function addDeleteButton(FormInterface $form, string $route, string $csrf, $options = [])
    {
        $params = ['action' => $this->generateUrlWithSameParams($route), 'csrf' => 'delete' . $csrf];
        $form->add('delete_button', DeleteButtonType::class, array_merge($params, $options));
    }

    /**
     * Helper DocumentManager
     */

    protected function dmPersistFlush($data)
    {
        $this->dm->persist($data);
        $this->dm->flush();
    }

    protected function dmRemoveFlush($data)
    {
        $this->dm->remove($data);
        $this->dm->flush();
    }

    protected function dmFlush($data)
    {
        $this->dm->flush();
    }

    protected function dmGetRepo($class)
    {
        return $this->dm->getRepository($class);
    }

    protected function dmFindDocument($class, $id)
    {
        return $this->dmGetRepo($class)->find($id);
    }

    /**
     * Utils
     */

    // returns an object ready for the select2 select
    protected function select2($results, $idProperty, $textProperty)
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        $response = [];
        $response["results"] = [];
        foreach ($results as $item) {
            $response["results"][] = [
                "id" => $propertyAccessor->getValue($item, $idProperty),
                "text" => $propertyAccessor->getValue($item, $textProperty),
            ];
        }
        return $this->json($response);
    }

    /**
     * Fonctions métier
     */
}
