document.oncontextmenu = new Function("return false");

function ffalse() {
    return false;
}
function ftrue() {
    return true;
}
document.onselectstart = new Function("return false");
if (window.sidebar) {
    document.onmousedown = ffalse;
    document.onclick = ftrue;
}