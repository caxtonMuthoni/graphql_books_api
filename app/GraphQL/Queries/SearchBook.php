<?php

namespace App\GraphQL\Queries;

class SearchBook
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return \App\Models\Book::where(
            'author','like', '%'.$args['search'].'%'
        )->orWhere(
            'title','like', '%'.$args['search'].'%'
        )->get();
    }
}
