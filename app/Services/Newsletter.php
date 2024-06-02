<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{

    public function subscribe(string $email){
        $mailchimp = new Apiclient();
        $mailchimp->setConfig([
            'apikey' => config( 'services mailchimp. key'),
            'server' => 'us17'
            ]);
return $mailchimp->lists->addListMember('d77986a02d', [
    'email_address' => $email,
    'status' => 'subscribed'
]);
    }


}
