@extends('main.main')
@section('document-title')
    Signup Form
@endsection
@section('body-section')
    <section class="top mt-16 py-5 bg-gray-700">
        <div class="grid p-5 mx-auto bg-gray-800 rounded-lg w-11/12 lg:w-1/3 md:w-8/12 sm:w-8/12 md:p-10">
            <div class="text-4xl text-center text-cyan-300 underline mb-5">
                Sign Up Now
            </div>
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username" class="block text-white text-md mx-auto w-full font-bold">Name</label>
                    <input type="text" name="email" autocomplete="off"
                    class="shadow appearance-none leading-tight w-full px-3 py-2 mt-1 rounded-sm font-sans ring-1 ring-cyan-400 focus:outline-none focus:shadow-outline" />
                </div>
                <div class="mt-5">
                    <label for="email" class="block text-white text-md mx-auto w-full font-bold">Email</label>
                    <input type="email" name="email" autocomplete="off"
                    class="shadow appearance-none leading-tight w-full px-3 py-2 mt-1 rounded-sm font-sans ring-1 ring-cyan-400 focus:outline-none focus:shadow-outline" />
                </div>
                <div class="mt-5">
                    <label for="password" class="block text-white text-md mx-auto w-full font-bold">Password</label>
                    <input type="password" name="password" autocomplete="off"
                    class="shadow appearance-none leading-tight w-full px-3 py-2 mt-1 rounded-sm font-sans ring-1 ring-cyan-400 focus:outline-none focus:shadow-outline" />
                </div>
                <div class="text-sm md:text-md mt-5 text-slate-500">
                    Already have an account. <a href="{{route('login')}}" class="text-blue-500">Login now and enjoy. </a>
                </div>
                <div>
                    <button class="text-center mt-5 bg-cyan-600 text-white px-5 py-2 w-full rounded-md hover:bg-cyan-800 active:bg-cyan-300">
                        Signup
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
