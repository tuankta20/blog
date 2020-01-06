<?php


namespace App\Http\Services;


use http\Env\Request;

interface ServiceInterface
{
       public function getAll();
       public function store( $request);
       public function update( $request,$id);
       public function destroy($id);
}
