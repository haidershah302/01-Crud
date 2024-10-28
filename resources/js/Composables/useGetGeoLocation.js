import {ref} from "vue";

export default async function useGetGeoLocation() {
    const countries = ref([
        {
            "name": "Afghanistan",
            "dial_code": +93,
            "code": "AF"
        },
        {
            "name": "Aland Islands",
            "dial_code": +358,
            "code": "AX"
        },
        {
            "name": "Pakistan",
            "dial_code": +92,
            "code": "PK"
        },
    ])
    await navigator.permissions.query({name: 'geolocation'});
    const geolocation = new Promise((resolve, reject) => {
            navigator.geolocation.getCurrentPosition(async (position) => {
                const {latitude, longitude} = position.coords;
                const api = 'https://api.geoapify.com/v1/geocode/reverse';
                const apiKey = 'bd3f6908da864faf9592536de6820269';
                try {
                    const response = await fetch(`${api}?lat=${latitude}&lon=${longitude}&apiKey=${apiKey}`);
                    const data = await response.json();

                    const country = data.features[0].properties.country;
                    const countryData = countries.value.find(c => c.name === country);
                    resolve(countryData ? countryData : `Country ${country} not found in the array`);
                } catch (err) {
                    reject('Failed to fetch address:', err);
                }
            }, (err) => {
                reject('Geolocation permission rejected:', err);
            });
        });
    return {
        geolocation,
        countries,
    }
}
