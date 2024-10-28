export default async function useGetMicroPhonePermission() {
    const status = await navigator.permissions.query({name: 'microphone'});

    if (status.state === 'granted') {
        return;
    }

    await navigator.mediaDevices.getUserMedia({audio: true});
}
