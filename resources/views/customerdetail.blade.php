@extends('layout')

@section('title', 'Customer')

@section('content')

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
  
</head>

<body>
    <div class="container">
        <div class="form-container">
            <!-- Thông tin cá nhân -->
            <div class="info">
                <h2>Customer Information</h2>
                <form>
                    <div class="form-group">
                        <label for="ten">*Last Name:</label>
                        <input type="text" id="ten" name="ten" required>
                    </div>
                    <div class="form-group">
                        <label for="ho">*First Name:</label>
                        <input type="text" id="ho" name="ho" required>
                    </div>
                    <div class="form-group">
                        <label for="quoc-gia">*Country:</label>
                        <input type="text" id="quoc-gia" name="quoc-gia" required>
                    </div>
                    <div class="form-group">
                        <label for="dia-chi">*Location:</label>
                        <input type="text" id="dia-chi" name="dia-chi" required>
                    </div>
                    <div class="form-group">
                        <label for="so-dien-thoai">*Phone Number:</label>
                        <input type="tel" id="so-dien-thoai" name="so-dien-thoai" required>
                    </div>
                    <div class="form-group">
                        <label for="email">*Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </form>
            </div>
            

            <!-- Đơn hàng -->
            <div class="order">
                <h2>Order</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Amount</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Book Name</td>
                            <td>1</td>
                            <td>50.000 vnd</td>
                        </tr>
                        <tr>
                            <td>Book Name</td>
                            <td>1</td>
                            <td>50.000 vnd</td>
                        </tr>
                        <tr>
                            <td>Book Name</td>
                            <td>1</td>
                            <td>50.000 vnd</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total</td>
                            <td>150.000 vnd</td>
                        </tr>
                        <tr>
                            <td colspan="2">Delivery Charge</td>
                            <td>15.000 vnd</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Amount</td>
                            <td id="thanh-tien">165.000 vnd</td>
                        </tr>
                    </tfoot>
                </table>
                <button class="btn-submit"  onclick="window.location.href='{{ url('/success') }}'">Delivery fee</button>
            </div>
            
        </div>
        <div class="feedback">
            <textarea class="feedback-textarea" placeholder="Add your order requirements..."></textarea>
            <button type="submit" class="btn-submit-feedback">Submit</button>
        </div>
        
    </div>
</body>

</html>
@endsection
