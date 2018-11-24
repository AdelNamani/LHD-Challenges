@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div style="margin-bottom: 10px">
                            <div style="display: inline-block;padding-top: 10px">
                                Your score is {{$userScore}} !
                            </div>
                            <div class="float-right">
                                <form action="{{route('validate')}}" method="POST" class="float-right">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" name="flag" class="form-control" placeholder="Enter the flag"
                                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if(isset($_GET['result']))
                            <?php $result = $_GET['result'] ?>
                            @if($result=='true')
                                <div class="alert alert-success" role="alert">
                                    Good job :)
                                </div>
                            @endif
                            @if($result=='false')
                                <div class="alert alert-danger" role="alert">
                                    Try again ;)
                                </div>
                            @endif
                            @if($result=='exist')
                                <div class="alert alert-warning" role="alert">
                                    Already validated --'
                                </div>
                            @endif
                        @endif
                    </div>

                </div>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Score</th>
                    </tr>
                    </thead>
                    <?php $i = 0; ?>
                    <tbody>
                    @foreach($users as $user)
                        <?php $i++ ?>
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['score']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
