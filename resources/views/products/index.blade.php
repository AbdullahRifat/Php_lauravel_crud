<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="w-75 mx-auto">
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
            
        @endif
    </div>
    
    <h1 class="text-center">All Products</h1>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td class="flex gap-2"><button><a href="{{route('product.edit',['product'=>$product])}}">Edit</a></button> </td>
                    <td class="flex gap-2">
                        <form action="{{ route('product.delete', ['product' => $product]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                     </td>
                           
                </tr>
            @endforeach
        </tbody>
    </table>

   </div>
   <div class="text-center mt-4">
    <a href="{{ route('product.create') }}" class="btn btn-primary">Create New Product</a>
    </div>

    <!-- Bootstrap JavaScript (optional, for certain Bootstrap features like dropdowns, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
