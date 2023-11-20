<section class="review bg-gray-700 pb-10 pt-10 px-5">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 text-4xl" data-aos="fade-up">
            Students Review
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-3 p-12">
            @php
                $students = config('studentsreview');
            @endphp

            @foreach ($students as $student)
                <x-student-card imageurl="{{ $imageUrl }}/{{ $student['image'] }}" text="{{ $student['text'] }}"
                    name="{{ $student['name'] }}" />
            @endforeach

        </div>
    </div>
</section>
