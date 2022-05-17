<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function store()
    {
        $book = Book::create($this->validateRequest());

        return redirect($book->path());
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());

        return redirect($book->path());
    }

    public function destroy(Book $book)
    {
        $book->delete($book);

        return redirect('/books');
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
