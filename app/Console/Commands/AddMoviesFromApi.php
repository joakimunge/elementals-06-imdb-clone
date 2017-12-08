<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Movie;

class AddMoviesFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:movies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Connects to themoviedb API and fetches movies and feeds the data into your database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
        $apiKey = 'ec3cda1b6d80802d7b2222e300f2f846';
        $client = new Client();
        $res = $client->get('https://api.themoviedb.org/3/movie/popular?api_key=' . $apiKey);

        echo $res->getStatusCode();
        // echo $res->getHeader('content-type');     
        $body = $res->getBody();
        $body = json_decode($body, true);
        $movies = $body['results'];

        foreach($movies as $movie) {

            $row = new Movie();
            $row->title = $movie['title'];
            $row->summary = $movie['overview'];
            $row->release_date = $movie['release_date'];
            $row->rating = $movie['vote_average'];

            $row->save();
        }

        echo 'All movies added successfully!';
    }
}
