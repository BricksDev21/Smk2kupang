@extends('layouts.app',[
	'title' => 'Edit Galeri'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

        <label>Input Galeri</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.updateGuru', $guru->guru_id) }}"> 
        @csrf
        @method('PUT')
        <label>NAMA</label><br>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $guru->nama) }}"><br>
        @error('nama')
            {{ $message }}
        @enderror
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="gambar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"  data-default-file="{{ Storage::url('public/guru/').$guru->gambar }}">
                    </div>
                </div>
            </div>
            <label>Status</label>
                        <select required="" class="form-control" name="status_id">
                        <option selected="" disabled="">- PILIH STATUS -</option>
                        <option selected="selected">{{ $guru->status_id }}</option>
                        @foreach($status as $data)
                            <option value="{{ $status->status_id }}">{{ $status->status_name }}</option>
                        @endforeach
                        </select>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });

    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });
</script>
@endpush