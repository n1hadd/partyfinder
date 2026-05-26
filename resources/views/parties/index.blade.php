@extends('layouts.app')

@section('title', 'PartyFinder • Discover Events')

@section('content')
<div class="container">
    {{-- HERO / FILTER BAR --}}
    <div class="pf-hero mb-4">
        <div class="pf-hero-inner p-4 p-lg-5">
            <div class="row align-items-end g-3">
                <div class="col-12 col-lg-8">
                    <h1 class="mb-2" style="font-weight:800; letter-spacing:-.5px;">
                        Discover your next <span class="pf-brand">night out</span>
                    </h1>
                    <p class="pf-muted mb-3" style="max-width: 52ch;">
                        Search parties, concerts, and festivals. Filter by location, date, and category — then jump into the vibe.
                    </p>

                    <div class="pf-glass px-3 py-3">
                        <div class="row g-2 align-items-end">
                            <div class="col-12 col-md-4">
                                <label class="form-label small pf-muted mb-1">Location</label>
                                <select class="form-select pf-input">
                                    <option>London, UK</option>
                                    <option>New York, NY</option>
                                    <option>Los Angeles, CA</option>
                                    <option>Miami, FL</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="form-label small pf-muted mb-1">Date</label>
                                <select class="form-select pf-input">
                                    <option>This Weekend</option>
                                    <option>Tonight</option>
                                    <option>Next 7 days</option>
                                    <option>This Month</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="form-label small pf-muted mb-1">Category</label>
                                <div class="d-flex gap-2">
                                    <select class="form-select pf-input">
                                        <option>Techno</option>
                                        <option>Party</option>
                                        <option>Concert</option>
                                        <option>Chill</option>
                                        <option>Student Events</option>
                                    </select>
                                    <button class="btn pf-btn-gradient px-4 rounded-pill">
                                        Find Events
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Small CTA area (optional) --}}
                <div class="col-12 col-lg-4">
                    <div class="pf-glass p-3 p-lg-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="pf-panel-title mb-1">Create an event</div>
                                <div class="small pf-muted">Got a party? Post it and invite the city.</div>
                            </div>
                            <button class="btn btn-outline-light rounded-circle" style="width:44px; height:44px;">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> {{-- /row --}}
        </div>
    </div>

    <div class="row g-4">
        {{-- MAIN GRID --}}
        <div class="col-12 col-lg-8">
            <div class="row g-4">
                @php
                    // Static/dummy data (frontend only)
                    $parties = [
                        [
                            'title' => 'Friday Night Fever',
                            'time' => 'July 15, 9:00 PM',
                            'location' => 'Fabric, London',
                            'tag' => 'TECHNO',
                            'img' => 'https://images.unsplash.com/photo-1506157786151-b8491531f063?auto=format&fit=crop&w=1200&q=70',
                        ],
                        [
                            'title' => 'Sunday Rooftop Chill',
                            'time' => 'July 16, 5:00 PM',
                            'location' => 'Skyline Bar',
                            'tag' => 'CHILL',
                            'img' => 'https://images.unsplash.com/photo-1520975958225-3f61d39a4a46?auto=format&fit=crop&w=1200&q=70',
                        ],
                        [
                            'title' => 'Underground Student Night',
                            'time' => 'July 16, 10:30 PM',
                            'location' => 'The Vault',
                            'tag' => 'PARTY',
                            'img' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=1200&q=70',
                        ],
                        [
                            'title' => 'City Lights Concert',
                            'time' => 'July 17, 8:00 PM',
                            'location' => 'Arena Hall',
                            'tag' => 'CONCERT',
                            'img' => 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&w=1200&q=70',
                        ],
                        [
                            'title' => 'Sunset House Session',
                            'time' => 'July 18, 7:00 PM',
                            'location' => 'Riverside Deck',
                            'tag' => 'CHILL',
                            'img' => 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=1200&q=70',
                        ],
                        [
                            'title' => 'Warehouse Techno',
                            'time' => 'July 19, 11:00 PM',
                            'location' => 'District 9',
                            'tag' => 'TECHNO',
                            'img' => 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?auto=format&fit=crop&w=1200&q=70',
                        ],
                    ];
                @endphp

                @foreach($parties as $party)
                    <div class="col-12 col-md-6">
                        <div class="card pf-card h-100">
                            <img src="{{ $party['img'] }}" class="card-img-top" alt="Party image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-0" style="font-weight:800;">
                                        {{ $party['title'] }}
                                    </h5>
                                    <span class="pf-chip">{{ $party['tag'] }}</span>
                                </div>

                                <div class="small pf-muted d-flex flex-column gap-1">
                                    <div><i class="bi bi-calendar3 me-2"></i>{{ $party['time'] }}</div>
                                    <div><i class="bi bi-geo-alt me-2"></i>{{ $party['location'] }}</div>
                                </div>

                                <div class="mt-3 d-flex gap-2">
                                    <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-3">
                                        View Details
                                    </a>
                                    <button class="btn btn-sm rounded-pill px-3 pf-btn-gradient">
                                        Going
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        {{-- RIGHT SIDEBAR --}}
        <div class="col-12 col-lg-4">
            <div class="pf-glass p-3 p-lg-4 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="pf-panel-title">Categories</div>
                    <button class="btn btn-sm btn-outline-light rounded-pill px-3">Reset</button>
                </div>

                <div class="pf-divider"></div>

                <div class="vstack gap-2">
                    @php
                        $cats = ['Party', 'Concert', 'Techno', 'Chill', 'Student Events'];
                    @endphp

                    @foreach($cats as $i => $cat)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cat{{ $i }}" {{ $cat === 'Techno' ? 'checked' : '' }}>
                            <label class="form-check-label" for="cat{{ $i }}">
                                {{ $cat }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="pf-glass p-3 p-lg-4 mb-4">
                <div class="pf-panel-title mb-2">Date Picker</div>
                <div class="small pf-muted mb-3">July 2026 (static UI)</div>

                {{-- Simple static calendar grid (UI only) --}}
                <div class="row row-cols-7 g-2 text-center small">
                    @foreach(['S','M','T','W','T','F','S'] as $d)
                        <div class="col pf-muted">{{ $d }}</div>
                    @endforeach

                    @for($day=1; $day<=31; $day++)
                        <div class="col">
                            <div class="py-1 rounded-3 {{ in_array($day,[14,15]) ? 'text-dark' : '' }}"
                                 style="{{ in_array($day,[14,15]) ? 'background: linear-gradient(90deg,#ff63f6,#b680ff,#3fe5ff); font-weight:800;' : 'background: rgba(0,0,0,.25); border: 1px solid rgba(255,255,255,.08); color: rgba(255,255,255,.85);' }}">
                                {{ $day }}
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="pf-glass p-3 p-lg-4">
                <div class="pf-panel-title mb-2">Location radius</div>
                <div class="d-flex justify-content-between small pf-muted">
                    <span>0 km</span>
                    <span>50 km</span>
                </div>
                <input type="range" class="form-range mt-2" min="0" max="50" value="30">

                <div class="mt-3">
                    <button class="btn w-100 pf-btn-gradient rounded-pill">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection