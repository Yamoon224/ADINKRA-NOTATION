<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-1 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('submissions.index') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('locale.cv')</li>
                </ol>
            </nav>
            <h2 class="h4">@lang('locale.submission', ['suffix'=>'']) N° {{ $submission->id }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @php
                                $url = $submission->cv;
                                $isPdf = Str::endsWith($url, '.pdf');
                                $isImage = Str::endsWith($url, ['.jpg', '.jpeg', '.png', '.gif', '.webp']);
                            @endphp

                            @if ($isPdf)
                                {{-- Affichage PDF via Google Docs Viewer --}}
                                <iframe 
                                    src="https://docs.google.com/gview?embedded=true&url={{ urlencode($url) }}" 
                                    width="100%" 
                                    height="600px" 
                                    style="border: none;">
                                </iframe>
                            @elseif ($isImage)
                                {{-- Affichage de l'image --}}
                                <img src="{{ $url }}" alt="CV Image" class="img-fluid w-100" />
                            @else
                                {{-- Lien cliquable pour autres fichiers --}}
                                <a href="{{ $url }}" target="_blank" class="btn btn-outline-primary">
                                    Ouvrir le fichier
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</x-app-layout>
