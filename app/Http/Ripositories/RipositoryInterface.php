<?php


namespace App\Http\Ripositories;


interface RipositoryInterface
{
        public function getAll();
        public function save($obj);
        public function findByid($id);
        public function delete($obj);
}
