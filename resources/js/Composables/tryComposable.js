export default function useGetGeoLocation() {
    const status = navigator.permissions.query({name: 'geolocation'});
    if (status.state === 'granted') {
        return 'Geolocation permission already granted';
    } else if ('geolocation' in navigator) {
        navigator.geolocation.getCurrentPosition(() => {
            return 'Not Granted Before now Geolocation permission granted';
        }, (err) => {
            return ['Geolocation permission rejected:', err];
        });
    } else {
        return new Error('Geolocation not supported');
    }
}
