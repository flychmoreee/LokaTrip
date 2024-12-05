<h1>AI Trip Plan Generator</h1>
<form action="{{ route('trip.plan') }}" method="POST">
    <!-- Laravel CSRF Token -->
    @csrf

    <!-- Lokasi User -->
    <label for="user_location">Lokasi Anda:</label>
    <input type="text" id="user_location" name="user_location" placeholder="Masukkan lokasi Anda (contoh: Malang)"
        required>
    <br><br>

    <!-- Tujuan Perjalanan -->
    <label for="destination_locations">Tujuan Perjalanan:</label>
    <input type="text" id="destination_locations" name="destination_locations"
        placeholder="Masukkan tujuan (contoh: Bali, Surabaya)" required>
    <br><br>

    <!-- Kategori Perjalanan -->
    <label for="category">Kategori Perjalanan:</label>
    <select id="category" name="category" required>
        <option value="">Pilih Kategori</option>
        <option value="Belanja">Belanja</option>
        <option value="Petualangan">Petualangan</option>
        <option value="Jalan-Jalan">Jalan-Jalan</option>
    </select>
    <br><br>

    <!-- Tombol Submit -->
    <button type="submit">Generate Trip Plan</button>
</form>
