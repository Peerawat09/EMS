@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Equipment List') }}</div>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="card-header">
                    <a href="{{ route('equipment.create') }}">Add Equipment</a>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Group of Equipment</th>
                                    <th>Serial Number</th>
                                    <th>Name</th>
                                    <th>Cost (Baht)</th>
                                    <th>Location</th>
                                    <th>Starting Date</th>
                                    <th>Status</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->group_of_equipment }}</td>
                                    <td>{{ $value->serialNo }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->cost_baht }}</td>
                                    <td>{{ $value->location }}</td>
                                    <td>{{ $value->starting_date }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>{{ $value->company }}</td>
                                    <td>
                                        <form action="{{ route('equipment.destroy', $value->id) }}" method="post">
                                            <a href="{{ route('equipment.show', $value->id) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('equipment.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this equipment?')">Delete</button>
                                        </form>
                                    </td>
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
