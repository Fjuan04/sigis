<!-- resources/views/components/errors.blade.php -->
@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        @foreach($errors->all() as $error)
            <p class="text-sm">{{ $error }}</p>
        @endforeach
    </div>
@endif