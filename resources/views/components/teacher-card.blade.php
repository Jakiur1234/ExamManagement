<div class="mx-auto w-4/5 shadow-lg text-white p-5 bg-gray-800 rounded-md" data-aos="zoom-out">
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
            <img src="{{$imageUrl}}/facebook.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='{{$whatsapp}}'">
            <img src="{{$imageUrl}}/whatsapp.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='{{$email}}'">
            <img src="{{$imageUrl}}/gmail.png" alt="" srcset="" class="h-6 mx-auto">
        </div>
    </div>
</div>
