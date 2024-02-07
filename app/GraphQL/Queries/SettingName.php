<?php declare(strict_types=1);

namespace App\GraphQL\Queries;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;


final readonly class SettingName
{
    /** @param  array{}  $args */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return [
            'name' => "Sayli",
            'extra' =>json_encode($rootValue),
            'engagement' => false]
            ;
    }
}
