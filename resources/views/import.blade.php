@extends('base.app')


@section('content')
<section class="features-area section_gap">
  <div class="container">
  </div>
</section>
<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-header">

            Excel Import

        </div>

        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

              {{ csrf_field() }}
              {{ method_field('post') }}

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import Products</button>

            </form>

        </div>

    </div>

</div>
<section class="features-area section_gap">
  <div class="container">
  </div>
</section>
@endsection
