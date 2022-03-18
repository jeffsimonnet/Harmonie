<?php

namespace App\Service;

class RdvfConnector {

    public function sendDataFormContact($formData) {
        $data = [];
        $data["type"] = 3; // formulaire de contact

        $data["civilite"] = $formData['civilite'];
        $data["nom"] = $formData['nom'];
        $data["prenom"] = $formData['prenom'];
        $data["adresse"] = $formData['adresse'];
        $data["cp"] = $formData['code_postal'];
        $data["ville"] = $formData['ville'];

        $data["tel"] = $formData['telephone'];
        $data["email"] = $formData['email'];

        $data["message"] = "<b>Depuis la page :</b> " . $formData['origin'] . "\n"
            . "<b>Nombre de logements :</b> " . $formData['nb_logements'] . "\n"
            . "<b>Commentaire :</b> \n" . $formData['commentaire'] . "\n";

        $data['donnees'] = json_encode([
            "page" => $formData['origin'],
            "nombre_logements" => $formData['nb_logements'],
            "commentaire" => $formData['commentaire']
        ]);

        $data["campagne"] = $formData['campagne'];

        $this->sendRdvF($data);
    }

    public function sendDataFunnel($formData) {
        $data = [];
        $data["type"] = 14; // devis

        $data["nom"] = $formData['nom'];
        $data["prenom"] = $formData['prenom'];
        $data["adresse"] = $formData['adresse'];
        $data["cp"] = $formData['code_postal'];
        $data["ville"] = $formData['ville'];

        $data["tel"] = $formData['telephone'];
        $data["email"] = $formData['email'];

        $data["message"] = "<b>Depuis la page :</b> " . $formData['origin'] . "\n"
            . "<b>Objet du contact :</b> " . $formData['subject'] . "\n"
            . "<b>Type de bien :</b> " . $formData['type_bien'] . "\n"
            . "<b>Description :</b> \n" . $formData['description'] . "\n";

        $data['donnees'] = json_encode([
            "page" => $formData['origin'],
            "objet" => $formData['subject'],
            "type_bien" => $formData['type_bien'],
            "description" => $formData['description']
        ]);

        $data["campagne"] = $formData['campagne'];

        $this->sendRdvF($data);
    }

    public function sendDataFunnelSubventions($formData) {
        $data = [];
        $data["type"] = 19; // subventions

        $data["nom"] = $formData['nom'];
        $data["prenom"] = $formData['prenom'];
        $data["adresse"] = $formData['adresse'];
        $data["cp"] = $formData['code_postal'];
        $data["ville"] = $formData['ville'];

        $data["tel"] = $formData['telephone'];
        $data["email"] = $formData['email'];

        $data["message"] = "<b>Depuis la page :</b> " . $formData['origin'] . "\n"
            . "<b>Objet du contact :</b> " . $formData['subject'] . "\n"
            . "<b>Type de bien :</b> " . $formData['type_bien'] . "\n"
            . "<b>Nombre de lots :</b> " . $formData['lots'] . "\n"
            . "<b>Description :</b> \n" . $formData['description'] . "\n";

        $data['donnees'] = json_encode([
            "page" => $formData['origin'],
            "objet" => $formData['subject'],
            "type_bien" => $formData['type_bien'],
            "lots" => $formData['lots'],
            "description" => $formData['description']
        ]);

        $data["campagne"] = $formData['campagne'];

        $this->sendRdvF($data);
    }

    private function sendRdvF($data) {
        $link = $_ENV['RDVF_URL'];
        $data["site"] = $_ENV['RDVF_SITE_ID'];
        $data["key"] = $_ENV['RDVF_KEY'];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($curl);
        curl_close($curl);
    }

}
