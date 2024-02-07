<?php 
namespace App\GraphQL\Queries;

use App\Models\Author;
use Closure;
use GraphQL\Error\Error;
use Nuwave\Lighthouse\Execution\ErrorHandler;

// use App\GraphQL\Exceptions\CustomException;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;


class GetAuthorOtherInformation
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
      

        
        try {
            // arguments of query is:  $args
            // selected fields : $resolveInfo->getFieldSelection()
            // return Error::createLocatedError('Yee error hai '.json_encode($resolveInfo));
            $authorDetails = Author::get();
            $data = [];
            $sr_no = 0;
            if ($authorDetails) {
                foreach ($authorDetails as $key => $authorDetail) {
                    $author_data = new \stdClass();
                    $author_data->name = $authorDetail->author_name;
                    $author_data->email = str_replace(' ', '', $authorDetail->author_name);
                    $author_data->mobile = rand(6666666666, 9999999999);
                    $author_data->wifeName = 'rosni';
                    $author_data->AverageIncome = rand(1000, 5000);

                    $obj = new \stdClass();
                    $obj->name = "Text Book " . (++$sr_no);
                    $obj->title = "Title of Book " . (++$sr_no);
                    $author_data->PopularBooks = $obj;
                    $data[] = $author_data;
                }
            }
            return $data;
        } catch (\Throwable $e) {
            // Log the error or handle it in any other way you see fit
            // throw new \Nuwave\Lighthouse\Exceptions\DefinitionException("An error occurred: " . "s");
            return Error::createLocatedError('You have entered wrong type');
            
        }
    }
}
