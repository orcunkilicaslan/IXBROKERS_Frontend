let submitForm = (formID) => {
    let form = document.getElementById(formID);
    clearFormErrorsAndHighlights(form);
    let validationResult = validateForm(form);
    highlightFields(form, validationResult);
    if(validationResult.invalidFields.length > 0){
        showFormError(form);
    }
    return false;
}

let showFormError = (form) => {
    let html = '<div class="alert alert-sweet alert-warning alert-dismissible fade show fformerror" role="alert">\n' +
        '    <div class="alert-flex">\n' +
        '        <div class="alert-icon">\n' +
        '            <div class="animation-alert-icons">\n' +
        '                <div class="alert-icons alert-icons-warning">\n' +
        '                    <div class="alert-icons-warning-body"></div>\n' +
        '                    <div class="alert-icons-warning-dot"></div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        <div class="alert-desc">\n' +
        '            <h6 class="alert-heading">FORM HAS MISSING/INVALID FIELDS</h6>\n' +
        '            <p>Please check your information and try again</p>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
        '         <span aria-hidden="true">&times;</span>\n' +
        '    </button>'
    '</div>';
    let element = createElementFromHTML(html);
    try {
        form.parentNode.insertBefore(element, form);
    } catch (e) {
        console.log(e);
    }
}

let validateForm = (form) => {
    let validateFields = form.querySelectorAll('.fvalidate');
    let invalidFields = [];
    let validFields = [];
    validateFields.forEach( field => {
        if(!validateField(form, field)){
            invalidFields.push(field);
        } else {
            validFields.push(field);
        }
    })
    return {
        invalidFields: invalidFields,
        validFields: validFields
    };
}

let validateField = (form, field) => {
    let rules = field.getAttribute('frule').split(',');
    let isFieldValid = true;
    rules.forEach(rule => {
        if(!willApplyRule(form, field.value, rule)){
            isFieldValid = false;
        }
    })
    return isFieldValid;
}

let willApplyRule = (form, value, rule) => {
    let rName, rVal;
    if(rule.indexOf(':')){
        let rarr = rule.split(':');
        rName = rarr[0];
        rVal = rarr[1];
    } else {
        rName = rule;
    }

    switch (rName) {
        case 'minl':
            return (String(value).length >= rVal);

        case 'maxl':
            return (String(value).length <= rVal);

        case 'email':
            let rgx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return rgx.test(String(value).toLowerCase());

        case 'phone':
            let reg = /^[0-9]{10,11}$/;
            return reg.test(String(value.replace(/\s/g, "")));

        case 'same':
            let reference = form.querySelector(`input[name="${rVal}"]`);
            return reference.value === value;
    }
    return true;
}

let clearFormErrorsAndHighlights = (form) => {
    let formErrorElement = document.getElementById(form.getAttribute('errcontainer'));
    formErrorElement.classList.add("d-none");

    let validateFields = form.querySelectorAll('.fvalidate');
    validateFields.forEach( field => {
        findAncestorByClass(field, 'form-group').classList.remove('invalid');
        findAncestorByClass(field, 'form-group').classList.remove('valid');
    });

    let formErrorEl = document.querySelectorAll('.fformerror');
    formErrorEl.forEach(formError => formError.remove());
}

let highlightFields = (form, fields) => {
    fields.invalidFields.forEach(field => {
        findAncestorByClass(field, 'form-group').classList.add("invalid");
    });

    fields.validFields.forEach(field => {
        findAncestorByClass(field, 'form-group').classList.add("valid");
    });
}

let findAncestorByClass = (el, cls) => {
    while ((el = el.parentNode) && el.className.indexOf(cls) < 0);
    return el;
}


let createElementFromHTML = (htmlString) => {
    var div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    return div.firstChild;
}
