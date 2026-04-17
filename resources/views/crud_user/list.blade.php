@extends('dashboard')

@section('content')
<style>
    .table-wrapper {
        border-radius: 16px;
        overflow: hidden;

    }

    .badge-like {
        background-color: #e0e7ff;
        color: #4338ca;
        padding: 0.5em 0.85em;
        font-weight: 600;
    }

    .btn-action {
        border-radius: 8px;
        /* Bo nút vuông vức hiện đại */
        font-weight: 500;
    }
</style>

<main class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <div class="card shadow border-0 table-wrapper">

                <div class="card-header bg-primary text-white py-3 border-0">
                    <h4 class="mb-0 fw-bold text-center text-uppercase" style="letter-spacing: 1px;">
                        Quản Lý Người Dùng
                    </h4>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-primary px-4 py-3">ID</th>
                                    <th scope="col" class="text-primary py-3">Họ & Tên</th>
                                    <th scope="col" class="text-primary py-3">Email</th>
                                    <th scope="col" class="text-primary py-3">Sở Thích</th>
                                    <th scope="col" class="text-primary text-center py-3">Thao Tác</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <td class="px-4 text-secondary"><strong>#{{ $user->id }}</strong></td>
                                    <td class="fw-semibold">{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge badge-like rounded-pill">
                                            {{ $user->like ?? 'Không có' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-outline-primary btn-sm btn-action">Xem</a>
                                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-outline-warning btn-sm btn-action">Sửa</a>
                                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-outline-danger btn-sm btn-action" onclick="return confirm('Chắc chắn muốn xóa {{ $user->name }} này ?')">Xóa</a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <h5 class="fw-light">Chưa có user</h5>
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
</main>
@endsection