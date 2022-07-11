@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Suppliers</h1>
    <div class="row">
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success')}}
</div>
@endif

<div class="table-responsive">
  <a href="/admin/suppliers/create" class="btn btn-primary mb-3">Create new supplier</a>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Telp</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($suppliers as $supplier)
    <tr>
      <td>{{ $supplier->id }}</td>
      <td>{{ $supplier->name }}</td>
      <td>{{ $supplier->telp }}</td>
      <td>
        <a href="/admin/suppliers/{{ $supplier->id}}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
        <form action="/admin/suppliers/{{ $supplier->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection