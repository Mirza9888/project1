@extends('layouts.app')




@section('content')

    <form method="POST" action="{{'store'}}">
        @csrf
        <div class="form-group">
            <label for="Add New User">Name</label>
            <input type="text" id="name" name="name"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter Username" required autofocus>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div>

            <label>
            <select name="user_type" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Choose are you  customer or support</option>


                <option value="1">Customer</option>
                <option value="2">Support</option>

            </select>
            </label>

        </div>


        <button type="submit" class="btn btn-primary">Add User</button>
    </form>









    @endsection
