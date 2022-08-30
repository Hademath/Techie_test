@extends('layouts.app')

@section('content')

    <div class="container" style="display:flex; justify-content:center;margin-top:80px">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/students" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                
                    <p>Record Score for This student </p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row" style="display:flex; gap:20px;flex-direction:column; margin-top:20px">
                            <div class="control-group col-12">
                                <label for="maths">maths</label>
                                <input type="text" id="maths" class="form-control" name="maths"
                                       placeholder="Enter  Score" >
                            </div>
                             <div class="control-group col-12">
                                <label for="english">english</label>
                                <input type="text" id="english" class="form-control" name="english"
                                       placeholder="Enter  Score" >
                            </div>
                           
                             <div class="control-group col-12">
                                <label for="physics">physics</label>
                                <input type="text" id="physics" class="form-control" name="physics"
                                       placeholder="Enter  Score" >
                            </div>
                             <div class="control-group col-12">
                                <label for="class">Chemistry</label>
                                <input type="text" id="chemistry" class="form-control" name="chemistry"
                                       placeholder="Enter Score" >
                            </div>
                             <div class="control-group col-12">
                                <label for="class">History</label>
                                <input type="text" id="history" class="form-control" name="history"
                                       placeholder="Enter Score" >
                            </div>
                            <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <a href="#" id="submit">
                                  <button> Submit</button >
                                </a >
                            </div>
                        </div>
                        </div>
                       
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection