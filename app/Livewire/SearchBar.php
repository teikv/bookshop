<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book; // Thay đổi nếu bạn tìm kiếm bảng khác (vd: Account, Order)

class SearchBar extends Component
{
    public $query = ''; // Query tìm kiếm
    public $results = []; // Kết quả trả về

    public function updatedQuery()
    {
        // Truy vấn dữ liệu (ví dụ tìm kiếm sách dựa trên title)
        $this->results = Book::where('Title', 'like', '%' . $this->query . '%')
            ->orWhere('Description', 'like', '%' . $this->query . '%')
            ->get()
            ->take(5); // Lấy 5 kết quả đầu tiên
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
