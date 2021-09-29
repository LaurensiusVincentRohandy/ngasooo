@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-4">
            <img src="{{ asset('storage/images/logo-bulet.png') }}">
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                <form method="POST" action="/home">
                    @csrf

                    <div class="form-group mb-2">
                        <label for="location" class="col-form-label">{{ __('Location') }}</label>
                        
                        <select id="location" class="custom-select @error('location') is-invalid @enderror">
                            <option selected>Choose Location</option>
                            <option value="tgr">Tangerang</option>
                            <option value="jkt">Jakarta</option>
                        </select>
                        
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="date" class="col-form-label">{{ __('Date') }}</label>
                        
                        <input id="date" class="date form-control @error('date') is-invalid @enderror" type="text" placeholder="Choose Date">
                        
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="duration" class="col-form-label">{{ __('Duration') }}</label>
                        
                        <select id="duration" class="custom-select @error('duration') is-invalid @enderror">
                            <option selected>Choose Duration</option>
                            <option value="30">30 Minutes</option>
                            <option value="60">60 Minutes</option>
                        </select>
                        
                        @error('duration')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Book') }}
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body  {
        background-image: url("{{ asset('storage/images/home-bg.jpg') }}");
        height: 70vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
<script type="text/javascript">
    $('.date').datepicker({ 
        format: 'dd-mm-yyyy',
        autoclose: true,
    });
</script>
@endsection