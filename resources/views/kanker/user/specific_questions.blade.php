@extends('layouts.home')

@section('content')
<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('Assets/img/bg2.jpg') }}')">
        <span class="mask bg-gradient-primary opacity-4"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-3 mt-n5">Konsultasi Online</h1>
                    <p class="lead text-white mt-3">Silahkan dapat Mengisi Data Berikut. <br />
                    </p>
                    <a href="{{ route('basiskasus.konsultasi') }}" class="btn bg-white text-dark">Konsultasi</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <div class="container mt-5">
        <h1>Pertanyaan Spesifik</h1>

        @foreach($categories as $category)
        <h2>{{ $category->name }}</h2>
        <form action="{{ route('deteksi.store') }}" method="POST">
            @csrf
            <input type="hidden" name="category_id" value="{{ $category->id }}">
            @foreach($category->specificQuestions as $question)
            <div class="form-group">
                <label>{{ $question->question }}</label>
                <input type="radio" id="yes_{{ $question->id }}" name="specific_question_{{ $question->id }}"
                    value="yes" required>
                <label for="yes_{{ $question->id }}">IYA</label>
                <input type="radio" id="no_{{ $question->id }}" name="specific_question_{{ $question->id }}" value="no"
                    required>
                <label for="no_{{ $question->id }}">TIDAK</label>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endforeach
    </div>
</div>



<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 ms-auto">
                <h4 class="mb-1">Thank you for your support!</h4>
                <p class="lead mb-0">We provide cancer consultation services</p>
            </div>
            <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                <a href="Javascript:void(0)" class="btn btn-twitter mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1"></i> Tweet
                </a>
                <a href="Javascript:void(0)" class="btn btn-facebook mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1"></i> Share
                </a>
                <a href="Javascript:void(0)" class="btn btn-pinterest mb-0 me-2" target="_blank">
                    <i class="fab fa-pinterest me-1"></i> Pin it
                </a>
            </div>
        </div>
    </div>
</div>
<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

</div>
@endsection