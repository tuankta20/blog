<?php


namespace App\Http\Services\impl;


use App\Blog;
use App\Http\Ripositories\BlogRepositoryInterface;
use App\Http\Ripositories\Eloquent\BlogEloquentRepository;
use App\Http\Services\BlogServiceInterface;
use http\Env\Request;

class BlogImplService implements BlogServiceInterface
{
protected $blogrepositoryinterface;

public function __construct(BlogEloquentRepository $blogRepository )
{
    $this->blogrepositoryinterface=$blogRepository;
}

    public function getAll()
    {
       return $this->blogrepositoryinterface->getAll();
    }

    public function store( $request)
    {
        $blogs= new Blog();
        $blogs->name = $request->name;
        $this->blogrepositoryinterface->save($blogs);
    }

    public function update( $request,$id)
    {

    }

    public function destroy($id)
    {

    }
}
