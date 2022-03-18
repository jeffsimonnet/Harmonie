<?php

namespace App\Controller;

use App\Controller\AbstractBaseController;
use App\Service\RdvfConnector;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class FunnelController extends AbstractBaseController {

    /**
     * @Route("/_ajax/formulaire/", name="funnel_ajax_submit", methods={"POST"})
     */
    public function submit(Request $request, MailerInterface $mailer, RdvfConnector $rdvfConnector) {
        $infos = json_decode($request->getContent(), true);

        // check that all parameters are here (TODO do a form instead)
        $valid = array_reduce(['type_bien', 'adresse', 'code_postal', 'ville', 'description', 'nom', 'prenom', 'email', 'telephone'], function ($acc, $item) use ($infos) {
            return $acc &= !empty($infos[$item]);
        }, true);
        if (!$valid) {
            return $this->json([
                    'status' => 'nok',
                    'error' => 'Données manquantes ! Merci de bien remplir les champs !',
                    ], 400);
        }

        // Send email
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@harmonie.fr', 'Site Harmonie'))
            ->to(new Address('assistantecom@harmonie.fr'), new Address('fh@harmonie.fr'))
            ->subject('HARMONIE – Demande de devis site internet')
            ->htmlTemplate('pages/formulaire/_funnel_email.html.twig')
            ->context([
            'infos' => $infos,
            ])
        ;

        try {
            $mailer->send($email);
            $infos["origin"] = $request->headers->get('referer');
            $infos['subject'] = "Demande de devis";

            $campaign = $request->getSession()->get('_campaign');
            if (isset($campaign['campaign'])) {
                $infos["campagne"] = $campaign['campaign'];
            }
            else {
                $infos['campagne'] = 1;
            }

            $rdvfConnector->sendDataFunnel($infos);

            return $this->json([
                    'status' => 'ok',
            ]);
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @Route("/_ajax/formulaire/subventions/", name="funnel_subventions_ajax_submit", methods={"POST"})
     */
    public function submitSubventions(Request $request, MailerInterface $mailer, RdvfConnector $rdvfConnector) {
        $infos = json_decode($request->getContent(), true);

        // check that all parameters are here (TODO do a form instead)
        $valid = array_reduce(['type_bien', 'adresse', 'code_postal', 'ville', 'description', 'lots', 'nom', 'prenom', 'email', 'telephone'], function ($acc, $item) use ($infos) {
            return $acc &= !empty($infos[$item]);
        }, true);
        if (!$valid) {
            return $this->json([
                    'status' => 'nok',
                    'error' => 'Données manquantes ! Merci de bien remplir les champs !',
                    ], 400);
        }

        // Send email
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@harmonie.fr', 'Site Harmonie'))
            ->to(new Address('assistantecom@harmonie.fr'), new Address('fh@harmonie.fr'))
            ->subject('HARMONIE – Demande de subventions site internet')
            ->htmlTemplate('pages/formulaire/_funnel_subventions_email.html.twig')
            ->context([
            'infos' => $infos,
            ])
        ;

        try {
            $mailer->send($email);
            $infos["origin"] = $request->headers->get('referer');
            $infos['subject'] = "Demande de subventions";

            $campaign = $request->getSession()->get('_campaign');
            if (isset($campaign['campaign'])) {
                $infos["campagne"] = $campaign['campaign'];
            }
            else {
                $infos['campagne'] = 1;
            }

            $rdvfConnector->sendDataFunnelSubventions($infos);

            return $this->json([
                    'status' => 'ok',
            ]);
        } catch (\Exception $e) {

            throw $e;
        }
    }

}
