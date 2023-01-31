<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function distribute(Request $request)
    {
        // Validation for number of people should be integer
        $validated = $request->validate([
            'numOfPeople' => 'required|integer|min:1',
        ]);

        // Initializations
        $shapes = ['S', 'H', 'D', 'C'];
        $numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'X', 'J', 'Q', 'K'];
        $cards = [];

        // Any shapres with random number
        foreach($shapes as $shape) {
            foreach($numbers as $number) {
                $cards[] = $shape."-".$number;
            }
        }

        // Create a new collection instance from the array using method 'collect'
        // Shuffle method randomly shuffles the items in the collection
        $collection = collect($cards);
        $shuffled = $collection->shuffle();
        $shuffled->all();

        $numOfPeople = $request->numOfPeople;
        $cardsPerPerson = floor(count($shuffled) / $numOfPeople);

        // Checking any number less than 0 is an invalid value
        if ($cardsPerPerson < 1)
            $cardsPerPerson = 1;
        $answer = '';

        for($m = 0; $m < $numOfPeople; $m++) {
            $answer .= 'Person #'.($m + 1).' : ';
            for($n = $m * $cardsPerPerson; $n < ($m + 1) * $cardsPerPerson; $n++) {
                if ($n < 52) {
                    $answer .= $shuffled[$n].',';
                    unset($shuffled[$n]);
                }
            }
            $answer .= '<br/>';
        }

        return view('home', ['answer' => $answer]);
    }
}
