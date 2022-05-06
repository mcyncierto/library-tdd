<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function store()
    {
        Book::create($this->validateRequest());
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());
    }

    private function validateRequest()
    {
        $data = request()->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        return $data;
    }
}
