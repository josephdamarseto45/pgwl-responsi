@extends('layouts.template')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header">
                <h3>Table Polyline</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Created at</th>


                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($polylines as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td> <!-- Fixed case sensitivity -->
                                <td>{{ $p->image }}</td> <!-- Fixed case sensitivity -->
                                <td>{{ $p->created_at }}</td> <!-- Fixed case sensitivity -->
                                <td>{{ $p->updated_at }}</td> <!-- Fixed case sensitivity -->



                                <td>
                                    <img src="{{ asset('storage/images/' . $p->image) }}" alt="image" width="200">
                                </td>
                                {{-- <td>{{ date_format($p->created_at, 'D, d M Y, H:i:s') }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('script')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endsection
