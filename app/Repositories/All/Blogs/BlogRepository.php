<?php
namespace App\Repositories\All\Blogs;

use App\Models\Blog;  // Import the Category Model
use App\Repositories\Base\BaseRepository;

class BlogRepository extends BaseRepository implements BlogInterface
{
    protected $model;

    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;  
    }

}
