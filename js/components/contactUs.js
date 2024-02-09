function contactUs () {
    const inputCriteria = {
        "name":{
            name: "Name",
            min: 2,
            max: 25,
            isRequired: true,
            regex: /^[a-zA-Z\s]+$/
        },
        "email":{
            name: "Email",
            min: 3,
            max: 50,
            isRequired: true,
            regex: /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/
        },
        "telephone":{
            name: "Telephone Number",
            min: 3,
            max: 25,
            isRequired: true,
            regex: /^\d{12}$/
        },
        "message":{
            name: "Message",
            min: 3,
            max: 9999,
            isRequired: true
        }
    };

    function checkError(id, inputValue) {
        //  Get the criteria for the input's validation
        if(!inputCriteria[id]) {
            return {
                hasError: false
            }
        }

        const currCriteria = inputCriteria[id];
    
        //  Check if required
        if(currCriteria.isRequired) {
            //      Check if below minimum or above maximum
            if(inputValue.length <= currCriteria.min) {
                return {
                    hasError: true,
                    errorMessage: `${currCriteria.name} must be more than ${currCriteria.min} characters long!`
                }
            } else if (inputValue.length > currCriteria.max) {
                return {
                    hasError: true,
                    errorMessage: `${currCriteria.name} must be below ${currCriteria.max} characters!`
                }
            }
            if(!inputValue.match(currCriteria.regex)){
                return {
                    hasError: true,
                    errorMessage: `Invalid ${currCriteria.name} entered!`
                }
            }
        }
        return {
            hasError: false
        }
    }

    $('.contact-form input, .contact-form textarea').on('input', function() {
        const id = $(this).attr('id');
        const inputValue = $(this).val();
        const error = checkError(id, inputValue);
        if(error.hasError) {
            $(this).addClass('error');
            console.log(error.errorMessage);
        } else {
            $(this).removeClass('error');
            console.log('No error');
        }
    });

}

export default contactUs;