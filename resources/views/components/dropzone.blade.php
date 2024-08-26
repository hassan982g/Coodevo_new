<div wire:ignore>
    <div class="dropzone" {{ $attributes }}></div>
</div>

@php
    $collectionName = $attributes['collection-name'] ?? 'default';
    $mediaCollections = $this->mediaCollections ?? [];
@endphp

@push('scripts')
<script>
    Dropzone.options[("{{ $attributes['id'] }}")] = {
        acceptedFiles: 'image/*',
        url: "{{ $attributes['action'] }}",
        maxFilesize: {{ $attributes['max-file-size'] ?? 2 }},
        maxFiles: {{ $attributes['max-files'] ?? 'null' }},
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            @if($attributes['max-width'])
            max_width: {{ $attributes['max-width'] }},
            @endif
            @if($attributes['max-height'])
            max_height: {{ $attributes['max-height'] }},
            @endif
            size: {{ $attributes['max-file-size'] ?? 2 }},
            model_id: {{ $attributes['model-id'] ?? 0 }},
            model_name: "{{ $attributes['model-name'] ?? 'portfolio' }}",
            collection_name: "{{ $attributes['collection-name'] ?? 'default' }}"
        },
        success: function(file, response) {
            @this.addMedia(response.media)
        },
        removedfile: function(file) {
            file.previewElement.remove()

            if (file.status === 'error') {
                return;
            }

            if (file.xhr) {
                var response = JSON.parse(file.xhr.response)
                @this.removeMedia(response.media)
            } else {
                @this.removeMedia(file)

                if (this.options.maxFiles !== null) {
                    this.options.maxFiles++
                }
            }
        },
        init: function() {
            var self = this;
            document.addEventListener("livewire:init", function() {
                let mediaCollections = @json($mediaCollections);
                let collectionName = "{{ $collectionName }}";
                let files = mediaCollections[collectionName] || [];

                if (files.length > 0) {
                    files.forEach(function(file) {
                        let fileClone = JSON.parse(JSON.stringify(file));
                        self.files.push(fileClone);
                        self.emit("addedfile", fileClone);
                        if (fileClone.preview_thumbnail !== undefined) {
                            self.emit("thumbnail", fileClone, fileClone.preview_thumbnail);
                        } else {
                            self.emit("thumbnail", fileClone, fileClone.url);
                        }

                        self.emit("complete", fileClone);
                        if (self.options.maxFiles !== null) {
                            self.options.maxFiles--;
                        }
                    });
                }
            });
        },
        error: function(file, response) {
            file.previewElement.classList.add('dz-error');
            
            let message = typeof response === 'string' ? response : response.errors.file;
            
            let elements = file.previewElement.querySelectorAll('[data-dz-errormessage]');
            elements.forEach(function(element) {
                element.textContent = message;
            });
        }

    }
</script>
@endpush