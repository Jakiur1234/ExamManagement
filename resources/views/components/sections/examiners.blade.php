<section class="examiners bg-gray-900 px-5 pt-10 pb-10">
    <div class="container mx-auto">
        <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
            Our Best Examiners
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-1">
            @php
                $teachers = config('teachers');
            @endphp

            @foreach ($teachers as $teacher)
                <x-teacher-card imageurl="{{ $imageUrl }}/{{ $teacher['image'] }}" name="{{ $teacher['name'] }}"
                    subject="{{ $teacher['subject'] }}" about="{{ $teacher['about'] }}"
                    whatsapp="{{ $teacher['whatsapp'] ?? '' }}" facebook="{{ $teacher['facebook'] ?? '' }}"
                    email="{{ $teacher['email'] ?? '' }}" />
            @endforeach

        </div>
    </div>
</section>
