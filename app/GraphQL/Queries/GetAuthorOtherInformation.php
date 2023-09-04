<?php

namespace App\GraphQL\Queries;
use App\Models\Author;
use Illuminate\Support\Str;
use stdClass;

final class GetAuthorOtherInformation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
       $authorDetails = Author::get();
       $data = [];
       $sr_no = 0;
       if($authorDetails){
            foreach($authorDetails  as $key=>$authorDetail){
                $author_data = new stdClass();
                $author_data->name = $authorDetail->author_name;
                $author_data->email = str_replace(' ','',$authorDetail->author_name);
                $author_data->mobile = rand(6666666666,9999999999);
                $author_data->wifeName = 'rosni';
                $author_data->AverageIncome = rand(1000,5000);

                // $authorDetails[$key]->name = $authorDetail->author_name;
                // $authorDetails[$key]->email = str_replace(' ','',$authorDetail->author_name);
                // $authorDetails[$key]->mobile = rand(6666666666,9999999999);
                // $authorDetails[$key]->wifeName = 'rosni';
                // $authorDetails[$key]->AverageIncome = rand(1000,5000);

                $obj = new stdClass();
                $obj->name = "TExt Book ".(++$sr_no);
                $obj->title = "Title of Book ".(++$sr_no);
                $author_data->PopularBooks =$obj;
                $data[] = $author_data;
            }
            
       }
      return $data;
    }
}
