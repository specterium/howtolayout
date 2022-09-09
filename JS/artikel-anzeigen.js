function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
$(function () {
    document.querySelectorAll(".sterne").forEach(element=>{
        element.textContent=getRandomInt(1,5);
    });
});