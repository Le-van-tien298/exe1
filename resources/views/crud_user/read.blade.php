@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$messi->id}}</td>
                        <td>{{$messi->name}}</td>
                        <td>{{$messi->email}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class=""></div>
                <div class="col-sm-8 d-flex justify-content-between align-items-center">
                    <a href="{{ route('user.list') }}" class="link-blue">Quay về danh sách</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection