<x-app-layout>
    <div class="row mt-4">
        <div class="col-12 col-lg-4 mb-4 mb-xxl-0">
            <a href="{{ route('submissions.index') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <h2 class="fs-5 fw-normal">@lang('locale.total_submissions')</h2>
                        <h3 class="fs-1 fw-extrabold mb-1">{{ $submissions->count() }}</h3>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-12 col-lg-4 mb-4 mb-xxl-0">
            <a href="{{ route('submissions.index') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <h2 class="fs-5 fw-normal">@lang('locale.total_assigned_submissions')</h2>
                        <h3 class="fs-1 fw-extrabold mb-1">{{ $submissions->filter(fn ($s) => $s->assignments->isNotEmpty())->count() }}</h3>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-12 col-lg-4 mb-4 mb-xxl-0">
            <a href="{{ route('submissions.index') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <h2 class="fs-5 fw-normal">@lang('locale.total_evaluated_submissions')</h2>
                        <h3 class="fs-1 fw-extrabold mb-1">{{ $submissions->filter(fn ($item) => $item->evaluations && $item->evaluations->isNotEmpty())->count() }}</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="table-responsive py-4">
                        <table class="table user-table table-flush table-hover table-striped" id="datatable">
                            <thead class="thead-light">
                                <th class="border-gray-200">#</th>
                                <th class="border-gray-200">@lang('locale.photo') & @lang('locale.cv')</th>
                                <th class="border-gray-200">@lang('locale.full_name')</th>
                                <th class="border-gray-200">@lang('locale.email') & @lang('locale.phone')</th>
                                <th class="border-gray-200">@lang('locale.country') & @lang('locale.address')</th>
                                <th class="border-gray-200">@lang('locale.occupation') & @lang('locale.personnal_website')</th>
                                <th class="border-gray-200">@lang('locale.organization') & @lang('locale.organization_website')</th>
                                <th class="border-gray-200">@lang('locale.score') / @lang('locale.result', ['suffix'=>'s'])</th>
                                <th class="border-gray-200">@lang('locale.average')</th>
                            </thead>
                            <tbody>
                                @foreach ($topSubmissions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $item->photo }}" class="avatar img-fluid me-3" alt="LOGO">
                                        <a href="{{ $item->cv }}" target="_blank">
                                            <svg fill="#000000" version="1.1" style="height: 25px; width: 25px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 45.057 45.057" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="_x35_8_24_"> <g> <path d="M19.558,25.389c-0.067,0.176-0.155,0.328-0.264,0.455c-0.108,0.129-0.24,0.229-0.396,0.301 c-0.156,0.072-0.347,0.107-0.57,0.107c-0.313,0-0.572-0.068-0.78-0.203c-0.208-0.137-0.374-0.316-0.498-0.541 c-0.124-0.223-0.214-0.477-0.27-0.756c-0.057-0.279-0.084-0.564-0.084-0.852c0-0.289,0.027-0.572,0.084-0.853 c0.056-0.281,0.146-0.533,0.27-0.756c0.124-0.225,0.29-0.404,0.498-0.541c0.208-0.137,0.468-0.203,0.78-0.203 c0.271,0,0.494,0.051,0.666,0.154c0.172,0.105,0.31,0.225,0.414,0.361c0.104,0.137,0.176,0.273,0.216,0.414 c0.04,0.139,0.068,0.25,0.084,0.33h2.568c-0.112-1.08-0.49-1.914-1.135-2.502c-0.644-0.588-1.558-0.887-2.741-0.895 c-0.664,0-1.263,0.107-1.794,0.324c-0.532,0.215-0.988,0.52-1.368,0.912c-0.38,0.392-0.672,0.863-0.876,1.416 c-0.204,0.551-0.307,1.165-0.307,1.836c0,0.631,0.097,1.223,0.288,1.77c0.192,0.549,0.475,1.021,0.847,1.422 s0.825,0.717,1.361,0.949c0.536,0.23,1.152,0.348,1.849,0.348c0.624,0,1.18-0.105,1.668-0.312 c0.487-0.209,0.897-0.482,1.229-0.822s0.584-0.723,0.756-1.146c0.172-0.422,0.259-0.852,0.259-1.283h-2.593 C19.68,25.023,19.627,25.214,19.558,25.389z"></path> <polygon points="26.62,24.812 26.596,24.812 25.192,19.616 22.528,19.616 25.084,28.184 28.036,28.184 30.713,19.616 28,19.616 "></polygon> <path d="M33.431,0H5.179v45.057h34.699V6.251L33.431,0z M36.878,42.056H8.179V3h23.706v4.76h4.992L36.878,42.056L36.878,42.056z"></path> </g> </g> </g> </g></svg>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <span class="fw-bold"> {{ $item->fullname }}</span>
                                            <div class="small text-gray">
                                                <span class="__cf_email__">{{ $item->nationality }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <span class="fw-bold"> {{ $item->phone }}</span>
                                            <div class="small text-gray">
                                                <span class="__cf_email__">{{ $item->email }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <span class="fw-bold"> {{ $item->country }}</span>
                                            <div class="small text-gray">
                                                <span class="__cf_email__">{{ $item->address }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <span class="fw-bold"> {{ $item->occupation }}</span>
                                            <div class="small text-gray">
                                                <span class="__cf_email__">{{ $item->personnal_website }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <span class="fw-bold"> {{ $item->organization }}</span>
                                            <div class="small text-gray">
                                                <span class="__cf_email__">{{ $item->organization_website }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-normal">
                                            @if ($item->evaluations && $item->evaluations->isNotEmpty())
                                                {{ $item->evaluations->sum('score') }} / {{ $item->evaluations->count('score') }}
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-normal">
                                            @if ($item->evaluations && $item->evaluations->isNotEmpty())
                                                {{ round($item->evaluations->sum('score') / $item->evaluations->count('score'), 2) }} / 100
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
