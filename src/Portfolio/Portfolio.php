<?php

namespace Akash\PortfolioApp\Portfolio;

class Portfolio
{
    public function get()
    {
        return [
            [
                'id' => 1,
                'title' => 'Web Developer'
            ],
            [
                'id' => 2,
                'title' => 'App Developer'
            ]
        ];
    }
}
