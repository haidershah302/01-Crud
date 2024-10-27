export default async function useGetGeoLocation() {
    const status = await navigator.permissions.query({name: 'geolocation'});
    if (status.state === 'granted') {
        return Promise.resolve('Geolocation permission already granted');
    } else {
        return new Promise((resolve, reject) => {
            if ('geolocation' in navigator) {
                navigator.geolocation.getCurrentPosition(() => {
                    resolve();
                }, (err) => {
                    reject('Geolocation permission rejected:', err);
                });
            } else {
                const err = new Error('Geolocation not supported');
                reject(err);
            }
        });
    }
}
