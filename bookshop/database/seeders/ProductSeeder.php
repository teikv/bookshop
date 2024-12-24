<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    public const DEFAULT_CURRENCY = 'VNĐ';
    
    public $products = [
        [
            'id' => 1,
            'category_id' => 1,
            'name' => 'Sherlock Holmes',
            'description' => 'Tác phẩm kinh điển của Arthur Conan Doyle về thám tử thiên tài và người bạn đồng hành trung thành của ông, bác sĩ Watson.',
            'price' => 150000,
            'display_image_url' => 'https://file.hstatic.net/200000090875/file/sher1_5844446110bb45cba8cfb086e3066ed3_grande.jpg',
        ],
        [
            'id' => 2,
            'category_id' => 1,
            'name' => 'Murder on the Orient Express',
            'description' => 'Câu chuyện thám tử nổi tiếng của Agatha Christie về một vụ án mạng trên chuyến tàu sang trọng.',
            'price' => 180000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/c/c0/Murder_on_the_Orient_Express_First_Edition_Cover_1934.jpg',
        ],
        [
            'id' => 3,
            'category_id' => 1,
            'name' => 'The Girl with the Dragon Tattoo',
            'description' => 'Tiểu thuyết tội phạm của Stieg Larsson, theo chân một nhà báo và một hacker khi họ điều tra một vụ án bí ẩn.',
            'price' => 200000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/5/50/The_Girl_On_The_Train_%28US_cover_2015%29.png',
        ],
        [
            'id' => 4,
            'category_id' => 1,
            'name' => 'Gone Girl',
            'description' => 'Câu chuyện thám hiểm tâm lý của Gillian Flynn về một vụ mất tích bí ẩn.',
            'price' => 190000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/7/7e/Gone_Girl_%28Flynn_novel%29.jpg',
        ],
        [
            'id' => 5,
            'category_id' => 1,
            'name' => 'The Da Vinci Code',
            'description' => 'Cuốn tiểu thuyết nổi tiếng của Dan Brown về một bí mật tôn giáo được mã hóa.',
            'price' => 220000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/6/6b/DaVinciCode.jpg',
        ],
        [
            'id' => 6,
            'category_id' => 1,
            'name' => 'The Silent Patient',
            'description' => 'Một tiểu thuyết hồi hộp đầy bí ẩn của Alex Michaelides về một bệnh nhân không nói.',
            'price' => 210000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/d/df/The_Silent_Patient_early_2019_UK_edition.png',
        ],
        [
            'id' => 7,
            'category_id' => 2,
            'name' => 'Pride and Prejudice',
            'description' => 'Cuốn tiểu thuyết kinh điển của Jane Austen về tình yêu và những định kiến xã hội.',
            'price' => 170000,
            'display_image_url' => 'https://images.penguinrandomhouse.com/cover/9780593622452',
        ],
        [
            'id' => 8,
            'category_id' => 2,
            'name' => 'The Notebook',
            'description' => 'Một câu chuyện tình cảm lãng mạn đầy cảm xúc của Nicholas Sparks.',
            'price' => 180000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/d/d9/The_Notebook_Cover.jpg',
        ],
        [
            'id' => 9,
            'category_id' => 2,
            'name' => 'Me Before You',
            'description' => 'Tiểu thuyết của Jojo Moyes về một câu chuyện tình yêu sâu sắc và đầy xúc cảm.',
            'price' => 190000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/e/e0/Me_Before_You.jpg',
        ],
        [
            'id' => 10,
            'category_id' => 2,
            'name' => 'The Fault in Our Stars',
            'description' => 'Một câu chuyện tình cảm của John Green về tình yêu, mất mát và hy vọng.',
            'price' => 200000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/a/a9/The_Fault_in_Our_Stars.jpg',
        ],
        [
            'id' => 11,
            'category_id' => 2,
            'name' => 'A Walk to Remember',
            'description' => 'Một câu chuyện tình yêu đầy xúc động của Nicholas Sparks.',
            'price' => 180000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/a/a8/A_Walk_to_Remember_%28Hardcover%29.jpg',
        ],
        [
            'id' => 12,
            'category_id' => 2,
            'name' => 'Love Story',
            'description' => 'Câu chuyện tình yêu kinh điển của Erich Segal về hai người trẻ và hành trình yêu thương.',
            'price' => 190000,
            'display_image_url' => 'https://upload.wikimedia.org/wikipedia/en/d/d1/Love_Story_%28Erich_Segal_novel%29_cover.jpg',
        ],
    ];
    

    private function getProducts()
    {
        return collect($this->products);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getProducts() as $product) {
            $product['currency'] = self::DEFAULT_CURRENCY;

            Product::create($product);
        }
    }
}