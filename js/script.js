var countDownDate = new Date("Feb 25, 2024 9:30:00").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;
    var counter = document.getElementById("demo");
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    counter.innerHTML = days + "يوم " + hours + "ساعة " +
        minutes + "دقيقة " + seconds + "ثانية ";

    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "لقد وصلت متأخراً";
    }
}, 1000);


const win = document.querySelector("#winner");

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
})

win.addEventListener('click', function() {
    setTimeout(function() {
        myModal.show();
    }, 3000)
});


//Loader

var height = 100,
    perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime / 1000) % 60) * 100;

// Loadbar Animation
$(".loadbar").animate({
    height: height + "%"
}, time);

// Fading Out Loadbar on Finised
setTimeout(function() {
    $('.preloader-wrap').fadeOut(300);
}, time);