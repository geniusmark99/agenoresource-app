document.addEventListener("DOMContentLoaded", function() {
const Id = function(el){
return document.getElementById(el)};
const formSteps = document.querySelectorAll(".js-form-step"),
progressIndicators = document.querySelectorAll(".form-progress-indicator div"),
nextButtons = document.querySelectorAll(".js-next"),
prevButtons = document.querySelectorAll(".js-prev"),
progressBar = Id("progressBar"),
form = Id("progressForm"),
assetName = Id('asset_name'),
assetInfo = Id('asset_information'),
technicalReport = Id("technical_report"),
formSectionOne = Id("form_section_one");
formSectionTwo = Id("form_section_two");
let currentStep = 0;



function checkFirstFields(btnId,inputRefs) {
if(inputRefs[0].value !== '' && inputRefs[1].value !== '' && inputRefs[2].value !== '') {
formSectionOne.classList.add('hidden');
formSectionOne.classList.remove('flex');
Id(btnId).disabled = false;
Id(btnId).classList.remove('bg-rose-500/50');
Id(btnId).classList.add('bg-ageno-2');
Id(btnId).classList.remove('cursor-not-allowed');
}
else{
formSectionOne.classList.remove('hidden');
formSectionOne.classList.add('flex');
Id(btnId).disabled = true;
Id(btnId).classList.add('bg-rose-500/50');
Id(btnId).classList.remove('bg-ageno-2');
Id(btnId).classList.add('cursor-not-allowed');
}
}

function checkSecondFields(btnId,inputRefs) {
if(Id(inputRefs[0]).value !== '' && Id(inputRefs[1]).value !== '' && Id(inputRefs[2]).value !== ''
&& Id(inputRefs[3]).value !== '' && Id(inputRefs[4]).value !== '' && Id(inputRefs[5]).value !== '') {
Id('form_section_two').classList.add('hidden');
Id('form_section_two').classList.remove('flex');
Id(btnId).disabled = false;
Id(btnId).classList.remove('bg-rose-500/50');
Id(btnId).classList.add('bg-ageno-2');
Id(btnId).classList.remove('cursor-not-allowed');
}
else{
Id('form_section_two').classList.remove('hidden');
Id('form_section_two').classList.add('flex');
Id(btnId).disabled = true;
Id(btnId).classList.add('bg-rose-500/50');
Id(btnId).classList.remove('bg-ageno-2');
Id(btnId).classList.add('cursor-not-allowed');
}
}


function checkThirdFields(btnId,inputRefs) {
if(Id(inputRefs[0]).value !== '' && Id(inputRefs[1]).value !== '' && Id(inputRefs[2]).value !== '' && Id(inputRefs[3]).value !== '') {
Id('form_section_three').classList.add('hidden');
Id('form_section_three').classList.remove('flex');
Id(btnId).disabled = false;
Id(btnId).classList.remove('bg-rose-500/50');
Id(btnId).classList.add('bg-ageno-2');
Id(btnId).classList.remove('cursor-not-allowed');
}
else{
Id('form_section_three').classList.remove('hidden');
Id('form_section_three').classList.add('flex');
Id(btnId).disabled = true;
Id(btnId).classList.add('bg-rose-500/50');
Id(btnId).classList.remove('bg-ageno-2');
Id(btnId).classList.add('cursor-not-allowed');
}
}

//************** First Form Section **************//
['asset_name','asset_information','technical_report'].forEach((e)=>{
Id(e).addEventListener('input',()=>{
checkFirstFields('first_next_btn',[assetName,assetInfo,technicalReport]);
});
});
//************** End of First Form Section **************//

//************** Second Form Section
['asset_location_details','geological_location','price','coordinates','reserve_deposit','jorc_report'].forEach((e)=>{
Id(e).addEventListener('input',()=>{
checkSecondFields('second_next_btn',['asset_location_details','geological_location','price','coordinates','reserve_deposit','jorc_report']);
});
});
//************** End of Second Form Section **************//

//************** Third Form Section **************//
['opportunity_type','land_size','mineral_details','contact_information'].forEach((e)=>{
Id(e).addEventListener('input',()=>{
checkThirdFields('third_next_btn',['opportunity_type','land_size','mineral_details','contact_information']);
});
});
//************** End of Third Form Section **************//
    




function showStep(step) {
formSteps.forEach((formStep, index) => {
formStep.classList.toggle("hidden", index !== step);
formStep.classList.toggle("active", index === step);
});
progressIndicators.forEach((indicator, index) => {
indicator.classList.toggle("bg-ageno-2", index <= step);
indicator.classList.toggle("bg-gray-300", index > step);
});
progressBar.style.width = (step / (formSteps.length)) * 100 + "%";
}

nextButtons.forEach(button => {
button.addEventListener("click", () => {
if (currentStep < formSteps.length - 1) {
currentStep++;
showStep(currentStep);
}
});
});

prevButtons.forEach(button => {
button.addEventListener("click", () => {
if (currentStep > 0) {
currentStep--;
showStep(currentStep);
}
});
});

form.addEventListener("submit", (event) => {
// event.preventDefault();
// alert("Form submitted!");
// form.reset();
// currentStep = 0;
// showStep(currentStep);
});

showStep(currentStep);
});


// document.addEventListener('DOMContentLoaded',function(){

//     const formElements = document.querySelectorAll('#progressForm input');
//     const form = document.getElementById('progressForm');

//     for (let i = 0; i < form.elements.length; i++) {
//             const element = form.elements[i];
//             const savedValue = localStorage.getItem(element.name);
//             if (savedValue !== null) {

//                 if (element.type === 'checkbox' || element.type === 'radio') {
//                     element.checked = (element.value === savedValue);
//                 } else {
//                 if (element.type !== 'file') {
//                     element.value = savedValue;
//                 }
//                 }
//             }
//         }

//         form.addEventListener('input', function (event) {
//             const element = event.target;
//             if (element.type === 'checkbox' || element.type === 'radio') {
//                 if (element.checked) {
//                     localStorage.setItem(element.name, element.value);
//                 }
//             } else {
//                 if (element.type !== 'file') {
//                 localStorage.setItem(element.name, element.value);
//                 }
//             }
//         });
// });

