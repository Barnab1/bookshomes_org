/**
 * Main Javascript File
 */

const audioBookField = document.querySelectorAll('#audioBookField li');
const subFields = document.querySelectorAll('.sub-field-audio-book button');


audioBookField.forEach((field)=>{
    field.addEventListener("click",()=>{
        audioBookField.forEach((f)=>{
            f.classList.remove('active-link');
            field.classList.add('active-link');
        })  
    })
})

subFields.forEach((subField)=>{
    subField.addEventListener("click",()=>{
        subFields.forEach((sbf)=>{
            sbf.classList.remove('active');
            subField.classList.add('active');
        })
    })
})