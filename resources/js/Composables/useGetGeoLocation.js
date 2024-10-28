export default async function useGetGeoLocation() {
    await navigator.permissions.query({name: 'geolocation'});
    return new Promise((resolve, reject) => {
        navigator.geolocation.getCurrentPosition(async (position) => {
            const {latitude, longitude} = position.coords;
            const api = 'https://api.geoapify.com/v1/geocode/reverse';
            const apiKey = 'bd3f6908da864faf9592536de6820269';
            try {
                const response = await fetch(`${api}?lat=${latitude}&lon=${longitude}&apiKey=${apiKey}`);
                const data = await response.json();
                resolve(data.features[0].properties);
            } catch (err) {
                reject('Failed to fetch address:', err);
            }
        }, (err) => {
            reject('Geolocation permission rejected:', err);
        });
    });
}
