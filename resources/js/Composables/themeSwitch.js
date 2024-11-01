
function startTheme() {
    const currentTheme = checkTheme();
    document.documentElement.setAttribute('data-theme', currentTheme);
}

function switchTheme() {
    const currentTheme = checkTheme();
    const changeTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', changeTheme);
    localStorage.theme = changeTheme;
}

function checkTheme () {
    return localStorage.theme === 'dark'
    || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ? 'dark'
        : 'light';
}

export {startTheme, switchTheme};
