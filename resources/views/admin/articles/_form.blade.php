<div class="space-y-4 rounded-3xl">
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-300 mb-2">Judul</label>
        <input type="text" name="judul" id="judul" value="{{ old('judul', $article->judul ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>

    <div>
        <label for="gambar_artikel" class="block text-sm font-medium text-gray-300 mb-2">URL Gambar</label>
        <input type="text" name="gambar_artikel" id="gambar_artikel"
            value="{{ old('gambar_artikel', $article->gambar_artikel ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>

    <div>
        <label for="deskripsi_gambar" class="block text-sm font-medium text-gray-300 mb-2">Deskripsi Gambar</label>
        <input type="text" name="deskripsi_gambar" id="deskripsi_gambar"
            value="{{ old('deskripsi_gambar', $article->deskripsi_gambar ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>

    <div>
        <label for="penulis" class="block text-sm font-medium text-gray-300 mb-2">Penulis</label>
        <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $article->penulis ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>

    <div>
        <label for="deskripsi_sampul" class="block text-sm font-medium text-gray-300 mb-2">Deskripsi Sampul</label>
        <input type="text" name="deskripsi_sampul" id="deskripsi_sampul"
            value="{{ old('deskripsi_sampul', $article->deskripsi_sampul ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>

    <div>
        <label for="isi_deskripsi" class="block text-sm font-medium text-gray-300 mb-2">Isi Artikel</label>
        <textarea name="isi_deskripsi" id="isi_deskripsi" rows="5"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white">{{ old('isi_deskripsi', $article->isi_deskripsi ?? '') }}</textarea>
    </div>

    <div>
        <label for="tanggal_publikasi" class="block text-sm font-medium text-gray-300 mb-2">Tanggal Publikasi</label>
        <input type="date" name="tanggal_publikasi" id="tanggal_publikasi"
            value="{{ old('tanggal_publikasi', $article->tanggal_publikasi ?? '') }}"
            class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white" />
    </div>
</div>