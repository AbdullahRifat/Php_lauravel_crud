<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <h1 class="mx-auto w-75 text-center ">Edit Product</h1>
    <form method="post" class="mx-auto w-75 " action="{{route('product.update',['product'=>$product])}}">
{{-- for security --}}
        @csrf
        @method('put')
        <ul>
           
        </ul>
        
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input value="{{$product->name}}" type="text" name="name" class="form-control" id="name" placeholder="name" aria-describedby="emailHelp">
         
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input value="{{$product->qty}}"   type="text" name="qty" class="form-control" id="qty" placeholder="quantity" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{$product->price}}" name="price" type="text" class="form-control" id="price" placeholder="price" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input value="{{$product->description}}" name="description" type="text" class="form-control" id="description" placeholder="description" aria-describedby="emailHelp">
           
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>