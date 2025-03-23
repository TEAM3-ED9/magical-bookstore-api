<?php

declare(strict_types=1);

use Tests\TestCase;

class BookTest extends TestCase
{
    public function test_get_all_books(): void
    {
        ob_start();

        $this->get('/');
        $books_json = json_decode(ob_get_contents(), true);
        ob_end_clean();

        $this->assertIsArray($books_json);
    }

    public function test_get_book_by_id(): void
    {
        ob_start();

        $this->get('/books/show/1');
        $book_json = json_decode(ob_get_contents(), true);
        ob_end_clean();

        $this->assertIsArray($book_json);
    }    
}
