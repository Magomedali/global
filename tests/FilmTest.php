<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class FilmTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {   

        $data = [
            'name'=>'Побег из Шоушенка',
            'description'=>'Фильм',
        ];

        $this->put('/film',$data)->seeJsonEquals([
            'created'=>true
        ]);
    }
}
