<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="title-xxlarge mb-4">Segnalazioni</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-wrapper card-teaser-wrapper card-teaser-wrapper-equal card-teaser-block-3">
                @foreach($reports as $report)
                    <div class="card card-teaser card-teaser-image card-flex no-after">
                        <div class="card-image-wrapper">
                            <div class="card-image-rounded">
                                <svg class="icon icon-{{ $categories[$report['category']]['icon'] ?? 'warning' }}" aria-hidden="true">
                                    <use href="#icon-{{ $categories[$report['category']]['icon'] ?? 'warning' }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h5 mb-2">
                                {{ $report['title'] }}
                            </h3>
                            <div class="card-text">
                                <p class="mb-2">
                                    {{ Str::limit($report['description'], 100) }}
                                </p>
                                <p class="mb-2">
                                    <strong>Categoria:</strong> {{ $categories[$report['category']]['name'] ?? 'N/D' }}<br>
                                    <strong>Indirizzo:</strong> {{ $report['address'] }}<br>
                                    <strong>Stato:</strong> 
                                    <span class="badge bg-{{ $statuses[$report['status']]['color'] ?? 'secondary' }}">
                                        {{ $statuses[$report['status']]['label'] ?? 'Sconosciuto' }}
                                    </span>
                                    @if(isset($report['metadata']['priority']))
                                        <span class="badge bg-{{ match($report['metadata']['priority']) {
                                            'alta' => 'danger',
                                            'media' => 'warning',
                                            'bassa' => 'info',
                                            default => 'secondary'
                                        } }}">
                                            Priorità {{ $report['metadata']['priority'] }}
                                        </span>
                                    @endif
                                </p>
                                <p class="card-text small">
                                    Segnalato il {{ \Carbon\Carbon::parse($report['created_at'])->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if($reports->isEmpty())
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted">Nessuna segnalazione presente</p>
            </div>
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-12 text-center">
            <a href="{{ route('fixcity.report.create') }}" class="btn btn-primary">
                <svg class="icon icon-plus me-2" aria-hidden="true">
                    <use href="#icon-plus"></use>
                </svg>
                Nuova Segnalazione
            </a>
        </div>
    </div>
</div> 