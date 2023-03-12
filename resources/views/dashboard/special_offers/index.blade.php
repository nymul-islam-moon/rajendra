@extends('components.index')

@push('custome_header')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">

    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Special-Offer</a></li>
        </ol>
    </div>

    {{-- flash Message --}}
    <x-flash-message />

    {{-- flash Message --}}
    <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Special-Offer</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('dashboard.specialOffer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" step="0.01" class="form-control" value="{{ old('name') }}" placeholder="Enter The Offer Name">
                                    @error('name')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input" placeholder="Enter The Image">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>

                                    @error('image')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input type="number" name="price" id="price" step="0.01" class="form-control" value="{{ old('price') }}" placeholder="Enter The Offer Price">
                                    @error('price')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Start Date</label>
                                    <input  name="start_date" class="datepicker-default form-control" id="datepicker" value="{{ old('start_date') }}" placeholder="Enter Start Date">
                                    {{-- <input type="date" name="start_date" id="start_date" step="0.01" class="form-control" placeholder="Enter Start Date"> --}}
                                    @error('start_date')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group col-md-3">
                                    <label>End Date</label>
                                    <input  name="end_date" class="datepicker-default form-control" id="datepicker" value="{{ old('end_date') }}" placeholder="Enter End Date">
                                    @error('end_date')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Description </label>
                                    <textarea class="form-control" name="description" id="description" rows="4" id="comment">{{ old('description') }}</textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Special-Offer List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th class="width80">#</th>
                                    <th>Title</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Descriotion</th>
                                    <th>Active Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialOffers as $key=> $specialOffer)
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('dashboard.specialOffer.edit', $specialOffer->id) }}">Edit</a>
                                                    <form action="{{ route('dashboard.specialOffer.destroy', $specialOffer->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" href="#">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td><strong>{{ $key+1 }}</strong></td>
                                        <td>{{ $specialOffer->name }}</td>
                                        <td>{{ $specialOffer->start_date }}</td>
                                        <td>{{ $specialOffer->end_date }}</td>

                                        <td>{{ $specialOffer->description }}</td>
                                        <td>
                                            @if ($specialOffer->status == 1)
                                                <form action="{{ route('dashboard.specialOffer.status', $specialOffer->id) }}" method="post">
                                                    @csrf
                                                    @method('post')
                                                    <button type="submit" class="badge light badge-success">Active</button>
                                                </form>
                                            @else
                                                <form action="{{ route('dashboard.specialOffer.status', $specialOffer->id) }}" method="post">
                                                    @csrf
                                                    @method('post')
                                                    <button type="submit" class="badge light badge-danger">Deactive</button>
                                                </form>
                                            @endif
                                        </td>

                                        {{-- This part is for jquery --}}
                                        {{-- <td>
                                            @if ($specialOffer->status == '1')
                                            <form action="{{ route('dashboard.specialOffer.destroy', $specialOffer->id) }}" method="post">
                                                @csrf
                                                @method('post')
                                                <input type="checkbox" checked data-toggle="toggle">
                                            </form>

                                            @else
                                                <input type="checkbox" data-toggle="toggle">
                                            @endif
                                        </td> --}}
                                        {{-- This part is for jquery --}}

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('custome_script')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush
