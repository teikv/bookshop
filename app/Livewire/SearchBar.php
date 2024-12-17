<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class SearchBar extends Component
{
        public $query = ''; // Input người dùng nhập vào
        public $results = []; // Kết quả tìm kiếm
    
        // Theo dõi sự thay đổi của query
        public function updatedQuery()
        {
            // Tìm kiếm sách dựa trên query
            $this->results = Book::where('title', 'like', '%' . $this->query . '%')
                ->orWhere('description', 'like', '%' . $this->query . '%')
                ->take(5) // Giới hạn kết quả trả về
                ->get();
        }
    public function render()
    {
        return view('livewire.search-bar');
    }
}
