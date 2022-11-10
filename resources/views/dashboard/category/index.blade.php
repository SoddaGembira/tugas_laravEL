@extends('layout.index')

@section('title', 'List Post')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>List Categories</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="/dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">List Categories</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Category</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="from-group">
                                    <label for="">Icon</label>
                                    <input type="file" class="form-control" name="icon">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Save <i class="fa fa-save"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- list data --}}

                <div class="col-md-8">
                    @if (Session::has('danger'))
                        <p class="alert alert-danger">
                            {{ Session::get('danger') }}
                        </p>
                    @endif
                    @if (Session::has('success'))
                        <p class="alert alert-success">
                            {{ Session::get('success') }}
                        </p>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Data Categories
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Icon</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($data as $key => $val)
                                        <tr>
                                            <td>{{ $val->id }}</td>
                                            <td>{{ $val->name }}</td>
                                            <td>
                                                <img src="{{ $val->icon }}" alt="" width="50px">
                                            </td>
                                            <td>{{ $val->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <a href="#" class="btn btn-secondary">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                tidak ada data
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
