var salarySlider = document.getElementById("salary-slider");

var min_salary_initial = 1;

var salary_input = null

noUiSlider.create(salarySlider, {
    start: [min_salary_initial],

    connect: true,

    behaviour: "tap",

    range: {
        min: 1,
        max: 6,
    },

    tooltips: false,

    format: wNumb({
        decimals: 0,
    }),

    step: 1,
});

var salaryValues = [document.getElementById("min_salary")];

salarySlider.noUiSlider.on("update", function (values, handle) {
    switch (values[0]) {
        case "1":
            salaryValues[handle].innerHTML = "Less than RM1,500";
            salary_input = "Less than RM1,500";
            break;
        case "2":
            salaryValues[handle].innerHTML = "RM1,500 - RM3,000";
            salary_input = "RM1,500 - RM3,000";
            break;
        case "3":
            salaryValues[handle].innerHTML = "RM3,000 - RM6,000";
            salary_input = "RM3,000 - RM6,000";
            break;
        case "4":
            salaryValues[handle].innerHTML = "RM6,000 - RM10,000";
            salary_input = "RM6,000 - RM10,000";
            break;
        case "5":
            salaryValues[handle].innerHTML = "RM10,000 - RM15,000";
            salary_input = "RM10,000 - RM15,000";
            break;
        case "6":
            salaryValues[handle].innerHTML = "More than RM15,000";
            salary_input = "More than RM15,000";
            break;
    }
});

var hospitalSlider = document.getElementById("hospital-slider");

var min_hospital_initial = 1;

var hospital_input = null;

noUiSlider.create(hospitalSlider, {
    start: [min_hospital_initial],

    connect: true,

    behaviour: "tap",

    range: {
        min: 1,
        max: 4,
    },

    tooltips: false,

    format: wNumb({
        decimals: 0,
    }),

    step: 1,
});

var hospitalValues = [document.getElementById("hospital_text")];

hospitalSlider.noUiSlider.on("update", function (values, handle) {
    switch (values[0]) {
        case "1":
            hospitalValues[handle].innerHTML = "Not Once";
            hospital_input = "Not Once";
            break;
        case "2":
            hospitalValues[handle].innerHTML = "Once or Twice";
            hospital_input = "Once or Twice";
            break;
        case "3":
            hospitalValues[handle].innerHTML = "Three to Five Times";
            hospital_input = "Three to Five Times";
            break;
        case "4":
            hospitalValues[handle].innerHTML = "More Than Five Times";
            hospital_input = "More Than Five Times";
            break;
    }
});

var travelSlider = document.getElementById("travel-slider");

var min_travel_initial = 1;

var travel_input = null;

noUiSlider.create(travelSlider, {
    start: [min_travel_initial],

    connect: true,

    behaviour: "tap",

    range: {
        min: 1,
        max: 4,
    },

    tooltips: false,

    format: wNumb({
        decimals: 0,
    }),

    step: 1,
});

var travelValues = [document.getElementById("travel_text")];

travelSlider.noUiSlider.on("update", function (values, handle) {
    switch (values[0]) {
        case "1":
            travelValues[handle].innerHTML = "Not Once";
            travel_input = "Not Once";
            break;
        case "2":
            travelValues[handle].innerHTML = "Once or Twice";
            travel_input = "Once or Twice";
            break;
        case "3":
            travelValues[handle].innerHTML = "Three to Five Times";
            travel_input = "Three to Five Times";
            break;
        case "4":
            travelValues[handle].innerHTML = "More Than Five Times";
            travel_input = "More Than Five Times";
            break;
    }
});


function changeG1(){
    if(document.getElementById('btn-check-outlined-g1').checked){
        document.getElementById("label-g1").innerHTML = "No"
    }else{
        document.getElementById("label-g1").innerHTML = "Yes"
    }
}

function changeG2(){
    if(document.getElementById('btn-check-outlined-g2').checked){
        document.getElementById("label-g2").innerHTML = "No"
    }else{
        document.getElementById("label-g2").innerHTML = "Yes"
    }
}

function changeG3(){
    if(document.getElementById('btn-check-outlined-g3').checked){
        document.getElementById("label-g3").innerHTML = "No"
    }else{
        document.getElementById("label-g3").innerHTML = "Yes"
    }
}

function changeG4(){
    if(document.getElementById('btn-check-outlined-g4').checked){
        document.getElementById("label-g4").innerHTML = "No"
    }else{
        document.getElementById("label-g4").innerHTML = "Yes"
    }
}

function changeG5(){
    if(document.getElementById('btn-check-outlined-g5').checked){
        document.getElementById("label-g5").innerHTML = "No"
    }else{
        document.getElementById("label-g5").innerHTML = "Yes"
    }
}



$("#s3Form").on("submit", function (eventObj) {
    if (salary_input != null) {
        $(this).append(
            "<input type='hidden' name='income_range' value='" +
                salary_input +
                "'/> "
        );
    }
    if (hospital_input != null) {
        $(this).append(
            "<input type='hidden' name='admittance_freq' value='" +
                hospital_input +
                "'/> "
        );
    }
    if (travel_input != null) {
        $(this).append(
            "<input type='hidden' name='travel_freq' value='" +
                travel_input +
                "'/> "
        );
    }
});
