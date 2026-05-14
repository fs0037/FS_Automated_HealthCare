@extends('master')

@section('title', 'System Gallery - Automated Health Care System')

@section('content')
    <section class="gallery-section">
        <<div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">
                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                @forelse($files as $file)
                    <div class="col-md-3">
                        <div class="filter-button">
                            <img src="{{ asset('assets/images/gallery/' . $file->getFilename()) }}" 
                                alt="Hospital Gallery" 
                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        </div>
                    </div>
                @empty
                    <p>There are currently no images in the gallery.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection

