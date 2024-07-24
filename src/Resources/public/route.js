async function getCoordinates(address) {
    const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`);
    const data = await response.json();
    if (data && data.length > 0) {
        return { lat: data[0].lat, lon: data[0].lon };
    } else {
        throw new Error('Address not found');
    }
}

async function calculateRoute(event) {
    event.preventDefault();

    var startAddress = document.getElementById('start').value;
    var destinationCoords = document.getElementById('destination').value;

    try {
        const startCoords = await getCoordinates(startAddress);
        var url = `https://www.openstreetmap.org/directions?engine=fossgis_osrm_car&route=${startCoords.lat}%2C${startCoords.lon}%3B${destinationCoords}#map=9`;

        window.open(url, '_blank');
    } catch (error) {
        alert('Es gab ein Problem bei der Berechnung der Route: ' + error.message);
    }
}