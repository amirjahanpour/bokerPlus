// Swicher
function toggleSwitcher() {
    var i = document.getElementById('style-switcher');
    if (i.style.left === "-189px") {
        i.style.left = "0px";
    } else {
        i.style.left = "-189px";
	}
};

function setColor(theme,url) {
    // document.getElementById('color-opt').href = './asset/css/colors/' + theme + '.css';
    const link = document.getElementById('color-opt');
    link.href = url + '/colors/' + theme + '.css';
    toggleSwitcher(false);
};

function setTheme(theme,url) {
    // document.getElementById('theme-opt').href = './asset/css/' + theme + '.min.css';
    const link = document.getElementById('theme-opt');
    link.href = url + '/' + theme + '.min.css';

    toggleSwitcher(false);
};
