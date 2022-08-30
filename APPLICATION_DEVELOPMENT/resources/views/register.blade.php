@extends('layouts.app')

@section('content')

    <div class="container" style="display:flex; justify-content:center;margin-top:80px">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/students" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Register new Student</h1>
                    <p>Fill and submit this form below</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row" style="display:flex; gap:20px;flex-direction:column; margin-top:20px">
                            <div class="control-group col-12">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" name="firstname"
                                       placeholder="Enter  firstname" required>
                            </div>
                             <div class="control-group col-12">
                                <label for="lastname">lastname</label>
                                <input type="text" id="lastname" class="form-control" name="lastname"
                                       placeholder="Enter  lastname" required>
                            </div>
                             <div class="control-group col-12">
                                <label for="Gender">Gender</label>
                                <select name="sex" id="sex">
                                    <option value="male">Male</option>
                                      <option value="female">Female</option>
                                </select>
                            </div>
                             <div class="control-group col-12">
                                <label for="age">Age</label>
                                <input type="text" id="age" class="form-control" name="age"
                                       placeholder="Enter  age" required>
                            </div>
                             <div class="control-group col-12">
                                <label for="class">Class</label>
                                <input type="text" id="class" class="form-control" name="class"
                                       placeholder="Enter  class" required>
                            </div>
                            <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <a href="/register_student" id="submit">
                                  <button> Register Student</button >
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