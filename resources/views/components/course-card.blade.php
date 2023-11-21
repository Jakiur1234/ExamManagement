<div
    class="coursecard p-5 w-full mx-auto bg-gray-900 h-auto shadow-sm shadow-amber-600 hover:shadow-lg hover:shadow-amber-600 cursor-text" data-aos="flip-left" data-aos-duration="20000">
    <div class="image text-center">
        <img src="{{$imageurl}}" class="mx-auto max-w-full max-h-[200px]">
    </div>
    <div class="course-title text-lg text-center font-bold text-white mt-2 md:mt-3 md:text-2xl">
        {{ $title }}
    </div>
    <div class="course-description text-sm text-justify text-gray-300 mt-2 md:mt-3 md:text-md">
        {{ $description }}
    </div>
    <div class="course-instructor text-center text-amber-400 text-lg font-semibold mt-1 md:mt-3">
        Instructor : {{ $instructor }} {{ $subject }}
    </div>
    <div class="grid  grid-cols-3 items-center bg-gray-800 rounded-md mt-2 md:mt-5">
        <div class="text-md text-center text-purple-400 p-3 md:text-xl">
            Total Exams : {{ $totalexam }}
        </div>
        <div class="text-lg text-center text-purple-400 p-3 bg-slate-600 md:text-2xl">
            {{ $price }} {{$currency}}
        </div>
        <div class="text-md text-center text-purple-400 p-3 md:text-xl">
            For Class : {{ $class }}
        </div>
    </div>
    <button
        class="mt-5 text-center text-lg bg-purple-700 w-full p-3 text-white rounded-lg cursor-pointer hover:bg-purple-800 active:bg-purple-400 active:cursor-wait hover:shadow-sm hover:shadow-amber-400">
        Enroll Now
    </button>
</div>
