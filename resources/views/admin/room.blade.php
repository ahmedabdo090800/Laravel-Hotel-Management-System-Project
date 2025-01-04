@extends('admin.master')
@section('title','Hotel Room')
@section('content')

<div class="ml-5 mr-5">

  @if (session('status-message'))
  <div class="alert alert-success">
      {{ session('status-message') }}
  </div>
@endif


    <form method="get" action="{{ url('store') }}" enctype="multipart/form-data" class="max-w-sm mx-auto">
        @csrf
          <input type="text" name="title_room"  class="text-white border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Room Title" required />
          


          <textarea id="message" name="description" rows="4" class="text-white block  w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" placeholder="Description of the room"></textarea>

          <input type="text" name="price" class="text-white border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block " placeholder="Price" required />

          <label >Select Type Room</label>

          <select name="room_type" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option selected value="Regular">Regular</option>
            <option value="Premium">Premium</option>
            <option value="deluxe">deluxe</option>
          </select>

          <label >Wifi Room</label>

          <select name="wifi" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option selected value="yes">Yes</option>
            <option value="no">No</option>

          </select>



          
    <label class="">Upload Images</label>
    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

  




        

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </form>
      


</div>
 


@endsection