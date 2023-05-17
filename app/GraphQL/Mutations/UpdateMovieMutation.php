<?php

namespace App\graphql\Mutations;

use App\Models\Movie;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateMovieMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateMovie'
    ];

    public function type(): Type
    {
        return GraphQL::type('Movie');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'nama' => [
                'name' => 'nama',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'episode' => [
                'name' => 'episode',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'durasi' => [
                'name' => 'durasi',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'sutradara' => [
                'name' => 'sutradara',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'genre' => [
                'name' => 'genre',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'tahun_rilis' => [
                'name' => 'tahun_rilis',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'rating' => [
                'name' => 'rating',
                'type' =>  Type::nonNull(Type::int()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $movie = Movie::findOrFail($args['id']);
        $movie->fill($args);
        $movie->save();

        return $movie;
    }
}
