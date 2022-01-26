<div class="row">
    @forelse ($list as $item)
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{!! $item->description !!}</p>
                    @php
                        $link = null;
                        $name = null;
                            if($item->file){
                                $file = json_decode($item->file);
                                if(count($file) > 0){
                                    $link = $file[0]->download_link;
                                    $name = $file[0]->original_name;
                                }
                            }
                    @endphp
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ asset('storage/'.$link) }}" title="{{ $name }}" target="_blank" class="btn btn-success {{ $link ? '' : 'disabled' }}"> <i class="bi bi-cloud-download"></i> Descargar</a>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted text-right">
                                Registrado {{ date('d/M/Y', strtotime($item->publish_date)) }} <br>
                                <small>{{ \Carbon\Carbon::parse($item->publish_date)->diffForHumans() }}</small>
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <br>
            <h3 class="text-muted text-center">No se encontraron resultados</h3>
        </div>
    @endforelse
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 mt-5 pull-right">
        {{ $list->links() }}
    </div>
</div>

<script>
    $('.page-link').click(function(e){
        e.preventDefault();
        let link = $(this).attr('href');
        if(link){
            page = link.split('=')[1];
            getList(page);
        }
    });
</script>
