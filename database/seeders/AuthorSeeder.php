<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            [
                'name' => 'Nguyễn Nhật Ánh',
                'biography' => 'Tác giả nổi tiếng với nhiều tác phẩm văn học thiếu nhi'
            ],
            [
                'name' => 'Dale Carnegie',
                'biography' => 'Tác giả của nhiều cuốn sách về kỹ năng sống'
            ],
            [
                'name' => 'Paulo Coelho',
                'biography' => 'Nhà văn người Brazil nổi tiếng thế giới'
            ],
            [
                'name' => 'Haruki Murakami',
                'biography' => 'Nhà văn Nhật Bản được yêu thích toàn cầu'
            ],
            [
                'name' => 'J.K. Rowling',
                'biography' => 'Tác giả của series Harry Potter'
            ]
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}

