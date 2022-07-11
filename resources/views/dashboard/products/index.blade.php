@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">My Products</h1>
    <div class="row">
</div>

<div class="table-responsive">
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->stock }}</td>
      <td>
        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection