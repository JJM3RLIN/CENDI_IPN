<?php

namespace Controllers;

class IpnController
{
    //Simulando que estan en una BD 
    public static function escuelas()
    {
        $escuelas = [
            "medioSuperior" => [
                "CECYT 1",
                "CECYT 2",
                "CECYT 3",
                "CECYT 4",
                "CECYT 5",
                "CECYT 6",
                "CECYT 7",
                "CECYT 8",
                "CECYT 9",
                "CECYT 10",
                "CECYT 11",
                "CECYT 12",
                "CECYT 13",
                "CECYT 14",
                "CECYT 15",
                "CECYT 16",
                "CECYT 17",
                "CECYT 18",
                "CECYT 19",
                "CET 1"
            ],
            "superior" => [
                "ESCOM",
                "ESIME",
                "ESIQIE",
                "ESFM",
                "ENCB",
                "ESIT",
                "ESIA",
                "EST",
                "ENBA",
                "ESM",
                "ENMyH",
                "ESEO",
                "ESCA",
                "CICS",
                "UPIITA",
                "UPIICSA",
                "UPIBI",
                "UPIIC",
                "UPIIZ",
                "UPIIH",
                "UPIIP",
                "UPIIT",
                "UPIIG"
            ]
        ];
        echo json_encode($escuelas);
    }
}
