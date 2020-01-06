<?php


namespace App\Http\Ripositories\Eloquent;


use App\Blog;
use App\Http\Ripositories\BlogRepositoryInterface;

class BlogEloquentRepository implements BlogRepositoryInterface
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog=$blog;
    }

    public function getAll()
    {
       return $this->blog->all();
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function findByid($id)
    {
        return $this->blog->find($id);
    }

    public function delete($obj)
    {
           $obj->delete();
    }
}
