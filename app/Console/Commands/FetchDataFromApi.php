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
                $images = json_encode($product['images']);
                Product::create([
                    'title' => $product['title'],
                    'price' => $product['price'],
                    'description' => $product['description'],
                    'category' => $product['category'],
                    'images' => $images,
                    'seller_id' => 1
                ]);
            }
        

        $this->info('Data fetched and stored successfully!');
    }
}
