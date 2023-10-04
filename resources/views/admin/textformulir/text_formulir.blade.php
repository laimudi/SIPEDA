@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Text Formulir')

@section('content')

<div class="pagetitle">
    <h1>Text Formulir</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Text Formulir</li>
    </ol>
    </nav>
</div>

<section class="section">
    @if (Session::has('tambah'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (Session::has('edit'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="col-12 col-md-12 order-md-12 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              @if ($textfor == null)
                              <button type="button" class="btn btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#tambahTextFor">
                                    Text Formulir
                              </button>
                              @include('admin.textformulir.modal_tambah')
                              @else
                              <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="modal" data-bs-target="#editTextFor">
                                    Edit Text Formulir
                              </button>
                              @include('admin.textformulir.modal_edit')
                              @endif
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card-body shadow pt-3">
              <div class="tab-content pt-2">
                @if ($textfor != null)
                <div class="d-flex justify-content">
                  <p>{!! nl2br($textfor->text_formulir) !!}</p>
                </div>
                @endif
              </div>
            </div>
        </div>
    </div>
</section>
    
@endsection