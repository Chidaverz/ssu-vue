<?php

namespace App\Utilities;

class GoogleMaps {
    
    public static function geocodeAddress($address, $city, $state, $zip)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?key='.env( 'GOOGLE_MAPS_KEY' ).'&address='.urlencode( $address.' '.$city.', '.$state.' '.$zip );

        $client = new \GuzzleHttp\Client();

        $geocodeResponse = $client->get($url)->getBody();

        $geocodeData = json_decode($geocodeResponse);

        $coordinates['lat'] = null;
        $coordinates['lng'] = null;
        
        if (!empty($geocodeData) && $geocodeData->status != 'ZERO_RESULTS' && isset($geocodeData->status) && isset($geocodeData->results[0])) {
            $coordinates['lat'] = $geocodeData->results[0]->geometry->location->lat;
            $coordinates['lng'] = $geocodeData->results[0]->geometry->location->lng;
        }

        return $coordinates;
    }

}
