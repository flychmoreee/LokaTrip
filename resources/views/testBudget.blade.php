<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Plan Recommendation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Rekomendasi Tempat Wisata Berdasarkan Budget</h2>
        <form action="{{ route('budget.recommendation') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_location" class="form-label">Lokasi Pengguna</label>
                <input type="text" class="form-control" id="user_location" name="user_location" required>
            </div>
            <div class="mb-3">
                <label for="destination_city" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control" id="destination_city" name="destination_city" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori Perjalanan</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="adventure">Petualangan</option>
                    <option value="liburan">Liburan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="budget" class="form-label">Budget (Rp)</label>
                <input type="number" class="form-control" id="budget" name="budget" required>
            </div>
            <div class="mb-3">
                <label for="activities" class="form-label">Jenis Aktivitas</label>
                <input type="text" class="form-control" id="activities" name="activities">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi Perjalanan</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <div class="mb-3">
                <label for="crowd_preference" class="form-label">Tingkat Keramaian</label>
                <input type="text" class="form-control" id="crowd_preference" name="crowd_preference">
            </div>
            <div class="mb-3">
                <label for="transportation" class="form-label">Preferensi Transportasi</label>
                <input type="text" class="form-control" id="transportation" name="transportation">
            </div>
            <div class="mb-3">
                <label for="weather_preference" class="form-label">Preferensi Cuaca</label>
                <input type="text" class="form-control" id="weather_preference" name="weather_preference">
            </div>
            <button type="submit" class="btn btn-primary">Dapatkan Rekomendasi</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
