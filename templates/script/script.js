/**
 * Main Javascript File
 */

const audioBookField = document.querySelectorAll('#audioBookField li');
const subFields = document.querySelectorAll('.sub-field-audio-book .field');


audioBookField.forEach((field)=>{
    field.addEventListener("click",()=>{
        audioBookField.forEach((fi)=>{
            f.classList.remove('active-link');
            field.classList.add('active-link');
        })  
    })
})

/*
subFields.forEach((subField)=>{
    subField.addEventListener("click",(e)=>{
        e.preventDefault()
        subFields.forEach((sbf)=>{
            sbf.classList.remove('active');
            subField.classList.add('active');
            alert('hi')
            subField.style.backgroundColor = "#045be6";
        })
    })
})
    */