$(function(){
    $("form.ajaxAutoValidate").submit(function(evnt){
        evnt.preventDefault();
        let formValid = isFormValid($(this).attr('id'));
        if(formValid){
            submitForm($(this).attr('id'));
        }

    })
});

let submitForm = (formID) => {
    let frm = $(`form#${formID}`);
    let originalValue = frm.find(':submit').html();
    frm.find(':submit').html('SENDING');

    $.ajax({
        type: 'POST',
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (data) {
            if(!data.success){
                showFormError(document.getElementById(formID), "FORM HAS ERRORS", data.reason);
            }
            let container = document.getElementById(formID).parentNode;
            container.innerHTML = '';
            let html = generateFormResult(formID);
            container.innerHTML = html;
        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
            frm.find(':submit').html(originalValue);
        },
    });

}

let isFormValid = (formID) => {
    let form = document.getElementById(formID);
    clearFormErrorsAndHighlights(form);
    let validationResult = validateForm(form);
    highlightFields(form, validationResult);
    if(validationResult.invalidFields.length > 0){
        showFormError(form, "FORM HAS MISSING/INVALID FIELDS", "Please check your information and try again");
        return false;
    }
    return true;
}

let showFormError = (form, errorTitle, errorDesc) => {
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
        '            <h6 class="alert-heading">' + errorTitle + '</h6>\n' +
        '            <p>' + errorDesc + '</p>\n' +
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

        case 'minv':
            return Number(value) >= Number(rVal);

        case 'maxv':
            return Number(value) <= Number(rVal);

        case 'not':
            return value !== rVal;
    }
    return true;
}

let clearFormErrorsAndHighlights = (form) => {
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

let generateFormResult = (formID) => {
    let title = desc = buttonText = buttonLink = '';

    switch (formID) {
        case 'openDemoAccountForm':
            title = 'ACCOUNT <span class="sitecolorgreen">READY</span>';
            desc = 'Click the button below to sign in to your account';
            buttonText = 'CLICK TO LOGIN';
            buttonLink = '#';
            break;

        case 'partnerShipForm':
            title = 'THANKS FOR <span class="sitecolorgreen">YOUR INTEREST</span>';
            desc = 'Our representatives will contact you shortly';
            break;
    }
    let html = '';
    html += '<div class="formresultbox">';
    html += '<div class="formresultbox-head">';
    html += '<h3 class="formresultbox-head-title">' + title + '</h3>';
    html += '<p class="formresultbox-head-desc">' + desc + '</p>';
    html += '</div>';
    if(buttonText !== ''){
        html += '<div class="formresultbox-btnarea">';
        html += '<a class="btn btn-lg btn-success" href="' + buttonLink + '" title="CLICK TO SIGN IN">' + buttonText + '</a>';
        html += '</div>';
    }
    html += '</div>';
    return html;
}
