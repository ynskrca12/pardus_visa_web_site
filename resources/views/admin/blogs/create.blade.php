@extends('layouts.admin')

@section('title', 'Yeni Blog Yazısı Ekle')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Yeni Blog Yazısı Ekle
                    </h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>Geri Dön
                        </a>
                    </div>
                </div>

                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Sol Kolon -->
                            <div class="col-md-8">
                                <!-- Başlık -->
                                <div class="form-group">
                                    <label for="title">Başlık <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           id="title"
                                           name="title"
                                           value="{{ old('title') }}"
                                           placeholder="Blog yazısının başlığını girin..."
                                           required>
                                    @error('title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Kısa Açıklama -->
                                <div class="form-group">
                                    <label for="excerpt">Kısa Açıklama</label>
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror"
                                              id="excerpt"
                                              name="excerpt"
                                              rows="3"
                                              placeholder="Blog yazısının kısa açıklaması...">{{ old('excerpt') }}</textarea>
                                    @error('excerpt')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- İçerik -->
                                <div class="form-group">
                                    <label for="content">İçerik <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror"
                                              id="content"
                                              name="content"
                                              rows="15"
                                              placeholder="Blog yazısının tam içeriğini buraya yazın..."
                                              required>{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Sağ Kolon -->
                            <div class="col-md-4">
                                <!-- Yayın Ayarları -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Yayın Ayarları</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Durum -->
                                        <div class="form-group">
                                            <label for="status">Durum <span class="text-danger">*</span></label>
                                            <select class="form-control @error('status') is-invalid @enderror"
                                                    id="status"
                                                    name="status"
                                                    required>
                                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Taslak</option>
                                                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Yayınlanmış</option>
                                                <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Arşivlenmiş</option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Öne Çıkan -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="featured"
                                                       name="featured"
                                                       value="1"
                                                       {{ old('featured') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="featured">
                                                    Öne Çıkan Blog
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Görsel -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Öne Çıkan Görsel</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       class="custom-file-input @error('image') is-invalid @enderror"
                                                       id="image"
                                                       name="image"
                                                       accept="image/*">
                                                <label class="custom-file-label" for="image">Görsel seçin...</label>
                                                @error('image')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <small class="form-text text-muted">
                                                JPG, PNG, GIF (Max: 2MB)
                                            </small>

                                            <!-- Görsel Önizleme -->
                                            <div class="mt-3" id="imagePreview" style="display: none;">
                                                <img id="previewImg" src="" class="img-thumbnail" style="max-width: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SEO Ayarları -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">SEO Ayarları</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Meta Title -->
                                        <div class="form-group">
                                            <label for="meta_title">Meta Başlık</label>
                                            <input type="text"
                                                   class="form-control @error('meta_title') is-invalid @enderror"
                                                   id="meta_title"
                                                   name="meta_title"
                                                   value="{{ old('meta_title') }}"
                                                   placeholder="SEO başlığı">
                                            @error('meta_title')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Meta Description -->
                                        <div class="form-group">
                                            <label for="meta_description">Meta Açıklama</label>
                                            <textarea class="form-control @error('meta_description') is-invalid @enderror"
                                                      id="meta_description"
                                                      name="meta_description"
                                                      rows="3"
                                                      placeholder="SEO açıklama">{{ old('meta_description') }}</textarea>
                                            @error('meta_description')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Keywords -->
                                        <div class="form-group">
                                            <label for="keywords">Anahtar Kelimeler</label>
                                            <input type="text"
                                                   class="form-control @error('keywords') is-invalid @enderror"
                                                   id="keywords"
                                                   name="keywords"
                                                   value="{{ old('keywords') }}"
                                                   placeholder="vize, seyahat, blog">
                                            @error('keywords')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                            <small class="form-text text-muted">
                                                Virgülle ayırarak yazın
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i>Blog Yazısını Kaydet
                        </button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.history.back()">
                            <i class="fas fa-times mr-2"></i>İptal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Görsel önizleme
    $('#image').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImg').attr('src', e.target.result);
                $('#imagePreview').show();
            }
            reader.readAsDataURL(file);
            $('.custom-file-label').text(file.name);
        } else {
            $('#imagePreview').hide();
            $('.custom-file-label').text('Görsel seçin...');
        }
    });

    // Form validation
    $('form').on('submit', function(e) {
        let isValid = true;

        if ($('#title').val().trim() === '') {
            isValid = false;
            $('#title').addClass('is-invalid');
        }

        if ($('#content').val().trim() === '') {
            isValid = false;
            $('#content').addClass('is-invalid');
        }

        if (!isValid) {
            e.preventDefault();
            alert('Lütfen zorunlu alanları doldurun.');
        }
    });
});
</script>
@endpush
