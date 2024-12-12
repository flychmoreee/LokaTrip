<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destinations;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function addDestination(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'location' => 'required|string',
            'category' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'google_maps' => 'required|string|max:10000',
            'open' => 'required',
            'close' => 'required',
            'facilities' => 'required|string',
        ]);

        $nameDestination = $request->name;

        // Store thumbnail
        $thumbnailPath = $request->file('thumbnail')->store("public/destinations/$nameDestination/thumbnail");

        Destinations::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'location' => $request->location,
            'google_maps' => $this->convertGoogleMapsToEmbed($request->google_maps),
            'category' => $request->category,
            'thumbnail' => str_replace('public/', '', $thumbnailPath),
            'open' => $request->open,
            'close' => $request->close,
            'facilities' => $request->facilities,
        ]);

        return redirect()->route('admin.destination')->with('success', 'Destination created successfully.');
    }

    public function updateDestination(Request $request, Destinations $destination)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'location' => 'required|string',
            'category' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'google_maps' => 'required|string|max:10000',
            'open' => 'required',
            'close' => 'required',
            'facilities' => 'required|string',
        ]);

        $nameDestination = $request->name;

        // Update thumbnail
        if ($request->hasFile('thumbnail')) {
            Storage::delete("public/{$destination->thumbnail}");
            $thumbnailPath = $request->file('thumbnail')->store("public/destinations/$nameDestination/thumbnail");
            $destination->thumbnail = str_replace('public/', '', $thumbnailPath);
        }

        $destination->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'location' => $request->location,
            'google_maps' => $this->convertGoogleMapsToEmbed($request->google_maps),
            'category' => $request->category,
            'open' => $request->open,
            'close' => $request->close,
            'facilities' => $request->facilities,
        ]);

        return redirect()->route('admin.destination')->with('success', 'Destination updated successfully.');
    }

    public function deleteDestination(Destinations $destination)
    {
        // Delete thumbnail and gallery
        Storage::delete($destination->thumbnail);

        // Delete directory
        $nameDestination = $destination->name;
        Storage::deleteDirectory("destinations/$nameDestination");

        $destination->delete();

        return redirect()->route('admin.destination')->with('success', 'Destination deleted successfully.');
    }

    private function convertGoogleMapsToEmbed($url)
    {
        if (empty($url)) return '';

        if (strpos($url, 'maps/embed') !== false) {
            return $url;
        }

        if (strpos($url, 'goo.gl') !== false || strpos($url, 'maps.app') !== false) {
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_MAXREDIRS, 5);

                $response = curl_exec($ch);

                $finalUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
                curl_close($ch);

                $url = $finalUrl;
            } catch (\Exception $e) {
                return $url;
            }
        }

        if (preg_match('/place\/([^\/]+)\/@([-\d.]+),([-\d.]+).*!1s([^!]+)/', $url, $matches)) {
            $placeName = urlencode($matches[1]);
            $lat = $matches[2];
            $lng = $matches[3];
            $placeId = $matches[4];

            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0450103841974!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s{$placeId}!2s{$placeName}!5e0!3m2!1sen!2sid!4v1692983710289!5m2!1sen!2sid";
        }

        if (preg_match('/@([-\d.]+),([-\d.]+).*data=.*!3m1!1s([\w\d:]+)/', $url, $matches)) {
            $lat = $matches[1];
            $lng = $matches[2];
            $placeId = $matches[3];

            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0450103841974!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s{$placeId}!2s!5e0!3m2!1sen!2sid!4v1692983710289!5m2!1sen!2sid";
        }

        if (preg_match('/@([-\d.]+),([-\d.]+),\d+z\/data=.*!3m1!4b1!4m6!3m5!1s([^!]+)/', $url, $matches)) {
            $lat = $matches[1];
            $lng = $matches[2];
            $placeId = $matches[3];

            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0450103841974!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s{$placeId}!2s!5e0!3m2!1sen!2sid!4v1692983710289!5m2!1sen!2sid";
        }
        return $url;
    }
}
