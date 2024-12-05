<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Tempat Pariwisata</title>
</head>

<body>

    <h1>Rekomendasi Tempat Pariwisata</h1>

    <form action="{{ route('destination.recommendation') }}" method="POST">
        @csrf

        <!-- Kota Tujuan -->
        <label for="destination_city">Kota Tujuan:</label>
        <input type="text" id="destination_city" name="destination_city" required><br><br>

        <!-- Kategori Perjalanan -->
        <label for="travel_category">Kategori Perjalanan:</label>
        <input type="text" id="travel_category" name="travel_category" required><br><br>

        <!-- Jenis Pengalaman (Dropdown) -->
        <label for="experience_type">Jenis Pengalaman:</label>
        <select id="experience_type" name="experience_type" required>
            <option value="relaksasi">Relaksasi</option>
            <option value="eksplorasi">Eksplorasi</option>
            <option value="pendidikan">Pendidikan</option>
        </select><br><br>

        <!-- Submit Button -->
        <button type="submit">Dapatkan Rekomendasi</button>
    </form>

    <!-- Display AI Response -->
    <div id="response-output" style="margin-top: 20px;"></div>

    <script>
        // Optional: Add JS to handle response and show it dynamically if needed
        const form = document.querySelector('form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });

            const result = await response.json();

            const output = document.getElementById('response-output');
            if (result.status === 'success') {
                output.innerHTML = `<strong>Rekomendasi Tempat:</strong><br>${result.data}`;
            } else {
                output.innerHTML = `<strong>Error:</strong> ${result.message}`;
            }
        });
    </script>

</body>

</html>
