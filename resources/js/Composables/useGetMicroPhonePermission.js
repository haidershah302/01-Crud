export default async function useGetMicroPhonePermission() {
    const status = await navigator.permissions.query({name: 'microphone'});
    if (status.state === 'granted') {
        return Promise.resolve();
    } else {
        return navigator.mediaDevices.getUserMedia({audio: true}).catch((err) => {
            return Promise.reject(err, 'Microphone permission rejected:');
        });
    }
}
