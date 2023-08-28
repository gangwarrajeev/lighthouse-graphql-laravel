<?php
namespace App\GraphQL\Queries;

use App\Models\Author;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Posts
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $author = Author::findOrFail($rootValue->id);

        $query = $author->posts();

        if (isset($args['orderBy'])) {
            $query->orderBy($args['orderBy']);
        }

        if (isset($args['limit'])) {
            $query->limit($args['limit']);
        }

        return $query->get();
    }
}