<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuperposudaRequest;
use GuzzleHttp\Client;

class SuperposudaController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(SuperposudaRequest $request)
    {
        $client = new Client();

        $apiKey = 'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb';

        $response = $client->get('https://superposuda.retailcrm.ru/api/v5/store/products?apiKey=' . $apiKey . '&filter[manufacturer]=' .  $request->manufacturer . '&filter[name]=' .  $request->vendorcode);

        $response = json_decode($response->getBody(), true);

        $offerId = $response['products'][0]['offers'][0]['id'];

        $link = 'https://superposuda.retailcrm.ru/api/v5/orders/create?apiKey=' . $apiKey;

        $order = [
            'number' => '16041981',
            'lastName' => $request->surname,
            'firstName' => $request->name,
            'patronymic' => $request->patronymic,
            'customerComment' => $request->comment,
            'orderType' => 'fizik',
            'orderMethod' => 'test',
            'status' => 'trouble',
            'items' => [
                '0' => [
                    'offer' => [
                        'id' => $offerId,
                    ],
                ],
            ],
        ];

        $order = json_encode($order);

        $response = $client->request('POST', $link, [
            'form_params' => [
                'site' => 'test',
                'order' => $order,
            ]
        ]);

        $response = json_decode($response->getBody(), true);

        $product = $response['order']['items'][0]['offer']['name'];

        return redirect()->back()->with('success', 'Заказ товара - ' . $product . ' - успешно отправлен, ' . $request->name);
    }
}
