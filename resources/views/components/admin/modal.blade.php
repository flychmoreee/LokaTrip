@props([
    'id',
    'title',
    'size' => 'modal-lg', // default size
    'method' => 'POST',
    'action' => '#',
    'submitText' => 'Simpan',
    'fields' => [],
    'bodyText' => null,
    'isDelete' => false,
    'isEdit' => false
])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered {{ $size }} modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            @if($isDelete)
                {{-- Delete Modal Content --}}
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">{{ $bodyText ?? 'Item ini akan dihapus secara permanen' }}</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger color-fff">Hapus</button>
                </div>
            @else
                {{-- Create/Edit Modal Content --}}
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(strtoupper($method) !== 'POST')
                        @method($method)
                    @endif
                    
                    <div class="modal-body">
                        @foreach($fields as $field)
                            <div class="mb-3">
                                @if(isset($field['label']))
                                    <label for="{{ $field['name'] }}" class="form-label">{{ $field['label'] }}</label>
                                @endif
                                
                                @if($field['type'] === 'hidden')
                                    <input type="hidden" 
                                           id="{{ $field['name'] }}"
                                           name="{{ $field['name'] }}"
                                           value="{{ $field['value'] ?? '' }}">

                                @elseif($field['type'] === 'text' || $field['type'] === 'number' || $field['type'] === 'email' || $field['type'] === 'tel')
                                    <input type="{{ $field['type'] }}" 
                                           class="form-control" 
                                           id="{{ $field['name'] }}"
                                           name="{{ $field['name'] }}"
                                           value="{{ $field['value'] ?? '' }}"
                                           placeholder="{{ $field['placeholder'] ?? '' }}"
                                           {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>
                                
                                @elseif($field['type'] === 'textarea')
                                    <textarea class="form-control" 
                                              id="{{ $field['name'] }}"
                                              name="{{ $field['name'] }}"
                                              rows="{{ $field['rows'] ?? 3 }}"
                                              placeholder="{{ $field['placeholder'] ?? '' }}"
                                              {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>{{ $field['value'] ?? '' }}</textarea>
                                
                                @elseif($field['type'] === 'file')
                                    <input type="file" 
                                           class="form-control" 
                                           id="{{ $field['name'] }}"
                                           name="{{ str_ends_with($field['name'], '[]') ? $field['name'] : $field['name'] . '[]' }}"
                                           accept="{{ $field['accept'] ?? 'image/*' }}"
                                           {{ isset($field['multiple']) && $field['multiple'] ? 'multiple' : '' }}
                                           onchange="validateFileCount(this, 5)"
                                           {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>
                                    @if(isset($field['help']))
                                        <small class="text-muted">{{ $field['help'] }}</small>
                                    @endif
                                    
                                    {{-- Preview Container untuk Multiple Images --}}
                                    <div class="image-preview-container mt-2 d-flex flex-wrap gap-2">
                                        @if(isset($field['preview']))
                                            @foreach(array_slice((array)$field['preview'], 0, 5) as $image)
                                                <div class="position-relative preview-item">
                                                    <img src="{{ $image }}" alt="Preview" class="img-thumbnail" style="max-height: 100px">
                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-preview" 
                                                            style="margin: 2px;">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">{{ $submitText }}</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>

<script>
function validateFileCount(input, maxFiles) {
    if (input.files.length > maxFiles) {
        alert('Maksimal upload ' + maxFiles + ' file');
        input.value = '';
    }
}
</script>
