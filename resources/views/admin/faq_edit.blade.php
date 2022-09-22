@extends('admin.layout.app')
@section('heading', 'FAQs Düzenle')

@section('right_top_button')
    <a href="{{ route('admin.faq_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> FAQs</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.faq_update', $faq_data->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Soru</label>
                                        <input type="text" class="form-control" name="question"
                                            value="{{ $faq_data->question }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Cevap</label>
                                        <textarea name="answer" class="form-control" style="height: 150px;" id="" cols="30" rows="10">{{ $faq_data->question }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Düzenle</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
