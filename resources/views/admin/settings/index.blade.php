@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">Site Settings</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <tbody>
                        <tr>
                            <td width="200">Site Name</td>
                            <td>
                                <form action="" method="post" class="form-inline">
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn btn-link">
                                        Change
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Homepage banner</td>
                            <td>
                                <form action="" method="post" class="form-inline" enctype="multipart/form-data">
                                    <input type="file" class="form-control">
                                    <input type="file" class="form-control">
                                    <input type="file" class="form-control">
                                    <button type="submit" class="btn btn-link">
                                        Change
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
