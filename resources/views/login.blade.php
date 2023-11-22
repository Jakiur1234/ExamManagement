@extends('main.main')
@section('document-title')
    Login
@endsection
@section('body-section')
    <section class="top mt-16 py-5 bg-gray-700">
        <div class="grid p-5 mx-auto bg-gray-800 rounded-lg w-11/12 lg:w-1/3 md:w-8/12 sm:w-8/12 md:p-10">
            <div class="text-4xl text-center text-purple-300 underline mb-5">
                Login
            </div>
            <form action="" method="post">
                @csrf
                <div>
                    <label for="resigtration_no" class="block text-white text-md mx-auto w-full font-bold">Registration No</label>
                    <input type="number" name="registration_no" autocomplete="off"
                    class="shadow appearance-none leading-tight w-full px-3 py-2 mt-1 rounded-sm font-sans ring-1 ring-red-400 focus:outline-none focus:shadow-outline" />
                </div>
                <div class="mt-5">
                    <label for="password" class="block text-white text-md mx-auto w-full font-bold">Password</label>
                    <input type="password" name="password" autocomplete="off"
                    class="shadow appearance-none leading-tight w-full px-3 py-2 mt-1 rounded-sm font-sans ring-1 ring-red-400 focus:outline-none focus:shadow-outline" />
                </div>
                <div class="text-sm md:text-md mt-5 text-slate-500">
                    Don't have an account. <a href="{{route('signup')}}" class="text-blue-500">Create a new one. </a>
                </div>
                <div>
                    <button class="text-center mt-5 bg-purple-600 text-white px-5 py-2 w-full rounded-md hover:bg-purple-800 active:bg-purple-300">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
