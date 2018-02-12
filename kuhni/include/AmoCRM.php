<?php
class AmoCRM
{
    private $subdomain;
    private $user = [];
    public function __construct($subdomain, array $user)
    {
        $this->subdomain = $subdomain;
        $this->user = $user;
        $this->go("https://" . $this->subdomain . ".amocrm.ru/private/api/auth.php?type=json", $this->user);
    }
    private function go($url, $data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt');
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $out = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return json_decode($out);
    }
    public function createOffer($id, $title, $utm = null)
    {
        $leads['request']['leads']['add'] = [
            [
                'name'        => $title,
                'date_create' => time(),
                'status_id'   => $id,
                'custom_fields' => [
                    [
                        #utm_source
                        'id'     => 543329,
                        'values' => [
                            [
                                'value' => $utm['utm_source'],
                            ]
                        ],
                    ],
                    [
                        #traf_type
                        'id'     => 543331,
                        'values' => [
                            [
                                'value' => $utm['utm_medium'],
                            ]
                        ],
                    ],
                    [
                        #utm_campaign
                        'id'     => 543333,
                        'values' => [
                            [
                                'value' => $utm['utm_campaign'],
                            ]
                        ],
                    ],
                    [
                        #keyword
                        'id'     => 543335,
                        'values' => [
                            [
                                'value' => $utm['utm_term'],
                            ]
                        ],
                    ],
                ],
            ],
        ];
        return $this->go("https://" . $this->subdomain . ".amocrm.ru/private/api/v2/json/leads/set", $leads);
    }
    public function createContact($offer_id, $name, $email, $phone)
    {
        $contacts['request']['contacts']['add'] = [
            [
                'name'            => $name,
                'linked_leads_id' => [$offer_id],
                'custom_fields'   => [
                    [
                        #Телефоны
                        'id'     => 322589, #Уникальный индентификатор заполняемого дополнительного поля
                        'values' => [
                            [
                                'value' => $phone,
                                'enum'  => 'MOB' #Мобильный
                            ]
                        ],
                    ],
                    [
                        #E-mails
                        'id'     => 322591,
                        'values' => [
                            [
                                'value' => $email,
                                'enum'  => 'PRIV',
                            ]
                        ],
                    ],
                ],
            ],
        ];
        $this->go("https://".$this->subdomain.".amocrm.ru/private/api/v2/json/contacts/set", $contacts);
    }
}

