<h1>Food Recommendation Form</h1>
<form action="{{ route('food.recommendation') }}" method="POST">
    <!-- Laravel CSRF Token -->
    @csrf

    <!-- Lokasi -->
    <label for="location">Lokasi:</label>
    <input type="text" id="location" name="location" placeholder="Masukkan lokasi (contoh: Bandung)" required>
    <br><br>

    <!-- Kategori Makanan -->
    <label for="category">Kategori Makanan:</label>
    <select id="category" name="category" required>
        <option value="">Pilih Kategori</option>
        <option value="Tradisional">Tradisional</option>
        <option value="Modern">Modern</option>
        <option value="Vegetarian">Vegetarian</option>
        <option value="Cepat Saji">Cepat Saji</option>
    </select>
    <br><br>

    <!-- Tombol Submit -->
    <button type="submit">Dapatkan Rekomendasi Makanan</button>
</form>
