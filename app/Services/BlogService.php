<?php

namespace App\Services;

use App\Repositories\All\Blogs\BlogInterface;

class BlogService
{
    protected $blogInterface;

    public function __construct(BlogInterface $blogInterface)
    {
        $this->blogInterface = $blogInterface;
    }

    public function store(array $data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('blogs', 'public');
        }

        return $this->blogInterface->create($data);
    }

    public function update(int $id, array $data)
    {
        // handle image upload
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('blogs', 'public');
        }

        return $this->blogInterface->update($id, $data);
    }
}
