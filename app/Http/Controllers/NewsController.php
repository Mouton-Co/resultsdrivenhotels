<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function show($slug)
    {
        // get info based on slug (currently just mocked)
        $article = [
            'title' => 'Beautiful Space',
            'content' => "<p>As travelers increasingly seek unique and contemporary experiences, hotels are embracing modern architecture to redefine hospitality spaces. From sleek, minimalist designs to innovative use of materials and technology, modern hotels are reshaping the guest experience. Architectural firms are collaborating with hoteliers to create striking structures that blend functionality with aesthetic appeal, incorporating sustainable features and flexible spaces to accommodate the evolving needs of travelers.</p><p>With a focus on creating memorable and Instagram-worthy spaces, modern hotels are incorporating elements like rooftop gardens, open-air atriums, and modular furniture to foster a sense of connection with both the environment and fellow guests. Embracing the principles of adaptability and inclusivity, these architectural marvels cater to a diverse range of travelers while setting new standards for luxury and comfort in the hospitality industry.</p>",
            'date' => '26 September 2019',
            'image' => asset('images/general/staircase.png'),
            'relatedPosts' => [
                [
                    'title' => 'Modernizing Spaces',
                    'slug' => 'modernizing-spaces',
                    'image' => asset('images/general/lamppost.png'),
                    'date' => '13 March 2023',
                    'excerpt' => "We're looking at some exciting new venues.",
                ],
                [
                    'title' => 'Hygiene Standards',
                    'slug' => 'hygiene-standards',
                    'image' => asset('images/general/hygiene.png'),
                    'date' => '8 February 2024',
                    'excerpt' => "Even though the pandemic is over, we will be maintaining the same strict hygiene protocols.",
                ],
                [
                    'title' => 'Christmas Specials',
                    'slug' => 'christmas-specials',
                    'image' => asset('images/general/merry-merry.png'),
                    'date' => '12 December 2023',
                    'excerpt' => "Incredible December packages will become available to celebrate Christmas.",
                ],
            ],
        ];

        return view('pages.news.template')->with(compact('article'));
    }
}
