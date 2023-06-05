<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\Http;


class FetchDataFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetches data from requested api and stores it on the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://dummyjson.com/products');
        $data = $response->json();

        
            foreach ($data['products'] as $product) {
                // $images = json_encode($product['images']);
                // $array = json_decode("[$images]", true);
                
                // $image1 = $array[0];
                // // $image2 = $array[1];
                // // $image3 = $array[2];

                $images = $product['images'];
    
                $image1 = isset($images[0]) ? $images[0] : null;
                $image2 = isset($images[1]) ? $images[1] : null;
                $image3 = isset($images[2]) ? $images[2] : null;

                Product::create([
                    'title' => $product['title'],
                    'price' => $product['price'],
                    'description' => $product['description'],
                    'category' => $product['category'],
                    'image1' => $image1,
                    'image2' => $image2,
                    'image3' => $image3,
                    'seller_id' => 1
                ]);
            }
        

        $this->info('Data fetched and stored successfully!');
    }
}
