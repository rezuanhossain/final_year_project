

@extends('layouts.app')
@section( 'content')

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{url('/')}}">Mentor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Discussions <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Topics</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul> -->
        <form class="form-inline my-2 my-lg-0" style="margin-left: auto;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4" >
                <div class="shadow-sm"  style="min-height:100vh;" >
                    <div class="card-body">
                        <ul class="card-text">
                            <li><a style="margin-bottom:1.5rem;" href="{{ route('question.create') }}" class="btn btn-primary "> Add New Discussion</a></li>
                            <li><a style="margin-bottom:1.5rem;" href="#" class="btn btn-outline-info" > Pupular</a></li>
                            <li><a style="margin-bottom:1.5rem;" href="#" class="btn btn-outline-info"> Solved</a></li>
                            <li><a style="margin-bottom:1.5rem;" href="#" class="btn btn-outline-info"> Unsolved</a></li>
                            <li><a style="margin-bottom:1.5rem;" href="#" class="btn btn-outline-info"> No Reply Yet</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 mt-2" style="max-height:100vh;overflow-y:scroll; ">
                @forelse($questions as $question)
                    <div class="card shadow-sm m-2">
                        <div class="card-body">
                       <div class="d-flex justify-content-between">
                           <div class="d-flex">
                                <!-- <img src="{{ $question->user->image ? asset($question->user->image) : asset('image/'.'avatar.jpg') }}"> -->
                                <h6 class="text mt-4 ml-1">{{ $question->user->name }}</h6>
                            </div>
                             <a href="#" > <button class="btn btn-outline-info float-right" >{{ $question->topic }}</button> </a>

                       </div>
                       <a href="{{ route('question.show',$question->id) }}" class="mt-2"><h5 class="card-title" style="color:black;">{{ $question->question }}</h5></a>
                        {{-- <p class="card-text">{!! substr( $question->body,0,50) !!}</p> --}}
                        <p class="card-text">{!! substr($question->body,0,100) !!} Continue....</p>
                        </div>
                    </div>
                @empty

                @endforelse
              </div>
            </div>

        </div>

    </main><!-- /.container -->
<style>
    ul li a{
      list-style:none;
    padding-top: .5rem;
    margin-bottom: 2rem;
    }
li{
    list-style:none;
    padding-top: .5rem;
    margin-bottom: 2rem;
}

    a{
        style:none;
        min-width:15vw;
    }
    img{
        height: 4rem;
        width:4rem;
    }

</style>
@endsection
