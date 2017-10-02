@extends('layout.app')

@section('content')
    <section>
      @include('layout._menu')
      <div class="jumbotron">
          <h1 class="display-3 text-primary">About Church</h1>
      </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('image/stjoseph.jpg')}}" alt="SJOC" class="img-thumbnail">
            </div>
            <div class="col-sm-8">
                <h3 class="fw-400">About St.Joseph</h3>
                <p class="lead">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-8">
                <h3 class="fw-400">History</h3>
                <p class="lead">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="{{asset('image/about.jpg')}}" alt="SJOC" class="img-thumbnail">
            </div>
         </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <img src="{{asset('image/about.jpg')}}" alt="SJOC" class="img-thumbnail">
                </div>
                <div class="col-sm-8">
                    <h3 class="fw-400">Managing Committee</h3>
                    <p class="lead">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
            </div>
    </section>
@endsection