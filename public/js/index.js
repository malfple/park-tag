function timeStringToFloat(time) {
    var hoursMinutes = time.split(/[.:]/);
    var hours = parseInt(hoursMinutes[0], 10);
    var minutes = hoursMinutes[1] ? parseInt(hoursMinutes[1], 10) : 0;
    return hours * 60 + minutes;
}

function timeToPrice(time){
    var hours = Math.ceil(time / 60);
    return 5000 + 4000 * (hours - 1);
}

const btEstimate = document.getElementById('btEstimate');
btEstimate.addEventListener('click', function(){
    const date = document.getElementsByName('date')[0].value;
    const arrival = timeStringToFloat(document.getElementsByName('usr_time')[0].value);
    const leave = timeStringToFloat(document.getElementsByName('usr_time')[1].value);

    //alert(arrival + " " + leave);

    if(isNaN(arrival) || isNaN(leave)){
        alert('You need to fill out the time');
    }else if(arrival + 60 > leave){
        alert('You need to book at least 1 hour');
    }else{
        const estimatedTime = document.getElementsByName('EstimatedTime')[0];
        const estimatedPrice = document.getElementsByName('EstimatedPrice')[0];

        estimatedTime.value = (leave - arrival) + " minutes";
        estimatedPrice.value = "Rp. " + timeToPrice(leave - arrival);
    }
});