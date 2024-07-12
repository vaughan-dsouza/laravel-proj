<x-app-layout>
    <!-- He who is contented is rich. - Laozi -->
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
           @csrf
            <textarea name="note" rows="10" cols="" class="note-body" placeholder="Enter your text here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>
