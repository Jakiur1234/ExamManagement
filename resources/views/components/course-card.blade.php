<div
    class="coursecard p-5 mx-auto bg-gray-900 h-auto w-11/12 shadow-sm shadow-amber-600 hover:shadow-lg hover:shadow-amber-600 cursor-text" data-aos="flip-left" data-aos-duration="20000">
    <div class="image text-center">
        <img src="{{$imageurl}}" class="mx-auto max-w-full max-h-[200px]">
    </div>
    <div class="course-title text-2xl text-center font-bold text-white mt-5">
        {{ $title }}
    </div>
    <div class="course-description text-md text-justify text-gray-300 mt-5">
        {{ $description }}
    </div>
    <div class="course-instructor text-center text-amber-400 text-lg mt-3 font-semibold">
        Instructor: <br> {{ $instructor }} {{ $subject }}
    </div>
    <div class="grid  grid-cols-3 items-center bg-gray-800 mt-5 rounded-md">
        <div class="text-xl text-center text-purple-400 p-3">
            Total Exams : {{ $totalexam }}
        </div>
        <div class="text-2xl text-center text-purple-400 p-3 bg-slate-600">
            {{ $price }}
        </div>
        <div class="text-xl text-center text-purple-400 p-3">
            For Class : {{ $class }}
        </div>
    </div>
    <button
        class="mt-5 text-center text-lg bg-purple-700 w-full p-3 text-white rounded-lg cursor-pointer hover:bg-purple-800 active:bg-purple-400 active:cursor-wait hover:shadow-sm hover:shadow-amber-400">
        Enroll Now
    </button>
</div>
