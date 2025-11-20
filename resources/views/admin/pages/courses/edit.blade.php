@extends('admin.layout.master')
@section('title', 'Edit Course')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Course</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Heading + Image -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block font-semibold mb-1">Heading</label>
            <input type="text" name="heading" value="{{ $course->heading }}" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Image</label>
            <input type="file" name="image" class="w-full border px-3 py-2 rounded" accept="image/*" onchange="previewImage(event)">
            <div class="mt-2 flex items-center gap-4">
                <img id="imagePreview" src="{{ asset($course->image) }}" class="w-40 rounded border" />
            </div>
        </div>
    </div>

    <!-- Description -->
    <div>
        <label class="block font-semibold mb-1">Description</label>
        <textarea name="description" rows="4" class="w-full border px-3 py-2 rounded" required>{{ $course->description }}</textarea>
    </div>

    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">Update</button>

    <a href="{{ route('courses.index') }}" 
   class="mt-6 inline-block bg-gray-700 hover:bg-gray-800 text-white px-6 py-2 rounded">
    Back
</a>
</form>

<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        imagePreview.classList.remove('hidden');
    }
</script>
@endsection
