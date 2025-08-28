<?php
namespace App\Repositories\All\BlogComments;

use App\Models\BlogComment;  // Import the Category Model
use App\Repositories\Base\BaseRepository;

class BlogCommentRepository extends BaseRepository implements BlogCommentInterface
{
    protected $model;

    public function __construct(BlogComment $BlogComment)
    {
        $this->model = $BlogComment;  
    }

}
