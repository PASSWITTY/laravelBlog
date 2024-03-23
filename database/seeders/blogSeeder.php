<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Exploring the Wilderness',
                'content' => 'Embarking on a journey into the heart of nature, where the whispers of the wind and the rustle of leaves tell stories untold.',
                'author' => 'Elena Woods',
            ],
            [
                'title' => 'Unlocking Creativity',
                'content' => 'Diving into the depths of imagination, where colors merge and words dance, unlocking the door to a world of endless possibilities.',
                'author' => 'Oliver Blake',
                
            ],
            [
                'title' => 'A Taste of Adventure',
                'content' => 'Venturing into uncharted territories, savoring the thrill of discovery with every step, as the unknown beckons with promises of excitement.',
                'author' => 'Sophia Rivera',
                 
            ],
            [
                'title' => 'Reflections at Sunset',
                'content' => 'Basking in the golden hues of the setting sun, reflecting on the day\'s journey and embracing the tranquility that descends with twilight.',
                'author' => 'Liam Carter',
                 
            ],
            [
                'title' => 'Whispers of the Past',
                'content' => 'Listening to the echoes of history, as ancient tales weave through time, reminding us of the legacy we carry and the paths we tread.',
                'author' => 'Isabella Cruz',
                 
            ],
            [
                'title' => 'Embracing Change',
                'content' => 'Navigating the winds of change, embracing the unknown with open arms, for in the dance of transformation lies the essence of growth.',
                'author' => 'Maxwell Hayes',
                 
            ],
            [
                'title' => 'In Search of Serenity',
                'content' => 'Seeking solace amidst the chaos, finding peace in the gentle rhythm of nature\'s melody, where silence speaks louder than words.',
                'author' => 'Ava Bennett',
                 
            ],
            [
                'title' => 'Capturing Moments',
                'content' => 'Freezing time in the frame of memory, capturing fleeting moments that shimmer like dewdrops in the morning sun, immortalizing the beauty of life.',
                'author' => 'Daniel Evans',
                 
            ],
            [
                'title' => 'Echoes of Laughter',
                'content' => 'Echoes of laughter reverberate through the corridors of time, weaving a tapestry of joy that binds hearts and transcends the boundaries of age.',
                'author' => 'Emma Thompson',
                 
            ],
            [
                'title' => 'Chasing Dreams',
                'content' => 'Chasing dreams across the horizon, where the sky meets the sea, fueled by passion and driven by determination, with each step a stride closer to destiny.',
                'author' => 'Noah Foster',
                 
            ],
            [
                'title' => 'Harmony of Seasons',
                'content' => 'Witnessing the symphony of seasons, as nature orchestrates its ever-changing melody, painting the canvas of existence with hues of spring, summer, autumn, and winter.',
                'author' => 'Aria Rodriguez',
                 
            ],
            [
                'title' => 'Lost in Wanderlust',
                'content' => 'Wandering through the labyrinth of wanderlust, where every path leads to discovery and every turn reveals a new chapter in the story of adventure.',
                'author' => 'Gabriel Martinez',
                 
            ],
            [
                'title' => 'Savoring Simplicity',
                'content' => 'Embracing the beauty of simplicity in a world adorned with complexities, finding solace in the gentle rhythm of everyday life, where happiness lies in the little moments.',
                'author' => 'Emily Scott',
                 
            ],
            [
                'title' => 'Whispers of Wisdom',
                'content' => 'Listening to the whispers of wisdom that echo through the corridors of time, as the voices of sages past guide us on the journey of self-discovery.',
                'author' => 'Nathan Johnson',
                 
            ],
            [
                'title' => 'Embers of Hope',
                'content' => 'Nurturing the embers of hope amidst the darkness, for even in the bleakest of nights, the flame of resilience flickers, lighting the path to a brighter tomorrow.',
                'author' => 'Sophie Anderson',
                 
            ],
        ]);

    }
}
