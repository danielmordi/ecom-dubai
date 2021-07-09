@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">Site Settings</h4>
            </div>
            <div class="card-body">
                {{-- Cha --}}
                <h5>Change logo</h5>
                <div id="alert-media"></div>
                <form action="" method="post" class="mb-3" enctype="multipart/form-data">
                    <div class='preview'>
                        <img src="{{ asset('storage/logo/'.$config->logo)?? '' }}" id="OpenImgUpload" width="100" height="100">
                    </div>
                   <div class="form-group">
                     <input type="file" class="form-control-file d-none" name="file" id="imgupload" placeholder="Chosse file" aria-describedby="fileHelpId">
                     <small>Click to upload image</small>
                   </div>
                    <button type="submit" class="btn btn-primary" id="storeLogo">
                        Change
                    </button>
                </form>
                {{-- Contact information --}}
                <hr>
                <h5>Contact information</h5>
                <div id="alert"></div>
                <form action="settings/update/contact-info" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Site name</label>
                        <input type="text" name="site_name" value="{{ $config->sitename }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" value="{{ $config->location }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="url" name="facebook" value="{{ $config->facebook }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="url" name="instagram" value="{{ $config->instagram }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ $config->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Whatsapp</label>
                        <input type="tel" name="whatsapp" value="{{ $config->whatsapp }}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" id="contactInformation">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
