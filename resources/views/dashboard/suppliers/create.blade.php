@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create New!</h1>
    <div class="row">
</div>

<form method="post" action="/admin/suppliers">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="telp" class="form-label">No Telp</label>
    <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required>
    @error('telp')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection