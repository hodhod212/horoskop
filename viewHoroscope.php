<?php

function get_dinHoroskp($name)
{
    $products = [
		
        "Vaduren"=>"(21 mars – 20 april)
        De som känner dig säger att du är extra inspirerade. Ta tillvara på energin och du får en bra dag.",
        "Oxen"=>"(21 april – 21 maj)
        Det kan ibland bli nödvändigt med ett samarbete du i normala fall skulle undvika.
        Du är drabbad av känslan av att något undanhålls dig. ",

        "Tvillingarna"=>"(22 maj – 21 juni)
        Du kan komma att få besök av långväga gäster. Vissa husliga angelägenheter kräver din uppmärksamhet.",

        "Kraftan"=>"(22 juni – 23 juli)
        De som känner dig säger att du är i behov av något nytt. Möjligen har du känslan av att tidigare möda
        varit förgäves. ",

        "Lejonet"=>"(24 juli – 23 augusti)
        De planetariska impulserna är övervägande goda. Du bör inte dra några förhastade slutsatser!",

        "Jungfrun"=>"(24 augusti – 23 september)
        En intressant person upptäcker plötsligt att du kan du har vind i seglen. Ditt självförtroende är gott.",

        "Vagen"=>"(24 september – 23 oktober)
        Du bör hålla din dag flexibel, ett fullspäckat schema kan skapa problem för dig.", 

        "Skorpionen"=>"(24 oktober – 22 november)
        De som känner dig säger att du behöver tänka om. Ibland kan det vara viktigt att inte göra någon stor 
        affär av onödiga saker.",

        "Skytten"=>"(23 november – 20 december)
        Dagen börjar grubblande och i självrannsakans tecken. Men framåt kvällen fylls du av positiv energi.",

        "Stenbocken"=>"(21 december – 20 januari)
        En viss villrådighet kan märkas hos stenbocken. Kärlekslivet saknar möjligtvis den rätta gnistan.", 

        "Vattumannen"=>"(21 januari – 19 februari)
        Vattumän känner sig nu i behov att få gehör för idéer. Möjligen kommer du att behöva koppla
        av och ta det lugnt.",

        "Fiskarna"=>"(20 februari – 20 mars)
        Du är inne i en ganska produktiv fas, det kan skapa problem för dig."
        
	];
	
	foreach($products as $product=>$dinHoroskp)
	{
		if($product==$name)
		{
			return $dinHoroskp;
			break;
		}
	}
}
?>