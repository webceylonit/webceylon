@extends('AdminDashboard.master')

@section('title', 'Social Media Links')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6 mt-3">
                <h4>Social Media Links</h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('socail.storeOrUpdate') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $socialMedia->facebook ?? '') }}">
                                    @error('facebook') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $socialMedia->instagram ?? '') }}">
                                    @error('instagram') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $socialMedia->linkedin ?? '') }}">
                                    @error('linkedin') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">YouTube</label>
                                    <input type="text" name="youtube" class="form-control" value="{{ old('youtube', $socialMedia->youtube ?? '') }}">
                                    @error('youtube') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">TikTok</label>
                                    <input type="text" name="tiktok" class="form-control" value="{{ old('tiktok', $socialMedia->tiktok ?? '') }}">
                                    @error('tiktok') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">WhatsApp</label>
                                    <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $socialMedia->whatsapp ?? '') }}">
                                    @error('whatsapp') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email', $socialMedia->email ?? '') }}">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" name="contact" class="form-control" value="{{ old('contact', $socialMedia->contact ?? '') }}">
                                    @error('contact') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Save Links</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection