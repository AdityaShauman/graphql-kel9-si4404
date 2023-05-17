<?php

namespace App\GraphQL\Types;

use App\Models\Movie;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class MovieType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Movie',
        'description' => 'Collection of movies and details of movies',
        'model' => Movie::class
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id filmnya',
            ],
            'nama' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Judul film',
            ],
            'episode' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'jumlah episode film',
            ],
            'durasi' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Durasi film',
            ],
            'sutradara' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Sutradara film',
            ],
            'genre' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Genre film',
            ],
            'tahun_rilis' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Tahun rilis film',
            ],
            'rating' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Rating film',
            ]
        ];
    }
}
