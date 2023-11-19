<div class="mx-auto {{$width}} shadow-lg {{$textcolor}} p-5 {{$background}} rounded-md">
    <div class="text-center mx-auto">
        <img src="{{$imageurl}}" alt="" class="rounded-lg h-[200px] mx-auto">
    </div>
    <p class="text-2xl mt-5 text-center">
        {{$name}}
    </p>
    <p class="text-md text-red-500 text-center mb-5">
        {{$subject}}
    </p>
    <p class="text-md italic text-justify mb-5">
        {{$about}}
    </p>
    <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='{{$facebook}}'">
            <img src="{{ url('/') }}/images/facebook.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='{{$whatsapp}}'">
            <img src="{{ url('/') }}/images/whatsapp.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='{{$email}}'">
            <img src="{{ url('/') }}/images/gmail.png" alt="" srcset="" class="h-6 mx-auto">
        </div>
    </div>
</div>
